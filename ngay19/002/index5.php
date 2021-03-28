<?php


// chuyển từ timestamp về dạng format
// date(format, timestamp)


// chuyển format => timestamp
$d1 = "12:00:20 12-1-2003";
$t1 = strtotime($d1);
echo "<br> d1 : " . $d1;
echo "<br> t1 : " . $t1;
echo "<br> chuyển ngược lại " . date("H:i:s d-m-Y", $t1);

// hàm strtotime không hoàn hảo nó chỉ hỗ trợ chuyển 1 số format thời gian nhất định