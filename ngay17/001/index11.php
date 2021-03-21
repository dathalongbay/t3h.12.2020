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
        Vòng lặp foreach() áp dụng cho lặp mảng
    </pre>

    <?php
    $cities = ["hà nội", "hồ chí minh", "đà nẵng", "nghệ an"];
    echo "<pre>";
    print_r($cities);
    echo "</pre>";
    ?>
    <p>Dạng đầy đủ foreach</p>
    <ul>
        <?php
        foreach($cities as $key => $value) {
            echo "<li> <span style='color:red'>$key</span> -- $value</li>";
        }
        ?>
    </ul>

    <p>Dạng rút gọn foreach</p>
    <ul>
        <?php
        foreach($cities as $value) {
            echo "<li> -- $value</li>";
        }
        ?>
    </ul>

    <p>Dạng đầy đủ foreach với tên biến dễ hiểu</p>
    <ul>
        <?php
        foreach($cities as $keyCity => $city) {
            echo "<li> <span style='color:red'>$keyCity</span> -- $city</li>";
        }
        ?>
    </ul>

</body>
</html>