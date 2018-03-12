<?php
session_start();
?>
<html>
<body>
<?php
//session_start();
require('connect.php');
$extract=mysql_query("SELECT * FROM firstround");
while($row=mysql_fetch_assoc($extract))
{
	$knock[]=$row['clgname1'];
}
$_SESSION['round']=$knock;
$c=$count=count($knock);
if($count%2!=0)
{
	array_push($knock,'BYE');
	$count++;
}

echo "<center>";
echo "<h1>ROUND 1</h1>";
echo "</center><hr>";
?>
<form action='round2.php' method='POST'>
<?php
$new_array = array();
$index=0;
for($i=0;$i<$count;$i++)
{
	echo $knock[$i];
	echo "<input type='number' name='points[]'>";
	echo "&nbsp";
	echo "vs";
	echo "&nbsp";
	$count--;
	echo $knock[$count];
	echo "<input type='number' name='points[]'>";
	echo "<br><br><br><br><br>";
	$new_array[$index] = $knock[$i];  
	$index++;
	$new_array[$index] = $knock[$count];
	$index++;
	//$new=array($knock[$i],$knock[$count]);	
}
/*for($j=0;$j<$c;$j++)
	$new=array($knock[$j],$knock[--$c]);*/ 
$_SESSION['new']=$new_array;
foreach($new_array as $val)
{
echo $val;
echo "<br>";
}
echo "<input type='submit' name='submitt' value='submit'>";
?>
</form>
</body>
</html>
	
