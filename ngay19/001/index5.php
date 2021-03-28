<?php
$subject = "hà nội thủ đô của nước việt nam. việt nam có trên 90 triệu dân.
việt nam nằm trong khí hậu nhiệt đới";
$pattern = "/việt/i";
$replacement = "vin";
$result = preg_replace($pattern, $replacement, $subject);

var_dump($result);

