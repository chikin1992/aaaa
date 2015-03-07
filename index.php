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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function ($) {

  $('#checkbox').change(function(){
    setInterval(function () {
        moveRight();
    }, 3000);
  });
  
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider').css({ width: slideWidth, height: slideHeight });
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});    
</script>
<style>
	#slider {
  position: relative;
  overflow: hidden;
  margin: 20px auto 0 auto;
  border-radius: 4px;
}

#slider ul {
  position: relative;
  margin: 0;
  padding: 0;
  height: 200px;
  list-style: none;
}

#slider ul li {
  position: relative;
  display: block;
  float: left;
  margin: 0;
  padding: 0;
  width: 500px;
  height: 300px;
  background: #ccc;
  text-align: center;
  line-height: 300px;
}

a.control_prev, a.control_next {
  position: absolute;
  top: 40%;
  z-index: 999;
  display: block;
  padding: 4% 3%;
  width: auto;
  height: auto;
  background: transparent;
  color: #fff;
  text-decoration: none;
  font-weight: 600;
  font-size: 18px;
  opacity: 0.8;
  cursor: pointer;
}

a.control_prev:hover, a.control_next:hover {
  opacity: 1;
  -webkit-transition: all 0.2s ease;
}

a.control_prev {
  border-radius: 0 2px 2px 0;
}

a.control_next {
  right: 0;
  border-radius: 2px 0 0 2px;
}

.slider_option {
  position: relative;
  margin: 10px auto;
  width: 160px;
  font-size: 18px;
}
</style>
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
						<li><a id="nt3" href="quiz/index.php">Quiz</a></li>
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
		<li><a id="nr1" href="lesson1.php">Lesson 1</a></li>
		<li><a id="nr2" href="lesson2.php">Lesson 2</a></li>
		<li><a id="nr3" href="lesson3.php">Lesson 3</a></li>
		<li><a id="nr4" href="lesson4.php">Lesson 4</a></li>
	</ul>
<div id="contentbox">
	<div id="content">
		<h1>Welcome to our learning point</h1>
<div id="slider">
  <a href="#" class="control_next">>></a>
  <a href="#" class="control_prev"><</a>
  <ul>
    <li style="background: #aaa;"><img src="images/Directedgraph(B).jpg"></li>
    <li style="background: #aaa;"><img src="images/Undirectedgraph(B).jpg"></li>
    <li style="background: #aaa;"><img src="images/Directedgraph(S).jpg"></li>
    <li style="background: #aaa;"><img src="images/UnDirectedgraph(S).jpg"></li>
  </ul>  
</div>

<div class="slider_option">
  <input type="checkbox" id="checkbox">
  <label for="checkbox">Autoplay Slider</label>
</div> 
		<p>
			Conceptually, e-learning is broadly synonymous with instructional technology, information and communication technology (ICT) in education, EdTech, learning technology, multimedia learning, technology-enhanced learning (TEL), computer-based instruction (CBI), computer managed instruction, computer-based training (CBT), computer-assisted instruction or computer-aided instruction (CAI), internet-based training (IBT), flexible learning, web-based training (WBT), online education, virtual education, virtual learning environments (VLE) (which are also called learning platforms), m-learning, and digital education.
			
		</p>
		<p>
			<img src="images/lesson.gif" style="width:50px;"/>
			<span>Lesson</span><br /><br />
			For those students and visitors who find it electronically convenient and helpful to study and practice the Daily Lessons of A Course in Miracles, we're pleased to offer full Multimedia Lessons for you here on this site. Students can read each lesson online and/or listen to the lesson being read.
		</p>
		<p>
			<img src="images/quiz.png" style="width:50px;" />
			<span class="s2">Quiz</span><br /><br />
			Online quizzes are a popular form of entertainment for web surfers. Online quizzes are generally free to play and for entertainment purposes only though some online quiz websites offer prizes. Websites feature online quizzes on many subjects. One popular type of online quiz is a personality quiz or relationship quiz which is similar to what can be found in many women's or teen magazines. Websites hosting quizzes include Quizilla, FunTrivia, OkCupid, Sporcle, and Quizlet.
		</p>
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