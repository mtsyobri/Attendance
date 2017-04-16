<?php 
	
	include "connect.php";

	$name = $_REQUEST['name'];
	
	$query = "INSERT INTO peserta(name) 
			VALUES('" . $name . "')";

	//echo $query;

	$con->query($query);
	header("location:welcomeGuest.php");

?>