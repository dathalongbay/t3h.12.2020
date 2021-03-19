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
    Các kiểu dữ liệu trong php
</pre>
<?php
$a = 12;
// kiểu chuỗi
$b = "Hà nội";
$c = 'Đà nẵng';
// boolean
$d = true;
$e = false;
// null
$f = null;
// mảng
$cities = ["hà nội", "đà nẵng", "hồ chí minh"];

// đối tượng
class Student {

    // thuộc tính
    public $ten = "";
    public $tuoi = 0;

    // hàm khởi tạo có bắt đầu bằng 2 dầu shift trừ
    public function __construct($ten, $tuoi)
    {
        $this->ten = $ten;
        $this->tuoi = $tuoi;
    }
    // phương thức trong class
    public function inThongtin() {
        echo "<br> tên : " . $this->ten;
        echo "<br> tuổi : " . $this->tuoi;
    }
}

$tuanAnh = new Student("tuấn anh", 20);
$tuanAnh->inThongtin();
echo "<br>";
var_dump($tuanAnh);
echo "<br>";
var_dump($a);
// hàm var_dump() cho chúng ta quan sát kiểu dữ liệu và giá trị của biến
echo "<br>";
var_dump($b);

echo "<br>";
var_dump($d);

echo "<br>";
var_dump($cities);
?>

</body>
</html>