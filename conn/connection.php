<?php

$dbhost = "localhost";
$dbuser = "u325214518_azaidan";
$dbpass = "Zaidanfamily08";
$dbname = "u325214518_azaidan";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
$db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
?>
