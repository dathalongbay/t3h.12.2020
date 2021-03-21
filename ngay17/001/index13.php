<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<strong>
    Dùng vòng lặp foreach in ra các thông tin trong bảng html sau :
</strong>
<?php
$cities = [
  ["name" => "hà nội", "ds" => 5000000, "s" => 1000]  ,
  ["name" => "hồ chí minh", "ds" => 8000000, "s" => 2000]  ,
  ["name" => "thanh hóa", "ds" => 2000000, "s" => 100]  ,
  ["name" => "nghệ an", "ds" => 1000000, "s" => 200]  ,
  ["name" => "hà tĩnh", "ds" => 3000000, "s" => 800]  ,
];

echo "<pre>";
print_r($cities);
echo "</pre>";
?>

<table class="table">
    <thead>
    <tr>
        <td>STT</td>
        <td>tên TP</td>
        <td>dân số</td>
        <td>diện tích</td>
        <td>mật độ người / km2</td>
    </tr>
    </thead>

    <tbody>

        <?php
        $i = 1;
        foreach($cities as $keyCity => $city) {
        ?>

        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $city["name"] ?></td>
            <td><?php echo $city["ds"] ?></td>
            <td><?php echo $city["s"] ?></td>
            <td><?php echo $city["ds"]/$city["s"] ?></td>
        </tr>

        <?php
        $i++;
        } ?>





    </tbody>
</table>

</body>
</html>