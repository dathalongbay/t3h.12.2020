<?php
require_once "connect.php";

echo "<pre>";
print_r($connection);
echo "</pre>";

if (is_array($_POST) && !empty($_POST)) {
    // cập nhật dữ liệu mới vào db
    echo "<br> cập nhật dữ liệu mới";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $student_id = isset($_POST['student_id']) ? (int)$_POST['student_id'] : 0;
    $student_name = isset($_POST['student_name']) ? $_POST['student_name'] : '';
    $student_score = isset($_POST['student_score']) ? $_POST['student_score'] : '';
    $student_location = isset($_POST['student_location']) ? $_POST['student_location'] : '';
    $student_birthday = isset($_POST['student_birthday']) ? $_POST['student_birthday'] : '';
    $student_gender = isset($_POST['student_gender']) ? $_POST['student_gender'] : 0;
    $student_birthday .= " 00:00:01";

    $created = date("Y-m-d H:i:s");
    $updated = date("Y-m-d H:i:s");

    $sqlUpdate = "UPDATE `students` SET `student_name`='$student_name', `student_score`='$student_score', `student_location`='$student_location', `student_birthday`= '$student_birthday',`student_gender`=$student_gender WHERE `student_id`=$student_id";

    echo "$sqlUpdate";


}

// lấy ra dữ liệu cũ
$id = isset($_GET["id"]) ? $_GET["id"] : 0;
if ($id > 0) {
    $sqlSelect = "SELECT * FROM students WHERE student_id=$id";
    $stmt = $connection->prepare($sqlSelect);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
// lấy 1 bản ghi duy nhất ->fetchObject()
    $student = $stmt->fetchObject();

    echo "<pre>";
    print_r($student);
    echo "</pre>";
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
            <h1>Sửa sinh viên</h1>
            <form name="themsv" method="post" action="">

                <input type="hidden" name="student_id" value="<?php echo isset($student->student_id) ? $student->student_id : 0 ?>">
                <div class="form-group">
                    <label>Tên sinh viên</label>
                    <input type="text" name="student_name" value="<?php echo isset($student->student_name) ? $student->student_name : '' ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Điểm sinh viên</label>
                    <input type="text" name="student_score" value="<?php echo isset($student->student_score) ? $student->student_score : 0 ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Nơi ở sinh viên</label>
                    <input type="text" name="student_location" value="<?php echo isset($student->student_location) ? $student->student_location : '' ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Sinh nhật sinh viên</label>

                    <?php
                    // convert 1990-04-20 00:00:01 : YYYY-MM-DD H:i:s
                    // => dd/mm/YYYY

                    // strtotime : chuyển 1 chuỗi thành 1 timestamp
                    $student_birthday = isset($student->student_birthday) ? strtotime($student->student_birthday) : 0;
                    // date() định dạng timestamp thành 1 chuỗi thời gian theo định dạng mới
                    $new_birthday = date("d/m/Y", $student_birthday);
                    //echo $new_birthday;
                    ?>
                    <input type="date" name="student_birthday" value="<?php echo $new_birthday ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Giới tính sinh viên</label>
                    <?php $check0 = (isset($student->student_gender) && ($student->student_gender == 0)) ? "checked" : "" ?>
                    <input type="radio" name="student_gender" value="0" <?php echo $check0 ?>> Nữ
                    <?php $check1 = (isset($student->student_gender) && ($student->student_gender == 1)) ? "checked" : "" ?>
                    <input type="radio" name="student_gender" value="1" <?php echo $check1 ?>> Nam
                </div>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

