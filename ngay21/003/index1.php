<?php
include_once "nam/Student.php";
include_once "tuan/Student.php";

// namespace\TenClass
$s = new Tuan\Student();

$s2 = new Nam\Student();

$s->demo();
$s2->info();