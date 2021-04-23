<?php
require_once "connect.php";

echo "<pre>";
print_r($connection);
echo "</pre>";

$id = isset($_GET["id"]) ? $_GET["id"] : 0;
$sqlDelete = "DELETE FROM students WHERE student_id=$id";
echo $sqlDelete;
$resultInsert = $connection->exec($sqlDelete);
var_dump($resultInsert);
header("Location: list.php");
exit();