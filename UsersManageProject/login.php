<?php
session_start();
require_once "connection.php";

if (isset($_SESSION["user_login"])) {
    // chưa tồn tại phiên đăng nhập
    header("Location: index.php");
    exit;
}

echo "<pre>";
print_r($_POST);
echo "</pre>";

// mảng chứa lỗi
$errors = [];
if (isset($_POST) && !empty($_POST)) {
    // có dữ liệu post đi
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password = md5($password);
    if (strlen($username) > 0 && strlen($username) > 0) {
        $sqlLogin = "SELECT * FROM users WHERE user_name = '$username' AND user_password = '$password' LIMIT 1";
        echo "<br>" . $sqlLogin;
        $stmtLogin = $connection->prepare($sqlLogin);
        $stmtLogin->execute();
        $resultLogin = $stmtLogin->setFetchMode(PDO::FETCH_OBJ);
// tổng số bản ghi
        $login = $stmtLogin->fetchObject();

        echo "<pre>";
        print_r($login);
        echo "</pre>";
        var_dump($login);

        // Admin12345 | Admin12345
        if (is_object($login) && $login->user_id > 0) {
            // đăng nhập thành công
            $_SESSION["user_login"] = $login;

            header("Location: index.php");
            exit;
        } else {
            // không tìm thấy user nào phù hợp user_name/user_password
            $errors[] = "Username hay password không hợp lệ";
        }
    } else {
        $errors[] = "Username hay password chưa được nhập";
    }
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
        if (isset($errors) && !empty($errors)) {
            ?>
            <div class="alert alert-danger" role="alert">
                <?php
                // implode chuyển 1 array thành 1 chuỗi
                echo implode("<br>", $errors) ?>
            </div>
        <?php
        }
        ?>
        <div class="col-md-12" style="margin-top: 70px">
            <form name="login" method="post" action="">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>