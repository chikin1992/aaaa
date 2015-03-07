<?php
	include("connection.php");
	ob_start();
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>My Calender</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background-green">
		background
	</div>
	<div class="page">
		<div class="home-page">
			<div class="sidebar">
				<a href="index.php" id="logo"><img src="images/logo.png" alt="logo"></a>
				<ul>
					<li class="home">
						<a href="index.php">Home</a>
					</li>
					<li class="about">
						<a href="friend.php">Friend</a>
					</li>
					<li class="selected projects">
						<?php
							$m = date("n");
						?>
						<a href="date.php?month=<?php echo $m;?>">Celender</a>
					</li>
					<li class="blog">
						<a href="task.php">Task</a>
					</li>
				</ul>
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" id="fb">facebook</a> <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a> <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">google+</a> <a href="http://freewebsitetemplates.com/go/youtube/" id="youtube">youtube</a>
				</div>
			</div>
			<div class="body">
				<div class="content-home">
					<div>
						<h3>
							<?php
							
								if(!isset($_SESSION["year"]) && !isset($_SESSION["month"]))
								{
									$year = date("Y");
									$month = date("n");	
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
							header("location:date.php");
						}
						if(isset($_POST["rightbtn"]))
						{
							$year++;
							$_SESSION["year"] = $year;
							header("location:date.php");
						}
					?>
					</div>
					<div class="featured">
						<div>
							<?php
								include("include/$month.php");
							?>
						</div>
					</div>
					
				</div>
				<div class="footer">
					<p>
						&#169; 2014 Internet Computing Assignment
					</p>
					<ul>
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="about.html">About</a>
						</li>
						<li>
							<a href="projects.html">Projects</a>
						</li>
						<li>
							<a href="blog.html">Blog</a>
						</li>
						<li>
							<a href="contact.html">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>
</html>