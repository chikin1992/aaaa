<?php
	include("../connection.php");
	ob_start();
	
	$uid = $_SESSION["uid"];
	$did = $_GET["did"];
	
	$tt = mysql_query("select * from detail where did ='$did'");
	$kk = mysql_fetch_assoc($tt);
	
	$dayz = $kk["day"];
	$monthz = $kk["month"];
	$yearz = $kk["year"];
	$titlez = $kk["dtitle"];
	$detailz = $kk["ddetail"];
	$typez = $kk["type"];
	
	if(isset($_POST["edit"]))
	{	
			?><script>window.location.href = "edittask.php?did=<?php echo $did;?>";</script><?php	
	}
	if(isset($_POST["cancel"]))
	{	
			?><script>window.location.href = "index.php"</script><?php	
	}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>My Calender</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>



			<div class="body">
				<div class="content-home" style="margin-left:-700px;">
				<br />
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date: <?php echo $dayz." - ".$monthz." - ".$yearz; ?></p>
							<!--<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Month: <?php echo $_GET["month"]; ?></p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year: <?php echo $_GET["year"]; ?></p>-->
		
		<div>
			<form method="post">
			<font style="font-family:Times New Roman;">Status : </font>
						<?php
						
							if($typez =='Normal')
							{
								?><font color="green"  style="font-family:Times New Roman;">Normal</font><?php
							}
							else
							{
								?><font color="red"  style="font-family:Times New Roman;">Important</font><?php
							}
						
						?>
						<br /><br /><br />
				<font style="font-family:Times New Roman;"><u>Task Title</u><br /><br /><?php echo $titlez;?><br /><br /></font>
				<font style="font-family:Times New Roman;"><u>Task Detail</u><br /><br /><?php echo $detailz;?></font>
				<br /><br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				<input type="submit" name="edit" value="  Edit  ">
				<input type="submit" name="cancel" value="  Cancel  ">
			</form>
		</div>

				</div>
				
			</div>

</body>
</html>