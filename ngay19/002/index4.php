<?php

// tính xem còn bao nhiêu ngày, giờ nữa là tết dương lịch 2022

// in ra 78 ngày 12 giờ
// gợi ý dùng hàm time() lấy ra timestamp hiện tại
// chú ý reset về múi giờ việt nam

date_default_timezone_set("Asia/Ho_Chi_Minh");
$t1 = mktime(00, 00, 01, 1, 1, 2022);

$t2 = time();

$t3 = $t1 - $t2;

echo "<br>" . $t3;

// 1 ngày : 24*60*60 = 86400

$d = $t3/86400;

echo "<br>" . $d;

// in ra bao nhiêu ngày , giờ đến tết


