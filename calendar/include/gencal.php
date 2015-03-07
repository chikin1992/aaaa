<?php
	
	$month = $_SESSION["month"];
	$year = $_SESSION["year"];
	$uid = $_SESSION["uid"];
	
	
	$strofmonth =  date("w", strtotime("1-".$month."-".$year));
	$numofday   = date("t", strtotime("1-".$month."-".$year));

	$day = 1;
	
	echo "<table width=\"100%\">";
	?><tr>
		<td width="70" height="80">Sunday</td>
		<td width="70" height="80">Monday</td>
		<td width="70" height="80">Tuesday</td>
		<td width="70" height="80">Wednesday</td>
		<td width="70" height="80">Thursday</td>
		<td width="70" height="80">Friday</td>
		<td width="70" height="80">Saturday</td>
		</tr>
	<?php
	for ($i=0; $i<6; $i++) 
	{	
		echo "<tr>";
		for ($j=0; $j<7; $j++) 
		{
			if ($day <= $numofday)
			{
				if ( $i == 0)
				{
					if ( $j < $strofmonth)
					{
						echo "<td width=\"70\" height=\"100\" valign='top'></td>";
					}
					else
					{
						$ss = mysql_query("select * from detail where uid='$uid' and day='$day' and month='$month' and year='$year'");
						$co = mysql_num_rows($ss);
						$kk = mysql_fetch_assoc($ss);
						
							if($co == 0)
							{
								echo "<td width=\"70\" height=\"100\" valign='top'><a style='text-decoration:none;'  href=\"task.php?day=$day&month=$month&year=$year\">$day</a></td>";
								$day = $day + 1;
							}
							else
							{
								echo "<td width=\"70\" height=\"100\" valign='top'><a style='text-decoration:none;'  href=\"task.php?day=$day&month=$month&year=$year\">$day</a><br /><br />";
									$gg = mysql_query("select * from detail where uid='$uid' and day='$day' and month='$month' and year='$year'");
									while($uu=mysql_fetch_assoc($gg))
									{
										$us = $uu["dtitle"];
										$us = substr($us,0,10).'...';
										$status = $uu["type"];
										if($status=='Important')
										{
											?>
												<a href="viewtask.php?did=<?php echo $uu['did'];?>" style='text-decoration:none;'>
											<?php
											echo "<font size='2'>"."<img src='images/important.png' width='15' height='15' style='display:inline;'>&nbsp;".$us."</font><br />";
											?>
												</a>
											<?php
										}
										else
										{
											?>
												<a href="viewtask.php?did=<?php echo $uu['did'];?>" style='text-decoration:none;'>
											<?php
											echo "<font size='2'>"."<img src='images/normal.png' width='15' height='15' style='display:inline;'>&nbsp;".$us."</font><br />";
											?>
												</a>
											<?php
										}
									}
								echo"</td>";
								$day = $day + 1;
							}
						
								
					
					}
				}
				else
				{
					$ss = mysql_query("select * from detail where uid='$uid' and day='$day' and month='$month' and year='$year'");
						$co = mysql_num_rows($ss);
						$kk = mysql_fetch_assoc($ss);
						
							if($co == 0)
							{
								echo "<td width=\"70\" height=\"100\" valign='top'><a style='text-decoration:none;'  href=\"task.php?day=$day&month=$month&year=$year\">$day</a></td>";
								$day = $day + 1;
							}
							else
							{
								echo "<td width=\"70\" height=\"100\" valign='top'><a style='text-decoration:none;'  href=\"task.php?day=$day&month=$month&year=$year\">$day</a><br />Something Here.</td>";
								$day = $day + 1;
							}
				}
			}
		}
		echo "</tr>";	
	}
	echo "</table>";
?>