<?php

// XAMPP
$username = "root";
$password = "";
// máy chủ CSDL ( IP ) sử dụng 127.0.0.1 hay localhost => production : 192.118.1.11
$serverName = "127.0.0.1";
// tên CSDL ( tùy chọn )
$databaseName = "t3h.12.2020";

// kết nối CSDL theo hướng hàm function
// dùng hàm có sẵn của php để kết nối thay vì dùng class như cách oop
$connection = mysqli_connect($serverName, $username, $password, $databaseName);

// kiểm tra lỗi hay ko
var_dump($connection);

echo "<pre>";
print_r($connection);
echo "</pre>";

if ($connection) {
    // kết nối thành công
} else {
    // kết nối thất bại
}

if (!$connection) {
    // kết nối thất bại
} else {
    // kết nối thành công
}
