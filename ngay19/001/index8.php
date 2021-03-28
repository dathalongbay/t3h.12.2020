<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        span {
            color: red;
        }
    </style>
</head>
<body>

<?php

// gán mặc định
$ngaysinh = $hoten = "";

if (isset($_POST) && count($_POST) > 0) {
    $validateAll = true;

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // mảng chứa lỗi
    $errorAll = [];


    if (isset($_POST["hoten"]) && (strlen($_POST["hoten"]) > 0) ) {
        $hoten = $_POST["hoten"];

        // nhập ngày sinh
        $patternHoten = '/^([a-zA-Z]+ ){1,4}([a-zA-Z]+){1}$/';

        /*
         * ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ
         * */
        if (preg_match($patternHoten, $hoten) != 1) {
            // sai định dạng
            $errorAll["hoten"] = "Họ tên sai định dạng";
        }
    } else {
        // không tồn tại ngày sinh hay độ dài ngày sinh nhỏ hơn bằng 0
        $errorAll["hoten"] = "Chưa nhập họ tên";
    }

    if (isset($_POST["ngaysinh"]) && (strlen($_POST["ngaysinh"]) > 0) ) {
        $ngaysinh = $_POST["ngaysinh"];

        // nhập ngày sinh
        $patternNgaySinh = '/^\d{2}\/\d{2}\/\d{4}$/';
        if (preg_match($patternNgaySinh, $ngaysinh) != 1) {
            // sai định dạng
            $errorAll["ngaysinh"] = "Ngày sinh sai định dạng dd/mm/YYYY";
        }
    } else {
        // không tồn tại ngày sinh hay độ dài ngày sinh nhỏ hơn bằng 0
        $errorAll["ngaysinh"] = "Chưa nhập ngày sinh";
    }

    if (is_array($errorAll) && (count($errorAll) == 0)) {
        // validate đúng in ra thông tin của người dùng đã nhập
        ?>

        <?php
    } else {
        // validate sai
        // in ra lỗi cho người dùng biết họ đã nhập sai input nào
        // đồng thời điền lại các dữ liệu người dùng đã nhập

        // in ra mảng error
        echo "<pre>";
        print_r($errorAll);
        echo "</pre>";

        echo "11111-----";

        // chuyển 1 mảng thành 1 chuỗi
        echo "<div style='background: red'>";
        echo implode("<br />", $errorAll);
        echo "</div>";

    }
}


?>


    <form name="profile" method="post" action="">
        <div>
            <label for="">Họ tên</label>
            <input type="text" name="hoten" value="<?php echo $hoten ?>">
            <span>* Họ tên : từ 2 chữ đến 5 chữ. chỉ chứa chuỗi không chứa số
            và các ký tự đặc biệt</span>
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email" value="">
            part1@path2
            //
            <span>* Email : tên email từ 3 đến 32 ký tự . trong email phải có
            chữ @ . phần domain tên miền có độ dài từ 3 đến 15 ký tự
            ví dụ : admin@gmail.com, admin@yahoo.ocm, admin@vhost.com</span>
        </div>

        <div>
            <label for="">SDT</label>
            <input type="text" name="sdt" value="">
            <span> đảm bảo độ dài từ 10 đến 11 số . SDT chỉ được phép chứa số</span>
        </div>

        <div>
            <label for="">Ngày sinh</label>
            <input type="text" name="ngaysinh" value="<?php echo $ngaysinh ?>">
            <span>dd/mm/YYYY => ngày/tháng/năm ví dụ  02/10/1995</span>
        </div>

        <div>
            <label for="">Ghi chú</label>
            <textarea name="ghichu" id="" cols="30" rows="10"></textarea>
            <span>Nhập độ dài từ 5 đến 100 chữ</span>
        </div>

        <div>
            <button type="submit">Gửi thông tin</button>
        </div>

    </form>

</body>
</html>