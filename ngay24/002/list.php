<?php
require_once "connect.php";

$sqlSelect = "SELECT * FROM students";

// truyền câu sql truy vấn select vào trong method prepare() trên object connection
// sau đó trả kết quả vào trong biến $stmt
$stmt = $connection->prepare($sqlSelect);

// biến $stmt gọi đến method execute() để thực thi câu SQL
$stmt->execute();

// set the resulting array to associative
// setFetchMode() trên object $stmt chỉ định kiểu dữ liệu lấy ra từ db
// PDO::FETCH_OBJ chỉ định mỗi bản ghi lấy ra là stdClass ( object )
// $student->id
// PDO::FETCH_ASSOC chỉ định mỗi bản ghi lấy ra là 1 array mảng
// $student["id"]
$result = $stmt->setFetchMode(PDO::FETCH_OBJ);

// $stmt->fetchAll() để lấy ra tất cả dữ liệu tương ứng với câu SQL
$list = $stmt->fetchAll();

echo "<pre>";
print_r($list);
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
                <h1>Danh sách sinh viên</h1>

                <div style="margin: 20px">
                    <a href="create.php" class="btn btn-info">Thêm mới sinh viên</a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Mã SV</th>
                        <th>Tên SV</th>
                        <th>Địa điểm</th>
                        <th>Sinh Nhật</th>
                        <th>Điểm</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    if (is_array($list) && !empty($list)) {
                        foreach($list as $keyStudent => $student) {
                            // $student
                            ?>

                            <tr>
                                <td><?php echo $student->student_id ?></td>
                                <td><?php echo $student->student_name ?></td>
                                <td><?php echo $student->student_location ?></td>
                                <td><?php echo $student->student_birthday ?></td>
                                <td><?php echo $student->student_score ?></td>
                                <td>
                                    <a href="update.php?id=<?php echo $student->student_id ?>" class="btn btn-warning">Edit</a>
                                    <a href="delete.php?id=<?php echo $student->student_id ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php
                        } // end foreach
                    } // end if
                    ?>



                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
