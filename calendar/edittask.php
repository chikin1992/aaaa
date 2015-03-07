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
	
	if(isset($_POST["change"]))
	{	
		$type = $_POST["type"];
		$title = $_POST["title"];
		$detail = $_POST["detail"];
		
		mysql_query("update detail set dtitle='$title',ddetail='$detail',day='$dayz',month='$monthz',year='$yearz',type='$type' where did='$did'");
		?><script>window.alert("Successfully changed !"); window.location.href = "viewtask.php?did=<?php echo $did;?>";</script><?php
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
								?>
									<select name="type">
										<option value="Normal">Normal</option>
										<option value="Important">Important</option>
									</select>
								<?php
							}
							else
							{
								?>
									<select name="type">
										<option value="Important">Important</option>
										<option value="Normal">Normal</option>
									</select>
								<?php
							}
						
						?>
						<br /><br /><br />
				<font style="font-family:Times New Roman;"><u>Task Title</u><br /><br /><input type="text" value="<?php echo $titlez;?>" name="title" size="60"><br /><br /></font>
				<font style="font-family:Times New Roman;"><u>Task Detail</u><br /><br /><textarea name="detail" rows="10" cols="50"><?php echo $detailz;?></textarea></font>
				<br /><br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" name="change" value="  Change  ">
								<input type="submit" name="cancel" value="  Cancel  ">
			</form>
		</div>

				</div>
				
			</div>

</body>
</html>