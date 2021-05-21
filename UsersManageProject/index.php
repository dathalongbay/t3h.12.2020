<?php
require_once "connection.php";

// SELECT * FROM users WHERE id > 0 LIMIT start,limit
// start là thứ tự bản ghi bắt đầu
// limit là số lượng bản ghi chúng ta lấy ra 1 lần

// phân trang mỗi trang có 10 bản ghi limit = 10
// trang 1 SELECT * FROM users LIMIT 0,10
// trang 2 SELECT * FROM users LIMIT 10,10
// trang 3 SELECT * FROM users LIMIT 20,10
// trang 4 SELECT * FROM users LIMIT 30,10
// trang 5 SELECT * FROM users LIMIT 40,10
$sqlSelect = "SELECT * FROM users";

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

echo "<pre>";
print_r($users);
echo "</pre>";

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
            <h1>Danh sách người dùng</h1>

            <div style="margin: 20px">
                <a href="create.php" class="btn btn-info">Thêm mới người dùng</a>
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
        </div>
    </div>
</div>

</body>
</html>
