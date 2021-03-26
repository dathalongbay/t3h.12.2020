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
        http://localhost/t3h.12.2020/ngay18/001/index1.php?chieucao1=1.7&cannang1=67

        phần 1 : http://localhost/t3h.12.2020/ngay18/001/
        là domain tên miền trên local trên production là www.abc.com
        phần 2 : index1.php là file chúng ta đang chạy
        Phần 3 : ?chieucao1=1.7&cannang1=67
        gọi là query string xuất hiện trên url sau dấu ?
        hiểu đơn giản tham số trên url như biến
        chieucao1=1.7
        cannang1=67
        nếu có nhiều tham số trên url thì chúng ta sẽ nối các tham số này bằng dấu &

        => làm sao lấy được giá trị của các tham số xuất hiện trên url
        => sử dụng $_GET trong php

        chú ý : những tham số xuất hiện trên url từ form có method="get"
        submit dữ liệu đi thì key của query string trên url chính là
        giá trị của thuộc tính name="" trong form

    </pre>

    <?php
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    $cannang1 = $_GET['chieucao1'];
    var_dump($cannang1);
    ?>

<form name="bmi" action="" method="get">
    <div>
        <label for="">Chiều cao</label>
        <input name="chieucao1" value="" type="text">
    </div>

    <div>
        <label for="">Cân năng</label>
        <input name="cannang1" value="" type="text">
    </div>

    <div>
        <button type="submit">Tính BMI</button>
    </div>
</form>

</body>
</html>