<?php 
	
	include "connect.php";

	$query = "SELECT * FROM `view_member`";

	//echo $query;

	$con->query($query);
	header("location:viewEvent.php");

?>