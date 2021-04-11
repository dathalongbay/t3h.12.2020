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

        die;

        $target_dir = "uploads/";

        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        if (is_array($_FILES["uploadimage"]["name"]) && !empty($_FILES["uploadimage"]["name"])) {
            $countUploadFile = count($_FILES["uploadimage"]["name"]);

            for($i = 0; $i < $countUploadFile; $i++) {
                $target_file = $target_dir . basename($_FILES["uploadimage"]["name"][$i]);

                if (move_uploaded_file($_FILES["uploadimage"]["tmp_name"][$i], $target_file)) {
                    echo "<br> File ". htmlspecialchars( basename( $_FILES["uploadimage"]["name"][$i])). " đã được tải lên thành công.";
                } else {
                    echo "<br> File ". htmlspecialchars( basename( $_FILES["uploadimage"]["name"][$i])). " Không thể upload file lên server do có lỗi";
                }
            }



        }




    }
    ?>

    <div class="container">
        <h1>Demo simple upload file</h1>
        <div class="row">
            <div class="col-sm-12">
                <form action="" name="upload" method="post" enctype="multipart/form-data">
                    <p>
                        <label for="">Upload file</label>
                        <input type="file" name="uploadimage[]" multiple>
                    </p>
                    <p>
                        <input type="submit" name="submit" value="Upload">
                    </p>
                </form>
            </div>
        </div>
    </div>



</body>
</html>