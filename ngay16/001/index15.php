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
        sự khác biệt của nháy đơn và nháy kép khi in ra biến
        chú ý ; khi để tên biến vd $a trong nháy kép
        thì php sẽ hiểu đó là 1 biến
        nếu để tên biến vd $a trong nháy đơn thì php
        sẽ hiểu đó là 1 chuỗi $a
    </pre>

    <?php
    $a = "hà nội";

    echo "<br>";
    echo "dùng nháy kép : $a";
    echo "<br>";
    echo 'dùng nháy đơn : $a';
    ?>


</body>
</html>