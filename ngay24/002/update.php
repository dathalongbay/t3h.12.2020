<?php
require_once "connect.php";

echo "<pre>";
print_r($connection);
echo "</pre>";

$id = isset($_GET["id"]) ? $_GET["id"] : 0;

$sqlSelect = "SELECT * FROM students WHERE student_id=$id";
$stmt = $connection->prepare($sqlSelect);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_OBJ);
// lấy 1 bản ghi duy nhất ->fetchObject()
$student = $stmt->fetchObject();

echo "<pre>";
print_r($student);
echo "</pre>";
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
            <h1>Sửa sinh viên</h1>
            <form name="themsv" method="post" action="">
                <div class="form-group">
                    <label>Tên sinh viên</label>
                    <input type="text" name="student_name" value="<?php echo $student->student_name ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Điểm sinh viên</label>
                    <input type="text" name="student_score" value="<?php echo $student->student_score ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Nơi ở sinh viên</label>
                    <input type="text" name="student_location" value="<?php echo $student->student_location ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Sinh nhật sinh viên</label>
                    <input type="date" name="student_birthday" value="<?php echo $student->student_birthday ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Giới tính sinh viên</label>
                    <?php $check0 = ($student->student_gender == 0) ? "checked" : "" ?>
                    <input type="radio" name="student_gender" value="0" <?php echo $check0 ?>> Nữ
                    <?php $check1 = ($student->student_gender == 1) ? "checked" : "" ?>
                    <input type="radio" name="student_gender" value="1" <?php echo $check1 ?>> Nam
                </div>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

