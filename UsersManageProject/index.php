<?php
require_once "connection.php";


echo "<pre>";
print_r($_SERVER['QUERY_STRING']);
echo "</pre>";

echo "<pre>";
print_r($_GET);
echo "</pre>";
// gán mặc định
$user_gender_int = "";
$keyword = (isset($_GET["keyword"]) && $_GET["keyword"]) ? $_GET["keyword"] : "";
$user_gender = (isset($_GET["user_gender"]) && $_GET["user_gender"]) ? $_GET["user_gender"] : "";
if (strlen($keyword) > 0) {
    $sqlCount = "SELECT COUNT(*) AS total FROM users WHERE user_name LIKE '%$keyword%' OR user_phone LIKE '%$keyword%'";
} else {
    $sqlCount = "SELECT COUNT(*) AS total FROM users";
}

if (in_array($user_gender, ["user_gender_1", "user_gender_0"])) {
    $user_gender_int = str_replace("user_gender_", "", $user_gender);
    $user_gender_int = (int) $user_gender_int;
    $sqlCount .= " WHERE user_gender = $user_gender_int";
}
echo "<br> \$sqlCount" . $sqlCount;

$stmtCount = $connection->prepare($sqlCount);
$stmtCount->execute();
$resultCount = $stmtCount->setFetchMode(PDO::FETCH_OBJ);
// tổng số bản ghi
$count = $stmtCount->fetchColumn();
// giới hạn số bản ghi mỗi trang
$limitRecord = 10;
// tổng số trang làm tròn 9.1 => 10 trang thông qua ceil()
$pageTotal = ($count/$limitRecord);
$pageTotal = ceil($pageTotal);

// page hiện tại
$curPage = isset($_GET["curPage"]) ? (int)$_GET["curPage"] : 1;
$curPage = $curPage-1;
$start = ($limitRecord*$curPage);
// page 1 : start 0
// page 2 : start 10
// page 3 : start 20




// SELECT * FROM users WHERE id > 0 LIMIT start,limit
// start là thứ tự bản ghi bắt đầu
// limit là số lượng bản ghi chúng ta lấy ra 1 lần

// phân trang mỗi trang có 10 bản ghi limit = 10
// trang 1 SELECT * FROM users LIMIT 0,10
// trang 2 SELECT * FROM users LIMIT 10,10
// trang 3 SELECT * FROM users LIMIT 20,10
// trang 4 SELECT * FROM users LIMIT 30,10
// trang 5 SELECT * FROM users LIMIT 40,10
$orderBy = (isset($_GET["orderby"]) && $_GET["orderby"]) ? $_GET["orderby"] : "user_id";
$orderDir = (isset($_GET["orderdir"]) && $_GET["orderdir"]) ? $_GET["orderdir"] : "ASC";
if (strlen($keyword) > 0) {
    $sqlSelect = "SELECT * FROM users WHERE user_name LIKE '%$keyword%' OR user_phone LIKE '%$keyword%'";

    if (in_array($user_gender, ["user_gender_1", "user_gender_0"])) {
        $user_gender_int = str_replace("user_gender_", "", $user_gender);
        $user_gender_int = (int) $user_gender_int;
        $sqlSelect .= " AND user_gender = $user_gender_int";
    }
} else {
    $sqlSelect = "SELECT * FROM users";

    if (in_array($user_gender, ["user_gender_1", "user_gender_0"])) {
        $user_gender_int = str_replace("user_gender_", "", $user_gender);
        $user_gender_int = (int) $user_gender_int;
        $sqlSelect .= " WHERE user_gender = $user_gender_int";
    }
}
$sqlSelect .= " ORDER BY $orderBy $orderDir";
$sqlSelect .= " LIMIT $start,$limitRecord";




echo "<br> sql phân trang : " . $sqlSelect;

// truyền câu sql truy vấn select vào trong method prepare() trên object connection
// sau đó trả kết quả vào trong biến $stmt
$stmt = $connection->prepare($sqlSelect);

// biến $stmt gọi đến method execute() để thực thi câu SQL
$stmt->execute();

// set the resulting array to associative
// setFetchMode() trên object $stmt chỉ định kiểu dữ liệu lấy ra từ db
// PDO::FETCH_OBJ chỉ định mỗi bản ghi lấy ra là stdClass ( object )
// $student->id
// PDO::FETCH_ASSOC chỉ định mỗi bản ghi lấy ra là 1 array mảng
// $student["id"]
$result = $stmt->setFetchMode(PDO::FETCH_OBJ);

