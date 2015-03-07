<?php
		include("connection.php");
		
			if(isset($_POST["btnLogin"]))
			{
				$u = $_POST["user"];
				$p = $_POST["pass"];

				$z = mysql_query("select * from user where user='$u' and pass='$p'");
				$zz = mysql_num_rows($z);
				
				if($zz==0)
				{
					?><script>window.alert("Invalid Username & Password."); window.location.href = "index.php";</script><?php
				}
				else
				{
					$zzz = mysql_fetch_assoc($z);
					$_SESSION["uid"]=$zzz["uid"];
					$_SESSION["utype"]=$zzz["utype"];
					?><script>window.alert("Welcome Back."); window.location.href = "index.php";</script><?php
				}
			}
		
		?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TIC Assignment</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="central">
<div id="header"></div>
	<?php
		if(!isset($_SESSION["uid"]))
		{
			?>
				<ul id="navtop">
					<li><a id="nt1" href="index.php">Home</a></li>
					<li><a id="nt2" href="#">About Us</a></li>
					<li><a id="nt3" href="contactus.php">Contact Us</a></li>
					<li><a id="nt4" href="register.php">Register</a></li>
				</ul>
			<?php
		}
		else 
		{
			if($_SESSION["utype"]==1)
			{
				?>
					<ul id="navtop">
						<li><a id="nt1" href="index.php">Home</a></li>
						<li><a id="nt2" href="myprofile.php">My Profile</a></li>
						<li><a id="nt3" href="dashboard.php">Dashboard</a></li>
						<li><a id="nt4" href="logout.php">Log Out</a></li>
					</ul>
				<?php
			}
			else
			{
				?>
					<ul id="navtop">
						<li><a id="nt1" href="index.php">Home</a></li>
						<li><a id="nt2" href="myprofile.php">My Profile</a></li>
						<li><a id="nt3" href="myscore.php">My Score</a></li>
						<li><a id="nt4" href="logout.php">Log Out</a></li>
					</ul>
				<?php
			}
		}
	?>
	
	<div id="searchspacer"></div>
	<div id="searchbox">
		<?php 
		if(!isset($_SESSION["uid"]))
		{
			$name = "Anonymous";
		?>
		<form method="POST">
		<table>
			<tr>
				<td>
					Username
					<input  name="user" type="text" size="15" style="margin-left:70px;margin-top:-20px;"/>
				</td>
			</tr>
			<tr>
				<td>
					Password
					<input  name="pass" type="password" size="15" style="margin-left:70px;margin-top:-20px;"/>
				</td>
			</tr>
			<tr>
				<td align="center">
					
					<input type="submit" value="  Login  " name="btnLogin"> <a href="forgotpass.php" style="text-decoration:none;color:black;"><i><font size="2"> &nbsp;Forgot Password</font></i></a>
				</td>
			</tr>
		</table>
		</form>
		<?php
		}
		else
		{
			$id = $_SESSION["uid"];
			$k = mysql_query("select * from user where uid='$id'");
			$m = mysql_fetch_assoc($k);
			$name = $m["name"];
			?>
				<table>
					<tr>
						<td><br /><br />Welcome Back <?php echo $name;?> !</td>
					</tr>
				</table>
			<?php
		}
		
		?>
	</div>
	<div id="imageheader"> </div>
	<ul id="navright">
		<li><a id="nr1" href="newlesson.php">Latest Lesson</a></li>
		<li><a id="nr2" href="lesson.php">All Lesson</a></li>
		<li><a id="nr3" href="newquiz.php">Latest Quiz</a></li>
		<li><a id="nr4" href="quiz.php">All Quiz</a></li>
	</ul>
<div id="contentbox">
	<div id="content">
		<h1>Forgot Password</h1>
		
		
		<form method="POST">
		<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email :  &nbsp;<input type="text" name="email" required>
		
		<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<input type="submit" name="changeBtn" value="  Request  "> &nbsp;&nbsp; <a href="index.php"><input type="button" name="cancelBtn" value="  Cancel  "></a>
		</form>
		
		<?php
			if(isset($_POST["changeBtn"]))
			{
				$new = $_POST["email"];
				
				
					$qq = mysql_query("select * from user where email='$new'");
					$count = mysql_num_rows($qq);
					
					if($count != 0)
					{					
						
						$rowz = mysql_fetch_assoc($qq);

											$usern = $rowz["user"];
											$pass = $rowz["pass"];
											$to = $new;
											$fz = "TICAssignment@gmail.com";
											$sub = "Retrieved Password for E-Learning";
								

$subject = $sub;
$txt = "Thank you for your registration at E-Learning !
	
Your password retrieval request has been successful.  We would advise you to keep your login credential in a safe place to avoid any unnecessary security related issues. Please contact our online customer service operator happens if you need any further assistance from us. Your login credentials as below:
	
	Username : ".$usern."
	Password : ".$pass."

	
	
Thank You.
	
	
Regards,
	
E-Learning
	
";
							
								
								$headers = "From: ".$fz. "\r\n";

								mail($to,$subject,$txt,$headers);				
				

				?><script>window.alert("Password retrieval successfully, kindly check your email !"); window.location.href = "index.php";</script><?php	
			
					}
					else
					{
						?><script>window.alert("Invalid Email Address."); window.location.href = "forgotpass.php";</script><?php
					}
					
				
			}
		?>
	</div>
    <div id="news">
		<h4>Chat Box</h4>
		<table>
			
			<?php
				$zs = mysql_query("select * from chat order by cid DESC limit 16");
				while($ww = mysql_fetch_assoc($zs))
				{
					?>
						<tr>
							<td><font color="yellow"><?php echo $ww["cname"];?> : </font><font color="white"><?php echo $ww["cdetail"];?></font></td>
						</tr>
					<?php
				}
			?>
		</table>
		<br />
		<table >
			<form method="POST">
			<tr>
				<td><font color="lime">Message : </font><input type="text" name="msg" style="width:140px;"></td>
			</tr>
			<tr align="right">
				<td><input type="submit" value="  Send  " name="postBtn"> &nbsp; <input type="reset" value="  Reset  "></td>
			</tr>
			</form>
		</table>
		<?php 
			if(isset($_POST["postBtn"]))
			{
				$msg = $_POST["msg"];
				
				if($msg!="")
				{
					mysql_query("insert into chat (cname,cdetail) values('$name','$msg')");
					?><script>window.alert("Message Submitted.");window.location.href = "index.php";</script><?php
				}
				else
				{
					?><script>window.alert("Message Must Be Fill.");</script><?php
				}
			}
		?>
	</div>
	<div id="footer">
		<p>Copyright &copy; 2005 FIST - TIC ASSIGNMENT</p>
	</div>
</div>
	<div id="imagepreloader"><img src="images/navtopover.gif" alt="mouseover" /><img src="images/navtopendover.gif" alt="mouseover" /><img src="images/navrightover.gif" alt="mouseover" /><img src="images/navrightendover.gif" alt="mouseover" />
</div>
</div>
</body>
</html>