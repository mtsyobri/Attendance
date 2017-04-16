<?php 
	
	include "connect.php";

	$id_member = $_REQUEST['id_member'];
	
	$query = "INSERT INTO attendance_member(id_member) 
			VALUES('" . $id_member . "')";

	//echo $query;

	$con->query($query);
	header("location:welcomeMember.php");

?>