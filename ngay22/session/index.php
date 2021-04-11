<?php
// Start the session
session_start();

echo "In ra mảng session <pre>";
print_r($_SESSION);
echo "</pre>";

if (!isset($_SESSION["user_login"]["login"]) || ($_SESSION["user_login"]["login"] != 1)) {
    // chưa đăng nhập
    header("Location: login.php");
    exit();
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
</head>
<body>
    <pre>
        dùng session cho giỏ hàng , đăng nhập , đăng xuất
        xác thực người dùng
        - phân quyền
        - username/password
        - root/abc@123
        - session chia sẽ dữ liệu trên tất cả các file php của server
        vd : server có 200 file php khác nhau
        thì khi tạo ra 1 session trên 1 file thì 200 file còn lại đều tồn tại
        session
        - session có thể dùng chia sẽ dữ liệu chung giữa các trang trên server
    </pre>

    <div>
        Đăng nhập thành công
        <br> chào <?php echo isset($_SESSION["user_login"]["username"]) ? $_SESSION["user_login"]["username"] : "" ?> bạn đã vào trong trang quản trị

        <a href="logout.php"> Ấn vào đây để đăng xuất </a>
    </div>
</body>
</html>