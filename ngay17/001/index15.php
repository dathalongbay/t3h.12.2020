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
        Ví dụ thay đổi giá trị của các phần tử bên trong array
        thông qua việc gán lại theo key
        yêu cầu : thêm chữ "thành phố " trước tên thành phố.
        thêm chữ " người" sau dân số
        thêm chữ " km2" sau diện tích
        thêm 1 key vào bên trong phần tử là mds ( mật độ dân số )
        vào trong mảng
    </pre>

    <?php
    $cities = [
        ["name" => "hà nội", "ds" => 5000000, "s" => 1000]  ,
        ["name" => "hồ chí minh", "ds" => 8000000, "s" => 2000]  ,
        ["name" => "thanh hóa", "ds" => 2000000, "s" => 100]  ,
        ["name" => "nghệ an", "ds" => 1000000, "s" => 200]  ,
        ["name" => "hà tĩnh", "ds" => 3000000, "s" => 800]  ,
    ];

    echo "<br> mảng ban đầu";
    echo "<pre>";
    print_r($cities);
    echo "</pre>";

    foreach($cities as $keyCity => $city) {
        $cities[$keyCity]["name"] = "thành phố " . $cities[$keyCity]["name"];

        $cities[$keyCity]["mds"] = ($cities[$keyCity]["ds"]/$cities[$keyCity]["s"]);

        $cities[$keyCity]["ds"] = $cities[$keyCity]["ds"] . " người";
        $cities[$keyCity]["s"] = $cities[$keyCity]["s"] . " km2";

    }


    echo "<br> mảng sau khi xử lý";
    echo "<pre>";
    print_r($cities);
    echo "</pre>";
    ?>
</body>
</html>