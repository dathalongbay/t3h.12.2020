<?php
// XAMPP
$username = "root";
$password = "";
// máy chủ CSDL ( IP ) sử dụng 127.0.0.1 hay localhost => production : 192.118.1.11
$serverName = "127.0.0.1";
// tên CSDL ( tùy chọn )
$databaseName = "t3h.12.2020";

// kết nối PHP sang MYSQL theo cách hướng đối tượng OOP
// khởi tạo object từ class bằng từ khóa new
// mặc định php cung cấp 1 class có sẵn tên là mysqli ( class có sẵn )

// định nghĩa 1 biến chứa kết nối đến CSDL trong mysql
$connection = new mysqli($serverName, $username, $password, $databaseName);

echo "<pre>";
print_r($connection);
echo "</pre>";

// điều kiện $connection->connect_error khác rỗng khác 0 khác null thì điều kiện trong () trả về true
if ($connection->connect_error) {
    // trường hợp có lỗi
    echo "<br> có lỗi xảy ra " . $connection->connect_error;

    // No connection could be made because the target machine actively refused it.
} else {
    echo "Kết nối thành công và không có lỗi ";
}
