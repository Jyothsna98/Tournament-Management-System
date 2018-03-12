<?php
	session_start();
?>
<html>
<body>

<?php
require('connect.php');
$arr=$_POST['joshi'];
$x=1;
echo "<h1>Registered colleges</h1>";
foreach ($arr as $value)
{
	
	echo "<br><br>";
	echo $x ;
	echo "     ";
	echo $value;
	$x++;
}
/*$extract=mysql_query("SELECT *FROM firstround");
while($r = mysql_fetch_assoc($extract))
		{
			$default[]=$r['clgname1'];	
		}
		foreach ($arr as $val)
		$write=mysql_query("INSERT INTO firstround(clgname1) VALUES('$val')");*/

/*for($i=1;$i<=count($arr);$i++)
{
mysql_query("UPDATE firstround SET clgname1='$arr[$i]' WHERE id1='$y'");
}*/

/*if($x==2)
{
	foreach ( $arr as $value ){
	echo "<br><br>";
	echo $value;
	echo "<form action='round1.php' method='POST'>
	<input type='number' name=score1'>
	</form>";
}

foreach ( $arr as $value ){
	if($x%2==0)
	{		
	echo $value;
	echo "<br>";
	echo "enter score";
	echo "<form action='round1.php' method='POST'>
	 <input type='number' name=score1[]'>
	</form>  ";
	echo "<br>";
	$x--;
	}
	else
	{echo "&nbsp;&nbsp;";
	echo $value;
	echo"<br>enter score";
	echo "<form action='round1.php' method='POST'>
	<input type='number' name=score1[]'>
	</form>";
	$x--;
	}
	
}*/
?>
<form action='fixtures.php' method='POST'>
<center>
<input type='submit' name='back' value='Back'>
</center>
</form>


</body>
</html>

