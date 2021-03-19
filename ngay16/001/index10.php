<?php
// câu lệnh điều kiện dạng viết tắt
// câu lệnh thường được dùng để in ra 1 chuỗi

$tuoi = 19;
if ($tuoi > 18) {
    echo "người trưởng thành";
    // logic

} else {
    echo "trẻ em";
}

// cách viết rút gọn
echo "<br>";
echo ($tuoi > 18) ? "người trưởng thành" : "trẻ em";
