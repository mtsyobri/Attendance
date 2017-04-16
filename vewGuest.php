<?php 
	
	include "connect.php";
	
	$query = "SELECT * FROM peserta ";

	//echo $query;

	$con->query($query);
	header("location:viewEvent.php");

?>