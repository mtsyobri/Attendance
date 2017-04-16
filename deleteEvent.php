<?php 
	include "connect.php";


	$id_event = $_REQUEST['id_event'];

	$query = "DELETE FROM msproduct WHERE id_event=$id_event";

	$con->query($query);
	header("location:landingAdmin.php");

?>