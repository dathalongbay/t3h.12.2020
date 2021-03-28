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


    <form name="profile" method="post" action="">
        <div>
            <label for="">Họ tên</label>
            <input type="text" name="hoten" value="">
            <span>* Họ tên : từ 2 chữ đến 5 chữ. chỉ chứa chuỗi không chứa số
            và các ký tự đặc biệt</span>
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email" value="">
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
            <input type="text" name="ngaysinh" value="">
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

    <?php
    $validateAll = true;

    if ($validateAll) {
        // validate đúng in ra thông tin của người dùng đã nhập
        ?>

        <?php
    } else {
        // validate sai
        // in ra lỗi cho người dùng biết họ đã nhập sai input nào
        // đồng thời điền lại các dữ liệu người dùng đã nhập

    }
    ?>
</body>
</html>