// $stmt->fetchAll() để lấy ra tất cả dữ liệu tương ứng với câu SQL
$users = $stmt->fetchAll();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Danh sách người dùng (<?php echo $count ?> người dùng)</h1>

            <div style="margin: 20px">
                <a href="create.php" class="btn btn-info">Thêm mới người dùng</a>
            </div>
            <div style="margin: 20px">
                <form action="" method="get" name="search">
                    <input type="text" name="keyword" value="<?php echo $keyword ?>">
                    <select name="orderby">

                        <option value="">Sắp xếp theo</option>
                        <option value="user_id" <?php echo ($orderBy == "user_id") ? "selected" : "" ?>>ID</option>
                        <option value="user_name" <?php echo ($orderBy == "user_name") ? "selected" : "" ?>>User Name</option>
                        <option value="user_phone" <?php echo ($orderBy == "user_phone") ? "selected" : "" ?>>SĐT</option>
                        <option value="user_email" <?php echo ($orderBy == "user_email") ? "selected" : "" ?>>Email</option>
                        <option value="user_birthday" <?php echo ($orderBy == "user_birthday") ? "selected" : "" ?>>Sinh nhật</option>
                    </select>
                    <select name="orderdir">
                        <option value="">Sắp xếp theo hướng</option>
                        <option value="ASC" <?php echo ($orderDir == "ASC") ? "selected" : "" ?>>Tăng dần</option>
                        <option value="DESC" <?php echo ($orderDir == "DESC") ? "selected" : "" ?>>Giảm dần</option>
                    </select>

                    Lọc theo giới tính
                    <select name="user_gender">
                        <option value="">-- Lọc theo giới tính --</option>
                        <option value="user_gender_1" <?php echo ($user_gender_int === 1) ? "selected" : "" ?>>Nam</option>
                        <option value="user_gender_0" <?php echo ($user_gender_int === 0) ? "selected" : "" ?>>Nữ</option>
                    </select>
                    <button class="btn btn-primary">Lọc kết quả</button>
                </form>




            </div>

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>SDT</th>
                    <th>Email</th>
                    <th>Sinh nhật</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>

                <?php
                if (is_array($users) && !empty($users)) {
                    foreach($users as $keyUser => $user) {
                        // $student
                        ?>

                        <tr>
                            <td><?php echo $user->user_id ?></td>
                            <td><?php echo $user->user_name ?></td>
                            <td><?php echo $user->user_phone ?></td>
                            <td><?php echo $user->user_email ?></td>
                            <td><?php echo $user->user_birthday ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $user->user_id ?>" class="btn btn-warning">Edit</a>
                                <a href="delete.php?id=<?php echo $user->user_id ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                    } // end foreach
                } // end if
                ?>



                </tbody>
            </table>


            <?php

            // hoàn trả 1 cho biến $curPage
            $curPage = $curPage + 1;
            $previous = ($curPage > 1) ? $curPage - 1 : 0;
            $next = $curPage + 1;
            ?>
            <ul class="pagination">
                <?php if ($previous > 0) {
                    $tmp = $_GET;
                    $tmp["curPage"] = $previous;
                    // http_build_query() chuyển 1 mảng thành query string url đúng
                    $linkPrevious = "index.php?".http_build_query($tmp);
                    ?> <li class="page-item"><a class="page-link" href="<?php echo $linkPrevious ?>">Previous</a></li> <?php
                } ?>

                <?php for($page = 1; $page <= $pageTotal; $page++) {
                    $pageClassAction = "";

                    if ($curPage == $page) {
                        $pageClassAction = " active";
                    }
                    $tmp = $_GET;
                    $tmp["curPage"] = $page;
                    $linkPage = "index.php?".http_build_query($tmp);
                    ?>
                    <li class="page-item <?php echo $pageClassAction ?>"><a class="page-link " href="<?php echo $linkPage ?>"><?php echo $page ?></a></li>
                    <?php
                } // end for ?>
                <?php if($next < $page) {
                    $tmp = $_GET;
                    $tmp["curPage"] = $next;
                    $linkNext = "index.php?".http_build_query($tmp);
                    ?>
                    <li class="page-item"><a class="page-link" href="<?php echo $linkNext ?>">Next</a></li>
                    <?php
                } ?>

            </ul>

        </div>
    </div>
</div>

</body>
</html>
