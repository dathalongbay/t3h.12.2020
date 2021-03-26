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
    echo "<br> post";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    echo "<br> get";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    echo "<br> REQUEST";
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    ?>
    <pre>
        $_REQUEST = $_POST + $_GET
        $_POST chỉ lấy dữ liệu từ form có method="post"
        $_GET chỉ lấy dữ liệu từ form có method="get" và từ query string trên url

        // sử dụng khi nào $_REQUEST ?
        khi chúng ta không biết method của form là gì cả
        hay chúng ta muốn lấy dữ liệu từ url và form có method = post
    </pre>

    <form name="abc" action="" method="get">
        <input type="text" name="abc">
        <input type="text" name="def">
        <button type="submit">Submit</button>
    </form>
</body>
</html>