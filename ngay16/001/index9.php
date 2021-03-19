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
    $a = true;
    // ! toán tử phủ định
    $b = !$a;

    var_dump($b);

    // mang ý nghĩa phủ đinh có thể là false , null , chuỗi rỗng , số 0

    if (!$a) {
        echo "Không hợp lệ";
    } else {
        echo "hợp lệ";
    }
    ?>


</body>
</html>