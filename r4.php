<?php
/*session_start();
echo "<center>";
echo "<h1>ROUND 4</h1>";
echo "</center><hr>";
?>
<?php
$new4=$_SESSION['new4'];	
$c=count($new4);
/*$max=$_SESSION['max'];
$max--;
$_SESSION['max']=$max;
echo "<h1><Round 4></h1>";
$points=$_POST['points3'];

	for($i=0;$i<$c;$i++)
	{	
		if($points[$i]=="0"){
			unset($new4[$i]);
			//$ppl=array_values($ppl);
		//$ppl=array_splice($ppl,$i,1);
		
		}
		
	}
	if(count($new4)%2!=0)
		{array_push($new4,'bye');}
		$i=0;
		$j=0;
		$k=0;
		echo "<form action=r4.php method= 'POST'>";
		$new_array2=array();
		
	foreach ($new4 as $val)
	{
		
	echo $val;
	$i++;
	echo "<input type='number' name='points4[]'>";
	echo "&nbsp";
	if($i%2!=0)
	{echo "vs";}
	echo "&nbsp";
	if($i%2==0)
	{echo "<br><br>";
}
	$new_array4[$k]=$val;
	$k++;
	}


	$_SESSION['max']=count($new_array4);
	$_SESSION['r22']=$new_array4;
	if($_SESSION['max']!='2')
	{
		echo "<input type='submit' name='submit' value='submit' formaction='r5.php'>";
	}
	else
		echo "<input type='submit' name='submit' value='final' formaction='knockwin.php'></form>";
	?>*/
session_start();
echo "<font size=5>";
echo "<center>";
echo "<h1>ROUND 4</h1>";
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
?>
<?php
$new4=$_SESSION['new4'];	
/*foreach($new4 as $key)
{
	echo $key;
}
//$_SESSION['new2']=$new2;
//$max=$_SESSION['max'];
$max--;*/
echo "<h1><Round 2></h1>";
$pointss=$_POST['points3'];
$j=0;
$neww2=array();
if(count($new4)%2!=0)
		{
			array_push($new4,'bye');
		}
		$c=count($new4);
/*foreach($new4 as $key)
{
	echo $key;
}*/
for($r=0;$r<$c/2;$r++)
{
		/*print_r($points[$r]);*/
		if($pointss[$r]=='win5')
		{
			//echo "jyo";
			//echo $j;
			array_push($neww2,$new4[$j]);
			$j++;
		}
		else
		{
			$j++;
			//echo $j;
			array_push($neww2,$new4[$j]);
		}
		$j++;
}
echo "<br>";
if(count($neww2)%2!=0)
		{
			array_push($neww2,'bye');
		}
		$i=0;
		$j=0;
		$k=0;
		echo "<form action='knockwin.php' method= 'POST'>";
		$new_array4=array();
		$co=count($neww2);
	while($i<$co)
	{
		
	echo $neww2[$i];
	$i++;
	//echo "<input type='number' name='points2[]'>";
	echo "<input type='radio' name='points4[$j]' value='win7'>";
	echo "&nbsp";
	echo "vs";
	echo $neww2[$i];
	echo "<input type='radio' name='points4[$j]' value='win8'>";
	echo "<br><br>";
	$i++;
	$j++;
	}
	for($x=0;$x<$co;$x++)
	{
		if($neww2[$x]=='bye')
		{
			unset($neww2[$x]);
			//echo "jyo";
		}
	}
	/*foreach($neww2 as $key)
{
	echo $key;
}*/
	$new_array4=$neww2;
	$_SESSION['max']=count($new_array4);
	$_SESSION['r22']=$new_array4;
	$_SESSION['na']='ro4';
		$_SESSION['final']=$_SESSION['r22'];
		//$_SESSION['winner']=$points4;
		echo "<center><input type='submit' class='button' name='submit' value='final' formaction='knockwin.php'></center></form></font>";
	
	
	?>