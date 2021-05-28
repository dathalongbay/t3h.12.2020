<?php
session_start();
require_once "connection.php";

if (!isset($_SESSION["user_login"])) {
    // chưa tồn tại phiên đăng nhập
    header("Location: login.php");
    exit;
}

// cập nhật dữ liệu sau khi sửa vào trong db
if (count($_POST) > 0) {
    echo " dữ liệu post di : <pre>";
    print_r($_POST);
    echo "</pre>";
    $user_id = (int)$_POST['user_id'];
    $user_name = $_POST['user_name'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_email = $_POST['user_email'];
    $user_gender = (int)$_POST['user_gender'];
    $user_phone = $_POST['user_phone'];
    $user_address = $_POST['user_address'];

    $user_birthday = $_POST['user_birthday'];
    $user_desc = $_POST['user_desc'];
    $updated = date("Y-m-d H:i:s");


    $user_password = $_POST['user_password'];

    $uploadOK = 0;
    if (isset($_FILES["user_avatar"]["name"]) && isset($_FILES["user_avatar"]["tmp_name"])) {
        if (strlen($_FILES["user_avatar"]["name"]) > 0 && strlen($_FILES["user_avatar"]["tmp_name"]) > 0 && strlen($_FILES["user_avatar"]["size"]) > 0) {
            $target_dir = "uploads/";

            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            $target_file = $target_dir . basename($_FILES["user_avatar"]["name"]);
            if (move_uploaded_file($_FILES["user_avatar"]["tmp_name"], $target_file)){
                $uploadOK = 1;
            }
        }
    }


    $dataBindSql = [];
    // sql update va sql delete
    $sqlUpdate = "UPDATE `users` SET ";

    $sqlUpdate .= "`user_name` = ? ";
    $dataBindSql[] = $user_name;

    $sqlUpdate .= ",`first_name` = ?";
    $dataBindSql[] = $first_name;

    $sqlUpdate .= ",`last_name` = ?";
    $dataBindSql[] = $last_name;

    $sqlUpdate .= ", `user_email` = ?";
    $dataBindSql[] = $user_email;

    $sqlUpdate .= ", `user_gender` = ?";
    $dataBindSql[] = $user_gender;

    $sqlUpdate .= ", `user_phone` = ? ";
    $dataBindSql[] = $user_phone;

    $sqlUpdate .= ", `user_address` = ?";
    $dataBindSql[] = $user_address;

    // cập nhật avatar khi người dùng upload ảnh mới lên
    if ($uploadOK == 1 && isset($target_file)) {
        $sqlUpdate .= ",`user_avatar` = ?";
        $dataBindSql[] = $target_file;
    }

    $sqlUpdate .= ",`user_birthday` =?";
    $dataBindSql[] = $user_birthday;

    // cập nhật mật khẩu khi người dùng nhập mật khẩu mới vào
    if (strlen($user_password) > 0) {
        $user_password = md5($user_password);
        $sqlUpdate .= ",`user_password` = ?";
        $dataBindSql[] = $user_password;
    }

    $sqlUpdate .= ",`user_desc` = ?";
    $dataBindSql[] = $user_desc;

    $sqlUpdate .= ",`updated` = ?";
    $dataBindSql[] = $updated;

    $sqlUpdate .= " WHERE `user_id` = ?";
    $dataBindSql[] = $user_id;

    echo "<br>" . $sqlUpdate;
    echo "<pre>";
    print_r($dataBindSql);
    echo "</pre>";


    $stmtInsert = $connection->prepare($sqlUpdate);

    // 11 dấu ? đến 13 ?
    // => mảng bind dữ lieu vào trong execute() có từ 11 đến 13 phần tử
    $resultUpdate = $stmtInsert->execute($dataBindSql);

    if ($resultUpdate == 1) {
        // insert thành công
        $_SESSION["flash_message"] = "Cập nhật người dùng thành công";
        header("Location: edit.php?id=".$user_id);
        exit();
    }
}

// lấy bản ghi từ CSDL ra theo id xuất hiện trên url
if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
    $user_id = (int)$_GET["id"];
    $sqlSelect = "SELECT * FROM users WHERE user_id = ? LIMIT 1";

// truyền câu sql truy vấn select vào trong method prepare() trên object connection
// sau đó trả kết quả vào trong biến $stmt
    $stmt = $connection->prepare($sqlSelect);

// biến $stmt gọi đến method execute() để thực thi câu SQL
    $stmt->execute([$user_id]);

// set the resulting array to associative
// setFetchMode() trên object $stmt chỉ định kiểu dữ liệu lấy ra từ db
// PDO::FETCH_OBJ chỉ định mỗi bản ghi lấy ra là stdClass ( object )
// $student->id
// PDO::FETCH_ASSOC chỉ định mỗi bản ghi lấy ra là 1 array mảng
// $student["id"]
    $result = $stmt->setFetchMode(PDO::FETCH_OBJ);

// $stmt->fetchObject() để lấy ra dưới dạng object
    $user = $stmt->fetchObject();

    echo "<pre>";
    print_r($user);
    echo "</pre>";
} else {
    echo "Dữ liệu không hợp lệ";
    exit;
}

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
        <?php
        if (isset($_SESSION["flash_message"])) {
            ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION["flash_message"]; ?>
            </div>
            <?php
            unset($_SESSION["flash_message"]);
        }
        ?>

        <div class="col-md-12">
            <h1>Sửa người dùng</h1>
            <form name="themsv" method="post" action="" enctype="multipart/form-data">

                <input type="hidden" name="user_id" value="<?php echo $user->user_id ?>" />

                <div class="form-group">
                    <label>Username người dùng</label>
                    <input type="text" name="user_name" class="form-control" value="<?php echo $user->user_name ?>">
                </div>

                <div class="form-group">
                    <label>Lastname người dùng</label>
                    <input type="text" name="last_name" class="form-control" value="<?php echo $user->last_name ?>">
                </div>

                <div class="form-group">
                    <label>Firstname người dùng</label>
                    <input type="text" name="first_name" class="form-control" value="<?php echo $user->first_name ?>">
                </div>

                <div class="form-group">
                    <label>SDT người dùng</label>
                    <input type="text" name="user_phone" class="form-control" value="<?php echo $user->user_phone ?>">
                </div>

                <div class="form-group">
                    <label>Mật khẩu người dùng</label>
                    <input type="password" name="user_password" class="form-control" value="">
                </div>

                <div class="form-group">
                    <label>Email người dùng</label>
                    <input type="email" name="user_email" class="form-control" value="<?php echo $user->user_email ?>">
                </div>

                <div class="form-group">
                    <label>Ảnh đại diện </label>
                    <?php if (isset($user->user_avatar) && strlen($user->user_avatar) > 0) {
                        ?>
                        <br> <img src="<?php echo $user->user_avatar ?>" alt="" style="width: 100px; height: auto">
                        <?php
                    } ?>
                    <input type="file" name="user_avatar">
                </div>

                <div class="form-group">
                    <label>Nơi ở người dùng</label>
                    <input type="text" name="user_address" class="form-control" value="<?php echo $user->user_address ?>" >
                </div>

                <div class="form-group">
                    <label>Sinh nhật người dùng
                        <?php $user_birthday = explode(" ", $user->user_birthday); ?></label>
                    <input type="date" name="user_birthday" class="form-control" value="<?php echo $user_birthday[0] ?>">
                </div>

                <div class="form-group">
                    <label>Giới tính người dùng <span style="color:red">*</span></label>
                    <?php $checked0 = ($user->user_gender == 0) ? " checked" : "";  ?>
                    <input type="radio" name="user_gender" value="0" <?php echo $checked0 ?>> Nữ
                    <?php $checked1 = ($user->user_gender == 1) ? " checked" : "";  ?>
                    <input type="radio" name="user_gender" value="1" <?php echo $checked1 ?>> Nam
                </div>

                <div class="form-group">
                    <label>Mô tả người dùng</label>
                    <textarea name="user_desc" id="" cols="30" rows="10"  class="form-control"><?php echo $user->user_desc ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
