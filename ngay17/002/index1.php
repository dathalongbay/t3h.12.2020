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


$chieucao = 1.7;
$cannang = 63;
$kq = bmi($chieucao, $cannang);
echo "<br> BMI : " . $kq["bmi"];
echo "<br> phân loại : " . $kq["calc"];

