<?php
session_start();
echo "<font size=5>";
echo "<center>";
echo "<h1>ROUND 3</h1>";
echo "</center><hr>
<html>
</head>
<style>
.button {
    background-color:  #663399;
    border: none;
	border-radius:12px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
body {
    background-image: url(133.jpg);
    background-size: 1600px 1600px;
    background-repeat: no-repeat;
    padding-top: 40px;
}
</style>
</head>";
/*$max=$_SESSION['max'];
$max--;
$_SESSION['max']=$max;*/
echo "<h1><Round 3></h1>";
$new3=$_SESSION['r22'];
$points=$_POST['points2'];
if(count($new3)%2!=0)
		{array_push($new3,'bye');
		}
$c=count($new3);
		$j=0;
		$neww1=array();
for($r=0;$r<$c/2;$r++)
{
		/*print_r($points[$r]);*/
		if($points[$r]=='win3')
		{
			//echo "jyo";
			//echo $j;
			array_push($neww1,$new3[$j]);
			$j++;
		}
		else
		{
			$j++;
			//echo $j;
			array_push($neww1,$new3[$j]);
		}
		$j++;
}
echo "<br>";
	/*foreach($neww1 as $key)
{
	echo $key;
}	*/

	if(count($neww1)%2!=0)
		{array_push($neww1,'bye');
		}
		$count=count($neww1);
		$new_array3=array();
		//$index=0;
		
		//$count--;
		echo "<form action='r3.php' method='POST'>";
	$x=0;
	$newarr=array();
	for($i=0;$i<$count;$i++)
{
	echo $neww1[$i];
	//echo "<input type='number' name='points3[]'>";
	echo "<input type='radio' name='points3[$i]' value='win5'>";
	$newarr[$x]=$neww1[$i];
	$x++;
	echo "&nbsp";
	echo "vs";
	echo "&nbsp";
	$count--;
	echo $neww1[$count];
	//echo "<input type='number' name='points3[]'>";
	echo "<input type='radio' name='points3[$i]' value='win6'>";
	$newarr[$x]=$neww1[$count];
	$x++;
	echo "<br><br><br><br><br>";
		
}
$count=count($newarr);
for($x=0;$x<$count;$x++)
	{
		if($newarr[$x]=='bye')
		{
			unset($newarr[$x]);
		}
	}
	/*foreach($newarr as $key)
{
	echo $key;
}*/
	$new_array3=$newarr;
	$_SESSION['max']=count($new_array3);
	$_SESSION['new4']=$new_array3;
	if($_SESSION['max']!='2')
	{
		echo "<center><input type='submit' class='button' name='submit' value='submit' formaction='r4.php'></center>";
	}
	else
	{
		$_SESSION['na']='ro3';
		$_SESSION['final']=$_SESSION['new4'];
		//$_SESSION['winner']=$_POST['points3'];
		echo "<center><input type='submit' class='button' name='submit' value='final' formaction='knockwin.php'></center></form></font>";
	
	}
	?>

