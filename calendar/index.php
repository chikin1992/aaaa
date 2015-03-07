<?php
	include("../connection.php");
	ob_start();
	
	if(!isset($_SESSION["uid"]))
	{
		?><script> window.location.href = "tic1/login.php";</script><?php
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
				
					<div>
					<a href="../index.php"> Back E-Learning</a><br /><br />
						<h3>
							<?php
								
								if(!isset($_SESSION["year"]) && !isset($_SESSION["month"]))
								{
									$year = date("Y");
									$month = date("n");	
									$_SESSION["year"]=$year;
									$_SESSION["month"]=$month;
								}
								else if(isset($_SESSION["year"]) && !isset($_SESSION["month"]))
								{
									$year = $_SESSION["year"];
									$month = date("n");	
								}
								else if(!isset($_SESSION["year"]) && isset($_SESSION["month"]))
								{
									$year = date("Y");
									$month = $_SESSION["month"];
								}
								else
								{
									$month = $_SESSION["month"];
									$year = $_SESSION["year"];
								}
								
								//$month = $_GET["month"];
								
								if($month == 1)
								{
									?>
									<span class="works">Jan</span>
									<?php
								}
								else
								{
									echo "<a href='dates.php?month=1' style='text-decoration:none; color:#819FF7;'>  Jan </a>";
								}
								if($month == 2)
								{
									?>
									<span class="works">Feb</span>
									<?php
								}
								else
								{
									echo "<a href='dates.php?month=2' style='text-decoration:none; color:#819FF7;'>  Feb </a>";
								}
								if($month == 3)
								{
									?>
									<span class="works">Mar</span>
									<?php
								}
								else
								{ 
									echo "<a href='dates.php?month=3' style='text-decoration:none; color:#819FF7;'>  Mar </a>";
								}
								if($month == 4)
								{
									?>
									<span class="works">Apr</span>
									<?php
								}
								else
								{
									echo "<a href='dates.php?month=4' style='text-decoration:none; color:#819FF7;'>  Apr </a>";
								}
								if($month == 5)
								{
									?>
									<span class="works">May</span>
									<?php
								}
								else
								{
									echo "<a href='dates.php?month=5' style='text-decoration:none; color:#819FF7;'>  May </a>";
								}
								if($month == 6)
								{
									?>
									<span class="works">Jun</span>
									<?php
								}
								else
								{
									echo "<a href='dates.php?month=6' style='text-decoration:none; color:#819FF7;'>  Jun </a>";
								}
								if($month == 7)
								{
									?>
									<span class="works">Jul</span>
									<?php
								}
								else
								{
									echo "<a href='dates.php?month=7' style='text-decoration:none; color:#819FF7;'>  Jul </a>";
								}
								if($month == 8)
								{
									?>
									<span class="works">Aug</span>
									<?php
								}
								else
								{
									echo "<a href='dates.php?month=8' style='text-decoration:none; color:#819FF7;'>  Aug </a>";
								}
								if($month == 9)
								{
									?>
									<span class="works">Sep</span>
									<?php
								}
								else
								{
									echo "<a href='dates.php?month=9' style='text-decoration:none; color:#819FF7;'>  Sep </a>";
								}
								if($month == 10)
								{
									?>
									<span class="works">Oct</span>
									<?php
								}
								else
								{
									echo "<a href='dates.php?month=10' style='text-decoration:none; color:#819FF7;'>  Oct </a>";
								}
								if($month == 11)
								{
									?>
									<span class="works">Nov</span>
									<?php
								}
								else
								{
									echo "<a href='dates.php?month=11' style='text-decoration:none; color:#819FF7;'>  Nov </a>";
								}
								if($month == 12)
								{
									?>
									<span class="works">Dec</span>
									<?php
								}
								else
								{
									echo "<a href='dates.php?month=12' style='text-decoration:none; color:#819FF7;'>  Dec </a>";
								}
							?>
					</h3>
					<form method="post">
							<button type="submit" style="background:transparent;border:0;" name="leftbtn"><img src="images/left.png" height="20" width="20"></button><font size="6" color="brown"><?php echo $year;?></font>
							<button type="submit" style="background:transparent;border:0;" name="rightbtn"><img src="images/right.png" height="20" width="20"></button>
					</form>
					<?php
						if(isset($_POST["leftbtn"]))
						{
							$year--;
							$_SESSION["year"] = $year;
							header("location:index.php");
						}
						if(isset($_POST["rightbtn"]))
						{
							$year++;
							$_SESSION["year"] = $year;
							header("location:index.php");
						}
					?>
					</div>
					<div class="featured">
						<div>
							<?php
								include("include/gencal.php");
							?>
						</div>
					</div>

			</div>
	
</body>
</html>