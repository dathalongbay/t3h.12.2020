<?php
// json để trao đổi hoặc lưu trữ dữ liệu
// json gần giống như object javascript
// json ứng dụng của nó : dùng trao đổi dữ liệu giữa máy khách và máy chủ
// hoặc giữa máy chủ với máy chủ khác
// json trao đổi gọi API : app mobile gọi đến máy chủ để trao đổi dữ liệu
$cities = ["hà nội", "HCMC", "đà nẵng"];
// json_encode chuyển 1 array hay object php => json
$json1 = json_encode($cities);
echo "<br>" . $json1;
var_dump($json1);

// json_decode giải mã
$citiesRevert = json_decode($json1);

echo "<pre>";
print_r($citiesRevert);
echo "</pre>";