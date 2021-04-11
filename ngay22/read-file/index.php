<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>

<?php
    $dir = "list/";

    // Sort in ascending order - this is default
// đọc nội dung các file và folder bên trong folder list
    $listFiles = scandir($dir);

    echo "<pre>";
    print_r($listFiles);
    echo "</pre>";

    if (isset($_POST["list"]) && $_POST["list"]) {
        // đường dẫn của file chúng ta đang muốn xem
        $list = $dir.$_POST["list"];
        echo "<br>" . $list;

        // mỏ file ra để đọc
        $myfile = fopen($list, "r") or die("Unable to open file!");
        // filesize($list) trả về kích thước file
        $content = fread($myfile,filesize($list));
        fclose($myfile);
    }
?>


<div class="container">
    <h1>Demo xem nội dung file</h1>
    <div class="row">
        <div class="col-md-12">
            <form action="" name="folder" method="post">
                <div class="form-group">
                    <label>Chọn file muốn xem nội dung:</label>
                    <select name="list" class="form-control">
                        <option value="">-- Chọn file bên trong thư mục--</option>
                        <?php
                        foreach($listFiles as $f1) {
                            //echo "<br>" . $f1;
                            $except = [".", ".."];
                            //if (!in_array($f1, $except)) {
                                ?>
                                <option value="<?php echo $f1 ?>"><?php echo $f1 ?></option>
                                <?php
                            //}
                        }
                        ?>

                    </select>
                </div>

                <div class="form-group">
                    <label>Nội dung file</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control"><?php echo isset($content) ? $content : "" ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary">xem nội dung file</button>
            </form>
        </div>
    </div>
</div>



</body>
</html>