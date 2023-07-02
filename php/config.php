<?php
$user = "root";
$pass="";
$host ="localhost";
$db ="salon";
$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo = new PDO($dbh,$user,$pass);
?>