<?php
session_start();
require_once "connection.php";

if (!isset($_SESSION["user_login"])) {
    // chưa tồn tại phiên đăng nhập
    header("Location: login.php");
    exit;
} ?>
