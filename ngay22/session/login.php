<?php
// Start the session
session_start();

echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "In ra mảng session <pre>";
print_r($_SESSION);
echo "</pre>";

$errors = [];
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (strlen($username) == 0 || strlen($password) == 0) {
        $errors[] = "Chưa nhập username hay password";
    } else {
      // nhập dữ liệu vào
        if ($username == "root" && $password == "abc@123") {
            // login thành công
            // tạo ra session user
            $_SESSION["user_login"] = ["username" => $username,
                "password" => $password, "login" => 1];

            // chuyển hướng index.php
            // header("Location: đích đến");
            header("Location: index.php");
            // chú ý sau khi chuyển hướng bằng header() thì phải kết thúc bằng
            // die hay exit
            die();

        } else {
            $errors[] = "username/password không đúng";
        }

    }
} else {
    $errors[] = "Chưa nhập username hay password";
}

echo "mảng errors <pre>";
print_r($errors);
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
</head>
<body>
    <form name="login" action="" method="post">
        <div>
            <label>Username</label>
            <input type="text" name="username" value="">
        </div>

        <div>
            <label>Password</label>
            <input type="password" name="password" value="">
        </div>

        <button type="submit">Submit login</button>
    </form>

</body>
</html>