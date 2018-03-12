<html>
<style>
body {
    background-image: url(133.jpg);
    background-size: 1600px 1600px;
    background-repeat: no-repeat;
    padding-top: 40px;
}
</style>
<center>
<h1>WINNER OF KNOCKOUT TOURNAENT</h1>
</center>
<?php
session_start();
$win=$_SESSION['final'];
$a2=$_SESSION['na'];
if($a2=='ro4')
$final=$_POST['points4'];
else if($a2=='ro3')
$final=$_POST['points3'];
else
	$final=$_POST['points2'];
//$points=$_SESSION['winner'];
//$points=$_POST['points4'];
/*$i=0;
echo "<center>";
if($points[$i]=='1')
	echo $winner[$i];
else
	echo $winner[++$i];
echo "</center>;";*/
$k=0;

	if($final[$k]=="win1"||$final[$k]=="win3"||$final[$k]=="win5"||$final[$k]=="win7")
	{
		echo "<center><font size=5><br><br><br><br><br>";
		echo $win[$k];
		echo "</center></font>";
	}
	else
	{
		$k++;
		echo $win[$k];
	}

	
?>
</body>
</html>
