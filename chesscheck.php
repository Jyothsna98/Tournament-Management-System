<?php
require('connect.php');
//echo "<form action='registration.php' method='POST'";

$extract=mysql_query("SELECT chess FROM answers1");
$numrows=mysql_num_rows($extract);
$i=0;
$j=0;
if(isset($_POST['ansch1']))
{
		$arr[$i]=$_POST['ansch1'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}
if(isset($_POST['ansch2']))
{
		$arr[$i]=$_POST['ansch2'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ansch3']))
{
		$arr[$i]=$_POST['ansch3'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ansch4']))
{
		$arr[$i]=$_POST['ansch4'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ansch5']))
{
		$arr[$i]=$_POST['ansch5'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ansch6']))
{
		$arr[$i]=$_POST['ansch6'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ansch7']))
{
		$arr[$i]=$_POST['ansch7'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ansch8']))
{
		$arr[$i]=$_POST['ansch8'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ansch9']))
{
		$arr[$i]=$_POST['ansch9'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ansch10']))
{
		$arr[$i]=$_POST['ansch10'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}


	$c=0;
	while($row=mysql_fetch_assoc($extract))
	{
		$anschdb=$row['chess'];
		if($anschdb==$arr[$j])
			$c++;
		$j++;
	}
	//echo $c;
    if($c >=7)
   {
	echo "Congratulations!You are now eligible to Register";
	header("Location: reg.php");
	//echo "<input type='submit' name='submit' value='Register'<br></form>";
   }
else
{
	echo "<br><br><br><br><center><h1>Sorry! You are not eligible to Register</h1>";
	echo "<a href='base.php'<button><font size='5' color='red'>Back to Main page</font></button></a><br><br></center>";
}

?>
	