<?php

// implode() convert 1 array sang 1 chuỗi
echo implode(",", 5);
$cities = ["hn" => "hà nội", "dn" => "đà nẵng"];
echo "<br>" . implode(",", $cities);