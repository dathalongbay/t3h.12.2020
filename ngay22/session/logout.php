<?php
// Start the session
session_start();

echo "In ra mảng session <pre>";
print_r($_SESSION);
echo "</pre>";
// unset() hủy 1 biến hay 1 phần tử bên trong mảng
// xóa 1 session cần thiết
unset($_SESSION["user_login"]);
?>

<?php

// remove all session variables
// xóa hết session

// session_unset();

// destroy the session

// session_destroy();

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
    Đã đăng xuất thành công

</body>
</html>