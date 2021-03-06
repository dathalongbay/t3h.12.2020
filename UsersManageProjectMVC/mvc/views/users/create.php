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
            <h1>Thêm mới người dùng</h1>
            <form name="themsv" method="post" action="<?php echo SITE_URL ?>index.php?controller=users&action=store" enctype="multipart/form-data">
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