<?php 
	
	include "connect.php";

	$id_event = $_REQUEST['id_event'];
	$judul = $_REQUEST['judul'];
	$tanggal = $_REQUEST['tanggal'];
	$alamat = $_REQUEST['alamat'];

	
	$query = "UPDATE event SET judul='$judul', tanggal=$tanggal,
			 alamat=$alamat
			 WHERE id_event=$id_event";

	//echo $query;
	$con->query($query);
	header("location:landingAdmin.php");

?>