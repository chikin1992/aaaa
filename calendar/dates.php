<?php
	include("connection.php");
	ob_start();
	
	$month = $_GET["month"];
	
	$_SESSION["month"] = $month;
	header("location:index.php");
?>