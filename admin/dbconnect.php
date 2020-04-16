<?php 
//error_reporting(E_ALL);
//ini_set("display_errors", 0);
$host="localhost";
$user="root";
$pass="";
$db="fashionpoint";
$con = mysqli_connect($host,$user,$pass,$db);
if(!$con)
{
	echo "Database not connected";
}
?>