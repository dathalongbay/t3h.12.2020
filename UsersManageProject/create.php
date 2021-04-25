<?php
require_once "connection.php";

// mảng chứa lỗi validate
$errors_validate = [];

// mảng dữ liệu mặc định
$form_data = [];
$form_data["user_name"] = "";
$form_data["last_name"] = "";
$form_data["first_name"] = "";
$form_data["user_phone"] = "";
$form_data["user_password"] = "";
$form_data["user_email"] = "";
$form_data["user_address"] = "";
$form_data["user_birthday"] = "";
$form_data["user_gender"] = 0;
$form_data["user_desc"] = "";

if (is_array($_POST) & !empty($_POST)) {

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    // truyền dữ liệu từ $_POST vào $form_data
    foreach($_POST as $key_post => $value_post) {
        $form_data[$key_post] = $value_post;
    }

    // validate dữ liệu
    if (isset($_POST['user_name']) && strlen($_POST['user_name']) > 0) {
        $pattern_user_name = '/^.{6,32}$/';
        if (preg_match($pattern_user_name, $_POST['user_name']) != 1) {
            $errors_validate["user_name"] = "user_name sai định dạng";
        } else {
            $user_name = $_POST['user_name'];
        }
    } else {
        $errors_validate["user_name"] = "Yêu cầu nhập user_name";
    }

    if (isset($_POST['last_name']) && strlen($_POST['last_name']) > 0) {
        $pattern_last_name = '/^([a-zA-Z]+ ){0,2}([a-zA-Z]+){1}$/';
        if (preg_match($pattern_last_name, $_POST['last_name']) != 1) {
            $errors_validate["last_name"] = "last_name sai định dạng";
        } else {
            $last_name = $_POST['last_name'];
        }
    } else {
        $errors_validate["last_name"] = "Yêu cầu nhập last_name";
    }

    if (isset($_POST['first_name']) && strlen($_POST['first_name']) > 0) {
        $pattern_first_name = '/^([a-zA-Z]+ ){0,1}([a-zA-Z]+){1}$/';
        if (preg_match($pattern_first_name, $_POST['first_name']) != 1) {
            $errors_validate["first_name"] = "first_name sai định dạng";
        } else {
            $first_name = $_POST['first_name'];
        }
    } else {
        $errors_validate["first_name"] = "Yêu cầu nhập first_name";
    }

    if (isset($_POST['user_phone']) && strlen($_POST['user_phone']) > 0) {
        $pattern_user_phone = '/^\d{6,32}$/';
        if (preg_match($pattern_user_phone, $_POST['user_phone']) != 1) {
            $errors_validate["user_phone"] = "user_phone sai định dạng";
        } else {
            $user_phone = $_POST['user_phone'];
        }
    } else {
        $errors_validate["user_phone"] = "Yêu cầu nhập user_phone";
    }

    if (isset($_POST['user_password']) && strlen($_POST['user_password']) > 0) {
        $pattern_user_password = '/^(?=.*?[A-Z])(?=.*?[0-9]).{8,32}$/';
        if (preg_match($pattern_user_password, $_POST['user_password']) != 1) {
            $errors_validate["user_password"] = "user_password sai định dạng";
        } else {
            $user_password = $_POST['user_password'];
        }
    } else {
        $errors_validate["user_password"] = "Yêu cầu nhập user_password";
    }

    if (isset($_POST['user_email']) && strlen($_POST['user_email']) > 0) {
        $pattern_user_email = '/^[A-Za-z0-9]{6,64}@.+\..+$/';
        if (preg_match($pattern_user_email, $_POST['user_email']) != 1) {
            $errors_validate["user_email"] = "user_email sai định dạng";
        } else {
            $user_email = $_POST['user_email'];
        }
    } else {
        $errors_validate["user_email"] = "Yêu cầu nhập user_email";
    }

    if (isset($_POST['user_address']) && strlen($_POST['user_address']) > 0) {
        $user_address_arr = explode(" ", $_POST['user_address']);
        if (count($user_address_arr) > 200) {
            $errors_validate["user_address"] = "user_address được nhập tối đa 200 chữ";
        } else {
            $user_address = $_POST['user_address'];
        }
    } else {
        $errors_validate["user_address"] = "Yêu cầu nhập user_address";
    }

    if (isset($_POST['user_birthday']) && strlen($_POST['user_birthday']) > 0) {
        $pattern_user_birthday = '/^\d{4}-\d{2}-\d{2}$/';
        if (preg_match($pattern_user_birthday, $_POST['user_birthday']) != 1) {
            $errors_validate["user_birthday"] = "user_birthday sai định dạng";
        } else {
            $user_birthday = $_POST['user_birthday'];
        }
    } else {
        $errors_validate["user_birthday"] = "Yêu cầu nhập user_birthday";
    }

    if (isset($_POST['user_gender'])) {
        if (!in_array($_POST['user_gender'], [0,1])) {
            $errors_validate["user_gender"] = "user_gender sai định dạng";
        } else {
            $user_gender = (int)$_POST['user_gender'];
        }
    } else {
        $errors_validate["user_gender"] = "Yêu cầu nhập user_gender";
    }

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    if (isset($_FILES["user_avatar"]["name"]) && isset($_FILES["user_avatar"]["tmp_name"])) {
        if (strlen($_FILES["user_avatar"]["name"]) > 0 && strlen($_FILES["user_avatar"]["tmp_name"]) > 0 && strlen($_FILES["user_avatar"]["size"]) > 0) {
            $target_dir = "uploads/";

            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            $target_file = $target_dir . basename($_FILES["user_avatar"]["name"]);
            if (move_uploaded_file($_FILES["user_avatar"]["tmp_name"], $target_file)){
                $uploadOK = 1;
            } else {
                $errors_validate["user_avatar"] = "Upload user_avatar thất bại";
            }
        } else {
            $errors_validate["user_avatar"] = "Yêu cầu nhập user_avatar";
        }
    } else {
        $errors_validate["user_avatar"] = "Yêu cầu nhập user_avatar";
    }


    // check duplicate user_name, user_email, user_phone
    if (empty($errors_validate)) {
        $sqlCheckDuplicate = "SELECT COUNT(*) FROM users WHERE user_name = '$user_name' OR user_email = '$user_email' OR user_phone = '$user_phone'";
        $stmt = $connection->prepare($sqlCheckDuplicate);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
// lấy 1 bản ghi duy nhất ->fetchObject()
        $duplicate = $stmt->fetchObject();
        var_dump($sqlCheckDuplicate);
        var_dump($duplicate);
        if ($duplicate > 0) {
            $errors_validate["duplicate"] = "Username hay email hay số điện thoại này đã được sử dụng vui lòng nhập thông tin Username/email/số điện thoại chưa được sử dụng";
        }

    }

    if (empty($errors_validate)) {
        $user_birthday .= " 00:00:01";

        $created = date("Y-m-d H:i:s");
        $updated = date("Y-m-d H:i:s");

        $user_avatar = $target_file;
        $user_desc = isset($_POST['user_desc']) ? $_POST['user_desc'] : "";

        $sqlInsert = "INSERT INTO `users` ( `user_name`, `first_name`, `last_name`, `user_email`, `user_gender`, `user_phone`, `user_address`, `user_password`, `user_avatar`, `user_birthday`, `user_desc`, `created`, `updated`) VALUES ( '$user_name', '$first_name', '$last_name', '$user_email', $user_gender, '$user_phone', '$user_address', '$user_password', '$user_avatar', '$user_birthday', '$user_desc' , '$created', '$updated');";

        echo $sqlInsert;

        $resultInsert = $connection->exec($sqlInsert);
        var_dump($resultInsert);

        if ($resultInsert == 1) {
            // insert thành công

            //header("Location: index.php");
            //exit();
        }
    }
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


<?php
if (is_array($errors_validate) && !empty($errors_validate)) { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo implode("<br>", $errors_validate); ?>
    </div>
    <?php
} ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Thêm mới người dùng</h1>
            <form name="themsv" method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Username người dùng <span style="color:red">*</span> (từ 6 đên 32 ký tự và không trùng lặp với user khác )</label>
                    <input type="text" name="user_name" class="form-control" value="<?php echo isset($form_data["user_name"]) ? $form_data["user_name"] : "" ?>">
                </div>

                <div class="form-group">
                    <label>Lastname người dùng <span style="color:red">*</span> ( họ người dùng từ 1 đến 3 chữ )</label>
                    <input type="text" name="last_name" class="form-control" value="<?php echo isset($form_data["last_name"]) ? $form_data["last_name"] : "" ?>">
                </div>

                <div class="form-group">
                    <label>Firstname người dùng <span style="color:red">*</span> (tên người dùng từ 1 đến 2 chữ )</label>
                    <input type="text" name="first_name" class="form-control" value="<?php echo isset($form_data["first_name"]) ? $form_data["first_name"] : "" ?>">
                </div>

                <div class="form-group">
                    <label>SDT người dùng <span style="color:red">*</span> ( 10 số và không trùng lặp với user khác )</label>
                    <input type="text" name="user_phone" class="form-control" value="<?php echo isset($form_data["user_phone"]) ? $form_data["user_phone"] : "" ?>">
                </div>

                <div class="form-group">
                    <label>Mật khẩu người dùng <span style="color:red">*</span> ( từ 8 đến 32 ký tự có chứa ít nhất 1 ký tự viết hoa,chứa ít nhất 1 số )</label>
                    <input type="password" name="user_password" class="form-control" value="<?php echo isset($form_data["user_password"]) ? $form_data["user_password"] : "" ?>">
                </div>

                <div class="form-group">
                    <label>Email người dùng <span style="color:red">*</span> (tối đa 64 ký tự theo định dạng email : abc@domain.com và không trùng lặp với user khác)</label>
                    <input type="email" name="user_email" class="form-control" value="<?php echo isset($form_data["user_email"]) ? $form_data["user_email"] : "" ?>">
                </div>

                <div class="form-group">
                    <label>Ảnh đại diện <span style="color:red">*</span></label>
                    <input type="file" name="user_avatar">
                </div>

                <div class="form-group">
                    <label>Nơi ở người dùng <span style="color:red">*</span> ( tối đa 200 chữ )</label>
                    <input type="text" name="user_address" class="form-control" value="<?php echo isset($form_data["user_address"]) ? $form_data["user_address"] : "" ?>">
                </div>

                <div class="form-group">
                    <label>Sinh nhật người dùng <span style="color:red">*</span></label>
                    <input type="date" name="user_birthday" class="form-control" value="<?php echo isset($form_data["user_birthday"]) ? $form_data["user_birthday"] : "" ?>">
                </div>

                <div class="form-group">
                    <label>Giới tính người dùng <span style="color:red">*</span></label>
                    <?php $checked0 = ($form_data["user_gender"] == 0) ? " checked" : "";  ?>
                    <input type="radio" name="user_gender" value="0" <?php echo $checked0 ?>> Nữ
                    <?php $checked1 = ($form_data["user_gender"] == 1) ? " checked" : "";  ?>
                    <input type="radio" name="user_gender" value="1" <?php echo $checked1 ?>> Nam
                </div>

                <div class="form-group">
                    <label>Mô tả người dùng</label>
                    <textarea name="user_desc" id="" cols="30" rows="10"  class="form-control"><?php echo isset($form_data["user_desc"]) ? $form_data["user_desc"] : "" ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
