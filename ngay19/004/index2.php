<?php
require "funcc.php";
// chết ngay ở dòng số 2 khi dùng require
// require "func.php";
// include_once "func.php";
// require_once "func.php";

echo "<br> bắt đầu file index1.php";
$e = test(1,2);
echo "<br> kêt quả (index1.php) : " . $e;