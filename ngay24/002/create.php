<?php
require_once "connect.php";

if (is_array($_POST) && !empty($_POST)) {
    // $_POST là 1 mảng và không rỗng

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $student_name = isset($_POST['student_name']) ? $_POST['student_name'] : '';
    $student_score = isset($_POST['student_score']) ? $_POST['student_score'] : '';
    $student_location = isset($_POST['student_location']) ? $_POST['student_location'] : '';
    $student_birthday = isset($_POST['student_birthday']) ? $_POST['student_birthday'] : '';
    $student_gender = isset($_POST['student_gender']) ? $_POST['student_gender'] : 0;
    $student_birthday .= " 00:00:01";

    $created = date("Y-m-d H:i:s");
    $updated = date("Y-m-d H:i:s");
    $sqlInsert = "INSERT INTO `students` (`student_id`, `student_name`, `student_score`, `student_gender`, `student_location`, `student_birthday`, `created`, `updated`) VALUES (NULL, '$student_name', '$student_score', '$student_gender', '$student_location', '$student_birthday', '$created', '$updated');";

    echo $sqlInsert;

}
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
                <form name="themsv" method="post" action="">
                    <div class="form-group">
                        <label>Tên sinh viên</label>
                        <input type="text" name="student_name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Điểm sinh viên</label>
                        <input type="text" name="student_score" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nơi ở sinh viên</label>
                        <input type="text" name="student_location" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Sinh nhật sinh viên</label>
                        <input type="date" name="student_birthday" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Giới tính sinh viên</label>
                        <input type="radio" name="student_gender" value="0" checked> Nữ
                        <input type="radio" name="student_gender" value="1"> Nam
                    </div>

                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
