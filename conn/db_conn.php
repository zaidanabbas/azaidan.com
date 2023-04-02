<?php  

$sname = "localhost";
$uname = "u325214518_azaidan";
$password = "Zaidanfamily08";
$db_name = "u325214518_azaidan";

$con = mysqli_connect($sname, $uname, $password, $db_name);

if (!$con) {
	echo "Connection failed!";
	exit();
}  