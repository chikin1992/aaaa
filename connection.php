<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	mysql_connect($host,$user,$password);
	mysql_select_db("ticz") or die (mysql_error());
	Session_Start();
?>