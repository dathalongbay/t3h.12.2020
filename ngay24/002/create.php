<?php
require_once "connect.php";
?>
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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Thêm mới sinh viên</h1>
                <form action="">
                    <div class="form-group">
                        <label>Tên sinh viên</label>
                        <input type="text" name="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Điểm sinh viên</label>
                        <input type="text" name="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nơi ở sinh viên</label>
                        <input type="text" name="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Sinh nhật sinh viên</label>
                        <input type="text" name="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Giới tính sinh viên</label>
                        <input type="radio" value="0" checked> Nữ
                        <input type="radio" value="1"> Nam
                    </div>

                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
