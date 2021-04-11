<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<?php
if (isset($_POST["filename"])) {
    $filename = $_POST["filename"];

    $content = $_POST["content"];
    // có 2 đối số . 1 là filename . 2 là chế độ w ( write file )
    // fopen để mở file
    $myfile = fopen($filename, "w") or die("Unable to open file!");
    // ghi vào file đã mở fwrite . tham số 1 là kết quả trả về fopen . tham số 2 là nội dung của file
    fwrite($myfile, $content);
    // sau khi ghi vào trong file thì sẽ đóng file đó vào
    fclose($myfile);

}
?>

<div class="container">
    <h1>Demo tạo file bằng php</h1>
    <div class="row">
        <div class="col-md-12">
            <form action="" name="folder" method="post">
                <div class="form-group">
                    <label>Nhập tên file kèm theo đuôi file ( vd index.txt ):</label>
                    <input type="text" name="filename" class="form-control">
                </div>

                <div class="form-group">
                    <label>Nhập nội dung file:</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">tạo file</button>
            </form>
        </div>
    </div>
</div>




</body>
</html>