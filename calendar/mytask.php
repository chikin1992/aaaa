<?php
	include("../connection.php");
	ob_start();
	
	if(!isset($_SESSION["uid"]))
	{
		?><script> window.location.href = "tic1/login.php";</script><?php
	}
	else
	{
		$uid=$_SESSION["uid"];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>My Calender</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

			
			<div class="body">
				<div class="content-home" style="margin-left:-700px;">
					<div>
						<h3>My Task List</h3><br /><br /><br />
						<a href="index.php">back</a>
					</div>
					<font style="font-family:New Times Roman;">
					<div>
						<table width="100%">
							<?php
								$kk = mysql_query("select * from detail where uid='$uid' order by day and month and year DESC");
								while($pp = mysql_fetch_assoc($kk))
								{
									?>
										<tr>
											<td width="100%"><?php echo $pp["day"]." - ". $pp["month"]." - ".$pp["year"];?> ( <a href="edittask.php?did=<?php echo $pp['did'];?>" style="text-decoration:none;color:blue;">Edit</a> )<br /><br /><?php echo $pp["dtitle"];?><br /><br /><?php echo $pp["ddetail"];?></td>
										</tr>
										<tr>
											<td width="100%"><hr size="1"></td>
										</tr>
									<?php
								}
							?>
						</table>
					</div>
				</div>
			</div>

</body>
</html>