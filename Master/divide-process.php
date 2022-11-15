<?php
	session_start();
	
	$_SESSION['lat'] = $_GET['lat'];
	$_SESSION['long'] = $_GET['long'];
	header("location:home.php?jenjang=");
	
?>