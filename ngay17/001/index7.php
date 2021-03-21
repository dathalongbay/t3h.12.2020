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
        Mảng trong php :
        - Mảng loại 1 là mảng chỉ số là mảng có các key là chỉ số
    </pre>

    <?php
    // cách 1
    $sinhVien = [0 => "ng văn an", 1 => "ng van tuan", 2 => "ng van hoàng"];
    // cách 2
    $sinhVien = array(0 => "ng văn an", 1 => "ng van tuan", 2 => "ng van hoàng");
    // cách 3
    $sinhVien = ["ng văn an", "ng van tuan", "ng van hoàng"];

    // cách 4
    $sinhVien = []; // khai báo mảng
    // gán vào phần tử vào bên trong mảng vừa khai báo
    $sinhVien[0] = "ng văn an";
    $sinhVien[1] = "ng văn tuan";
    $sinhVien[2] = "ng văn hoàng";

    // cách 5
    $sinhVien = []; // khai báo mảng
    // gán vào phần tử vào bên trong mảng vừa khai báo
    $sinhVien[] = "ng văn an";
    $sinhVien[] = "ng văn tuan";
    $sinhVien[] = "ng văn hoàng";

    // var_dump() in ra kiểu dữ liệu và giá trị
    var_dump($sinhVien);

    // in ra cấu trúc mảng
    echo "<pre>";
    print_r($sinhVien);
    echo "</pre>";

    ?>

</body>
</html>