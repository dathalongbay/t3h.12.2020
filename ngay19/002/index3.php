<?php
$t1 = mktime(23, 15, 05, 3, 12, 2008);

// timestamp là số giấy tính từ 00:00:00 1/1/1970
// 1205360105
echo $t1;

// $t1 là timestamp chúng ta về dạng cho người đọc được
echo "<br>";

// dùng date(format, timestamp) chuyển timestamp về cho người đọc được
echo date("H:i:s d/m/Y", $t1);

// thời gian có 2 loại
// loại 1 cho người đọc được : 23:15:05 12/03/2008 được dùng để hiển thị
// loại 2 : timestamp 1205360105 dùng để tính toán

