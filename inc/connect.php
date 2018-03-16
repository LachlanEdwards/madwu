<?php
$mysql = "aa9jg0weq1nd2q.cf3a25fl8vrx.us-east-2.rds.amazonaws.com:3306";
$db = "MadameWu";
$un = "lachlanedwards";
$pw = "dah-suQ-VFf-9SM";

$pdo = new PDO("mysql:host=$mysql;dbname=$db", $un, $pw);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $pdo
?>
