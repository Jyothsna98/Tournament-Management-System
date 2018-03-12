<?php
require('connect.php');
/*$extract=mysql_query("SELECT clgname1 FROM firstround");
while($r = mysql_fetch_assoc($extract))
{
	$row[]=$r['clgname1'];	
}*/
$x=1;
$y=1;
$score1=$_POST['score'];
foreach($row as $v)
{
	echo $v;
	foreach($score1 as $val)
	{
		/*$extract=mysql_query("SELECT *FROM firstround");
		while($r = mysql_fetch_assoc($extract))
		{
			$default[]=$r['round1'];	
		}*/
	/*mysql_query("INSERT INTO firstround(round1) VALUES ($val)");*/
	/*mysql_query("UPDATE firstround SET round1='$val' WHERE round1='$default'");*/
	echo $val;
	}
	$x++;
	echo "<br>";
}
?>