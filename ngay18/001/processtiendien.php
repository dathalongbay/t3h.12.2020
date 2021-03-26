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

<?php
$_GET = ['sodien'=> 570];
echo "<pre>";
print_r($_GET);
echo "</pre>";

// gán kwh tiêu thụ
$kwh = (isset($_GET["sodien"]) && $_GET["sodien"] > 0) ? (int) $_GET["sodien"] : 0;
// 6 biến lưu trữ số tiền cần phải trả trên từng kwh cho từng bậc
$t1 = 1678;
$t2 = 1734;
$t3 = 2014;
$t4 = 2536;
$t5 = 2834;
$t6 = 2927;
// 6 biến lưu trữ số kwh tiêu thu cho từng bậc
$x1 = $x2 = $x3 = $x4 = $x5 = $x6 = 0;

// 6 biến lưu trữ số tiền phải trả cho từng bậc
$m1 = $m2 = $m3 = $m4 = $m5 = $m6 = 0;

// tổng số tiền phải trả
$money = 0;

// chia thành 6 nhóm trường hợp
// sử dụng if elseif
if ($kwh > 0 && $kwh <= 50) {
    // ví dụ 20 số điện
    $x1 = $kwh;
    $m1 = $kwh*$t1;
    $money = $kwh*$t1;
} elseif ($kwh > 50 && $kwh <= 100) {
    // ví dụ 80 số điện
    $x1 = 50;
    $x2 = $kwh - $x1;
    $m1 = $x1*$t1;
    $m2 = $x2*$t2;
    $money = $m1 + $m2;
} elseif ($kwh > 100 && $kwh <= 200) {
    // ví dụ 110 số điện
    $x1 = 50;
    $x2 = 50;
    $x3 = $kwh-$x1-$x2;
    $m1 = $x1*$t1;
    $m2 = $x2*$t2;
    $m3 = $x3*$t3;
    $money = $m1 + $m2 + $m3;
} elseif ($kwh > 200 && $kwh <= 300) {
    // ví dụ 210 số điện
    $x1 = 50;
    $x2 = 50;
    $x3 = 100;
    $x4 = $kwh-$x1-$x2-$x3;
    $m1 = $x1*$t1;
    $m2 = $x2*$t2;
    $m3 = $x3*$t3;
    $m4 = $x4*$t4;
    $money = $m1 + $m2 + $m3 + $m4;
} elseif ($kwh > 300 && $kwh <= 400) {
    // ví dụ 330 số điện
    $x1 = 50;
    $x2 = 50;
    $x3 = 100;
    $x4 = 100;
    $x5 = $kwh-$x1-$x2-$x3-$x4;
    $m1 = $x1*$t1;
    $m2 = $x2*$t2;
    $m3 = $x3*$t3;
    $m4 = $x4*$t4;
    $m5 = $x5*$t5;
    $money = $m1 + $m2 + $m3 + $m4 + $m5;
} elseif ($kwh > 400) {
    // ví dụ 500 số điện
    $x1 = 50;
    $x2 = 50;
    $x3 = 100;
    $x4 = 100;
    $x5 = 100;
    $x6 = $kwh-$x1-$x2-$x3-$x4-$x5;
    $m1 = $x1*$t1;
    $m2 = $x2*$t2;
    $m3 = $x3*$t3;
    $m4 = $x4*$t4;
    $m5 = $x5*$t5;
    $m6 = $x6*$t6;
    $money = $m1 + $m2 + $m3 + $m4 + $m5 + $m6;
} else {
    // tiêu thụ 0 số điện
}

?>

<h1>Hãy in ra số tiền phải trả :</h1>
<table align="center" border="1" cellpadding="0" cellspacing="1" style="width:600px">
    <thead>
    <tr>
        <th>
            <p><strong>TT</strong></p>
        </th>
        <th>
            <p><strong>Nhóm đối tượng khách hàng</strong></p>
        </th>
        <th>
            <p><strong>Giá bán điện</strong></p>

            <p><strong>(đồng/kWh)</strong></p>
        </th>
        <th>
            Tổng số kwh tiêu thụ
        </th>
        <th>
            Số tiền phải trả cho bậc thang này
        </th>
    </tr>
    </thead>
    <tbody>

    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 1: Cho kWh từ 0 - 50</p>
        </td>
        <td>
            <p>1.678</p>
        </td>
        <td><?php echo $x1 ?></td>
        <td><?php echo $m1 ?></td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 2: Cho kWh từ 51 - 100</p>
        </td>
        <td>
            <p>1.734</p>
        </td>
        <td>?</td>
        <td>?</td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 3: Cho kWh từ 101 - 200</p>
        </td>
        <td>
            <p>2.014</p>
        </td>
        <td>?</td>
        <td>?</td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 4: Cho kWh từ 201 - 300</p>
        </td>
        <td>
            <p>2.536</p>
        </td>
        <td>?</td>
        <td>?</td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 5: Cho kWh từ 301 - 400</p>
        </td>
        <td>
            <p>2.834</p>
        </td>
        <td>?</td>
        <td>?</td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 6: Cho kWh từ 401 trở lên</p>
        </td>
        <td>
            <p>2.927</p>
        </td>
        <td>?</td>
        <td>?</td>
    </tr>
    </tbody>
</table>

    <p><strong>Tổng số tiền điện : <?php echo $money ?></strong></p>
<?php
$tax = 0.1*$money;
?>
    <p><strong>Thuế GTGT 10% : <?php echo $tax; ?></strong></p>
    <p><strong>Tổng tiền phải thanh toán : <?php echo ($money+$tax) ?></strong></p>




</body>
</html>
