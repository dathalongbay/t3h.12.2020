<?php
$subject = "hà nội thủ đô của nước việt nam";
$pattern = "/việt/i";
$result = preg_match($pattern, $subject);

var_dump($result);

