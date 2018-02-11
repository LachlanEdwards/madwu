<?php
$mysql = "localhost";
$db = "MadameWu";
$un = "root";
$pw = "March2798";

$pdo = new PDO("mysql:host=$mysql;dbname=$db", $un, $pw);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $pdo
?>
