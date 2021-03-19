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
        Biến trong php
        Biến là thứ/đối tượng/ gì đó để lưu trữ giá trị và có thể
        thay đổi giá trị mà biến chứa trong quá trình chạy
        Hằng số gần giống biến nhưng giá trị của hằng số
        không thay đổi trong suốt quá trình chạy
    </pre>

    <?php
    // trong js dùng từ khóa var a; let a; const a;
    // trong js dùng 1 trong 3 từ khóa var/let/const
    // trong php biến phải có ký tự đầu tiên là $
    $a = 5;
    $b = 1;
    // toán tử nối chuỗi trong php .
    echo "<br> Tổng : " . ($a + $b);
    echo "<br> hiệu : " . ($a - $b);
    echo "<br> tích : " . ($a * $b);
    echo "<br> thương : " . ($a / $b);
    echo "<br> chia lấy dư : " . ($a % $b);



    ?>

</body>
</html>