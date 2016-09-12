<?php
$host = 'localhost';
$user = 'mico';
$pass = 'root';
$db_name = 'PotatoGo';
$con = mysqli_connect($host, $user, $pass, $db_name) or die("Failed to connect"). mysqli_error($con);
echo "Connected";
?>
