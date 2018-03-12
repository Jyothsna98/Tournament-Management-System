<?php
session_start();
echo "<font size=5>";
echo "<center>";
echo "<h1>ROUND 2</h1>";
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
$new2=$_SESSION['new'];	
//$_SESSION['new2']=$new2;
/*$max=$_SESSION['max'];
$max--;*/
echo "<h1><Round 2></h1>";
$points=$_POST['points1'];
$j=0;
$neww=array();
if(count($new2)%2!=0)
		{
			array_push($new2,'bye');
		}
		$c=count($new2);
for($r=0;$r<$c/2;$r++)
{
		/*print_r($points[$r]);*/
		if($points[$r]=='win1')
		{
			//echo "jyo";
			//echo $j;
			array_push($neww,$new2[$j]);
			$j++;
		}
		else
		{
			$j++;
			//echo $j;
			array_push($neww,$new2[$j]);
		}
		$j++;
}
echo "<br>";
/*foreach($neww as $key)
{
	echo $key;
}
*/
	if(count($neww)%2!=0)
		{
			array_push($neww,'bye');
		}
		$i=0;
		$j=0;
		$k=0;
		echo "<form action=r2.php method= 'POST'>";
		$new_array2=array();
		$co=count($neww);
	while($i<$co)
	{
		
	echo $neww[$i];
	$i++;
	//echo "<input type='number' name='points2[]'>";
	echo "<input type='radio' name='points2[$j]' value='win3'>";
	echo "&nbsp";
	echo "vs";
	echo $neww[$i];
	echo "<input type='radio' name='points2[$j]' value='win4'>";
	echo "<br><br>";
	$i++;
	$j++;
	}
	for($x=0;$x<$co;$x++)
	{
		if($neww[$x]=='bye')
			unset($neww[$x]);
	}
	$new_array2=$neww;
	$_SESSION['max']=count($new_array2);
	$_SESSION['r22']=$new_array2;
	if($_SESSION['max']!='2')
	{
		echo "<center><input type='submit' class='button' name='submit' value='submit' formaction='r3.php'></center>";
	}
	else
	{
		$_SESSION['na']='ro2';
		$_SESSION['final']=$_SESSION['r22'];
		//$_SESSION['winner']=$_POST['points2'];
		echo "<center><input type='submit' class='button' name='submit' value='final' formaction='knockwin.php'></center></form>";
	}
	echo "
	</body>
	</html></font>";
	?>