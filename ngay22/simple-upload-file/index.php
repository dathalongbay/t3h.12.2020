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
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    if (isset($_POST["submit"])) {

        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";



        $target_dir = "uploads/";

        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        echo "<br> *** tên hình ảnh : " . $_FILES["uploadimage"]["name"];
        $filename = "abc/abc123/". $_FILES["uploadimage"]["name"];
        echo "<br>" . $filename;
        echo "<br> *** basename() : " . basename($filename);
        //die;

        // đường dẫn mà chúng ta muốn upload file đến
        $target_file = $target_dir . basename($_FILES["uploadimage"]["name"]);

        echo "<br> **** " .  $target_file;
        //die;

        // move_uploaded_file("nguồn file", "đích đến của file");
        echo "<br> **** " .  $_FILES["uploadimage"]["tmp_name"];
        //die;
        // move_uploaded_file dùng upload file
        // move ( di chuyển ) file tạm đến đường dẫn file thật mà chung ta mong muốn
        // tham số 1 là đường dẫn tạm $_FILES["uploadimage"]["tmp_name"]
        // tham số 2 là đường dẫn thật chúng ta mong muốn $target_file
        // nếu hàm này trả về true có nghĩa di chuyển file thành công
        // false thì thất bại
        if (move_uploaded_file($_FILES["uploadimage"]["tmp_name"], $target_file)) {
            echo "File ". htmlspecialchars( basename( $_FILES["uploadimage"]["name"])). " đã được tải lên thành công.";
        } else {
            echo "Không thể upload file lên server do có lỗi";
        }

        // htmlspecialchars()

    }
    ?>

    <div class="container">
        <h1>Demo simple upload file</h1>
        <div class="row">
            <div class="col-sm-12">
                <form action="" name="upload" method="post" enctype="multipart/form-data">
                    <p>
                        <label for="">Upload file</label>
                        <input type="file" name="uploadimage">
                    </p>
                    <p>
                        <input type="submit" name="submit" value="Upload">
                    </p>
                </form>
            </div>
        </div>
    </div>

    <div>in ra thẻ &lt;a&gt;thẻ a&lt;/a&gt;</div>



</body>
</html>