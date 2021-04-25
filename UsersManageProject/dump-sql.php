<?php
require_once "connection.php";

$sqlCreateTable = " CREATE TABLE users (
user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 user_name VARCHAR(255) NOT NULL DEFAULT '',
 first_name VARCHAR(255) NOT NULL DEFAULT '',
 last_name VARCHAR(255) NOT NULL DEFAULT '',
 user_email VARCHAR(255) NOT NULL DEFAULT '',
 user_phone VARCHAR(255) NOT NULL DEFAULT '',
 user_password VARCHAR(255) NOT NULL DEFAULT '',
 user_avatar VARCHAR(255) NOT NULL DEFAULT '',
 user_birthday DATETIME,
 user_desc TEXT,
 created DATETIME,
 updated DATETIME
 )
";

$connection->exec($sqlCreateTable);
