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
$tuoi = 19;
if ($tuoi > 18) {
    echo "<h1>tuổi trưởng thành</h1>";
} else {
    echo "<h2>trẻ em</h2>";
}
?>

<div>
    <pre>
        cách 2 bên dưới thường được dùng
        khi trộn lẫn với mã html
    </pre>
    <?php if ($tuoi > 18) : ?>
    <h1>tuổi trưởng thành</h1>
    <?php else : ?>
    <h2>trẻ em</h2>
    <?php endif; ?>
</div>

</body>
</html>