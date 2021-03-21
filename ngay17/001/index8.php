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
        Mảng kết hợp trong php
        key của mảng kết hợp có ít nhất 1 key là chuỗi
        - key có thể vừa là số và và chuỗi
        - key toàn là chuỗi
    </pre>

    <?php
    // cách 5
    $sinhVien = []; // khai báo mảng
    // gán vào phần tử vào bên trong mảng vừa khai báo
    $sinhVien[0] = "ng văn an";
    $sinhVien["nvt"] = "ng văn tuan";
    $sinhVien["nvh"] = "ng văn hoàng";

    // cách 5
    $sinhVien2 = []; // khai báo mảng
    // gán vào phần tử vào bên trong mảng vừa khai báo
    $sinhVien2["nva"] = "ng văn an";
    $sinhVien2["nvt"] = "ng văn tuan";
    $sinhVien2["nvh"] = "ng văn hoàng";

    echo "<pre>";
    print_r($sinhVien2);
    echo "</pre>";
    ?>

    <pre>
        mảng sinhVien và sinhVien2 đều là mảng kết hợp
        có ít nhất 1 key là chuỗi
    </pre>

</body>
</html>