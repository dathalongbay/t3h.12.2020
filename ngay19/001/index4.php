<?php
$subject = "hà nội thủ đô của nước việt nam. việt nam có trên 90 triệu dân.
việt nam nằm trong khí hậu nhiệt đới";
$pattern = "/hàn/i";
$result = preg_match_all($pattern, $subject);

var_dump($result);

// preg_match($pattern, $subject) trả về 1 nếu $pattern tìm thấy trong $subject
// và trả về 0 nếu không tìm thấy

// preg_match_all($pattern, $subject) trả về sô lầm $pattern tìm thấy trong $subject
// và trả về 0 nếu không tìm thấy
