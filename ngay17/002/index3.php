<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
        $_POST để lấy dữ liệu của form post đi có method="post"
        khi action="" thì form sẽ gửi dữ liệu đến chính url hiện tại
    </pre>

    <?php

    function bmi($h, $w) {

        // h tính mét và w tính bằng kg
        $bmi = $w/($h*$h);
        $calc = "";

        if ($bmi < 18.5) {
            $calc = "dưới chuẩn";
        } elseif($bmi >= 18.5 && $bmi <= 24.9) {
            $calc = "bình thường";
        } elseif($bmi >= 25 && $bmi <= 29.9) {
            $calc = "thừa cân";
        } elseif($bmi >= 30 && $bmi <= 34.9) {
            $calc = "béo phì độ 1";
        } elseif($bmi >= 35 && $bmi <= 39.9) {
            $calc = "béo phì độ 2";
        } else {
            $calc = "béo phì độ 3";
        }

        return ["bmi" => $bmi, "calc" => $calc];
    }

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    // isset() kiểm tra biến có tồn tại hay không
    if (isset($_POST["chieucao1"]) && isset($_POST["cannang1"])) {
        $h = $_POST["chieucao1"];
        $w = $_POST["cannang1"];
        $kq = bmi($h, $w);
    }
    ?>

    <form name="bmi" action="" method="post">
        <div>
            <label for="">Chiều cao</label>
            <input name="chieucao1" value="" type="text">
        </div>

        <div>
            <label for="">Cân năng</label>
            <input name="cannang1" value="" type="text">
        </div>

        <div>
            <button type="submit">Tính BMI</button>
        </div>
    </form>

    <?php if (isset($kq["bmi"]) && isset($kq["calc"])) { ?>
        <div>
            <h1>Kết quả</h1>
            <div> Cân nặng : ?</div>
            <div> Chiều cao : ?</div>
            <div> BMI : <?php echo $kq["bmi"] ?></div>
            <div> Phân loại : <?php echo $kq["calc"] ?></div>
        </div>
    <?php } // endif ?>
</body>
</html>