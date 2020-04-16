<?php
if (!isset($_SESSION['name'])) 
{
	$logio = "LogIn/SignUp";
}
else{
	$logio = "LogOut";
}
?>