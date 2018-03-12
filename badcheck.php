<?php
require('connect.php');
echo "<form action='registration.php' method='POST'";
$c;
$extract=mysql_query("SELECT badminton FROM answers1");
$numrows=mysql_num_rows($extract);
$i=0;
$j=0;
if(isset($_POST['ans1']))
{
		$arr[$i]=$_POST['ans1'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}
if(isset($_POST['ans2']))
{
		$arr[$i]=$_POST['ans2'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ans3']))
{
		$arr[$i]=$_POST['ans3'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ans4']))
{
		$arr[$i]=$_POST['ans4'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ans5']))
{
		$arr[$i]=$_POST['ans5'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ans6']))
{
		$arr[$i]=$_POST['ans6'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ans7']))
{
		$arr[$i]=$_POST['ans7'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ans8']))
{
		$arr[$i]=$_POST['ans8'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ans9']))
{
		$arr[$i]=$_POST['ans9'];
		$i++;
}
else
{
		$arr[$i]="NULL";
		$i++;
}if(isset($_POST['ans10']))
{
		$arr[$i]=$_POST['ans10'];
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
		$anschdb=$row['badminton'];
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
	