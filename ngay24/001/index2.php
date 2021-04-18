<?php
// CREATE DATABASE dbname;
// vd : CREATE DATABASE abc3;
// tên CSDL là abc3

// XAMPP
$username = "root";
$password = "";
// máy chủ CSDL ( IP ) sử dụng 127.0.0.1 hay localhost => production : 192.118.1.11
$serverName = "127.0.0.1";
// tên CSDL ( tùy chọn )
$databaseName = "t3h.12.2020";

try {
    // $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    $connection = new PDO("mysql:host=$serverName;dbname=$databaseName", $username, $password);
    // set the PDO error mode to exception
    // đặt chế độ lỗi cho ngoại lệ khi kết nối PDO
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // thành công chạy dưới này
    echo "<br> Kết nối thành công";

    $sql = "CREATE DATABASE abc3";

    // để thực hiện 1 câu sql bằng PDO
    // dùng biến chứa kết nối đến CSDL -> phương thức exec()
    // truyền câu lệnh SQL vào trong method exec($sql)
    $sqlReturn = $connection->exec($sql);

   if ($sqlReturn == 1) {
       // câu lệnh query sql thực hiện thành công
   } else {
       // câu lệnh query sql thực hiện thất bại
   }

} catch (PDOException $e) {
    // kết nối thất bại PDO ném ra 1 exception ngoại lệ thuộc class PDOException
   /* echo "<pre>";
    print_r($e);
    echo "</pre>";*/

    // nhận thông điệp lỗi ngoại lệ
    echo $e->getMessage();

}