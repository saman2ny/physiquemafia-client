<?php 
	
	$servername = "localhost";
	$username = "hx71rd825cce";
	$password = "Programmer!123";
	$db = "physique_mafia";
	
	$connc = mysqli_connect($servername,$username,$password,$db);
	if($connc->connect_error)
	{
		die("connection failed:".$connc->connect_error);
	}
	
?>
