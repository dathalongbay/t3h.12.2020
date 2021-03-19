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
        if else
    </pre>

    <?php

    $thu = 6;

    // && là toán tử AND có nghĩa phải thỏa mãn tất cả các điều kiện
    // || là toán từ OR có nghĩa là chỉ cần thỏa mãn 1 trong các điều kiện
    if ($thu > 1 && $thu < 7) {
        // từ 2 đến 6 là ngày làm việc
        echo "hôm nay là ngày làm việc";
    } else {
        echo "hôm nay là ngày nghỉ";
    }

    ?>

</body>
</html>