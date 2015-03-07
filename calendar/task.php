<?php
	include("../connection.php");
	ob_start();
	
	$uid = $_SESSION["uid"];
	
	if(isset($_POST["submit"]))
	{
		$type = $_POST["type"];
		$title = $_POST["title"];
		$detail = $_POST["detail"];
		$day = $_GET["day"];
		$month = $_GET["month"];
		$year = $_GET["year"];
		
		if($title == null || $detail ==null)
		{
			?><script>window.alert("Title and Detail must be fill in !");</script><?php
		}
		else
		{
			mysql_query("insert into detail (dtitle,ddetail,type,uid,day,month,year) values('$title','$detail','$type','$uid','$day','$month','$year')");
			?><script>window.alert("Successfully added into your calender !"); window.location.href = "mytask.php";</script><?php
		}
		
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
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date: <?php echo $_GET["day"]." - ".$_GET["month"]." - ".$_GET["year"]; ?></p>
							<!--<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Month: <?php echo $_GET["month"]; ?></p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year: <?php echo $_GET["year"]; ?></p>-->
		
		<div>
			<form method="post">
				<font style="font-family:Times New Roman;">Task Title</font><br /><input type="text" name="title" size="60"/><br /><br />
				<font style="font-family:Times New Roman;">Task Type</font><br />
						<select name="type">
							<option value="Normal">Normal</option>
							<option value="Important">Important</option>
						</select>
				<br /><br/>
				<font style="font-family:Times New Roman;">Task Detail</font><br /><textarea rows="10" cols="50" name="detail" placeholder="Enter details here.."></textarea>
				<br /><br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" name="submit" value="  Submit  ">
				<input type="submit" name="cancel" value="  Cancel  ">
			</form>
		</div>

				</div>
			</div>
	
</body>
</html>