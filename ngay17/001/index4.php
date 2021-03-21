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
        xuất ra chuỗi : chào "hà nội" việt nam
        giả sử chuỗi này nằm trong thẻ div có class .intro
    </pre>

    <?php
    // cách 1 dấu \ escape
    echo "<div class=\"intro\">chào \"hà nội\" việt nam</div>";

    // cách 2
    echo '<div class="intro">chào "hà nội" việt nam</div>';

    ?>




</body>
</html>