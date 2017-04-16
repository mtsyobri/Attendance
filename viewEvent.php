<?php 
	
	include "connect.php";
	
	$query = "SELECT * FROM event ";

	//echo $query;

	$con->query($query);
	header("location:viewEvent.php");

?>