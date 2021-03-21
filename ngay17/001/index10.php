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
        Mảng đa chiều ( mảng lồng mảng )
        mỗi phần tử bên trong có thể là mảng

        tỉnh chứa quận huyện
        quận huyện chứa phường
    </pre>

    <?php
    $cities = [];
    $cities["hn"] = [
        "name" => "hà nội",
        "district" => [
            [
                "name" => "quận tây hồ",
                "unit" => ["phường tứ liên", "phường abc"]
            ],
            [
                "name" => "quận hai bà trưng",
                "unit" => ["phường abc1", "phường abc2"]
            ]
        ]
    ];

    $cities["hcm"] = [
        "name" => "hồ chí minh",
        "district" => [
            "quận thủ đức",
            "quận 1",
            "quận 5",
        ]
    ];

    echo "<pre>";
    print_r($cities);
    echo "</pre>";

    // không thể echo 1 mảng
    echo "<br>" . $cities["hn"]["district"][0];
    echo "<pre>";
    print_r($cities["hn"]["district"][0]);
    echo "</pre>";

    echo "<br>" . $cities["hcm"]["district"][2];

    // thử in ra tên tp hà nội và hồ chí minh từ cấu trúc mảng
    ?>

</body>
</html>