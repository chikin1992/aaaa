<?php
	ob_start();
	include("connection.php");

	
		session_destroy();
	
		?><script>window.alert("Successfully Logout."); window.location.href = "index.php";</script><?php
	
?>