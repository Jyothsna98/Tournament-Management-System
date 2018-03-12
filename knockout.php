<?php
session_start();
?>
<html>
<head>
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
<?php
//session_start();
require('connect.php');
$arr=$_SESSION['d'];
	
	//$k=0;
	//while($k<count($arr))
		//foreach($arr as $k)
	//{
	//$sql = mysql_query("INSERT INTO scores(sample) VALUES('$k')");
	//$sql .= implode(',', $arr);
	//$k++;
	//}
$extract=mysql_query("SELECT * FROM college");
while($row=mysql_fetch_assoc($extract))
{
	$knock[]=$row['clgname'];
}
$_SESSION['round']=$knock;
$c=$count=count($knock);
$_SESSION['max']=$c;
if($count%2!=0)
{
	array_push($knock,'BYE');
	$count++;
}

echo "<font size=5";
?>
<center>
<h1 style="color:black;">Round 1</h1>
</center><hr>
<form action='r2.php' method='POST'>
<?php
$new_array = array();
$index=0;


for($i=0;$i<$count;$i++)
{
	echo $knock[$i];
	//echo "<input type='number' name='points1[]'>";
	echo "<input type='radio' name='points1[$i]' value='win1'>";
	echo "&nbsp";
	echo "vs";
	echo "&nbsp";
	$count--;
	
	echo $knock[$count];
	//echo "<input type='number' name='points1[]'>";
	echo "<input type='radio' name='points1[$i]' value='win2'>";
	echo "<br><br><br><br><br>";
	$new_array[$index] = $knock[$i];  
	$index++;
	$new_array[$index] = $knock[$count];
	$index++;
	
	//$new=array($knock[$i],$knock[$count]);	
}
/*for($j=0;$j<$c;$j++)
	$new=array($knock[$j],$knock[--$c]);*/ 
$c=count($new_array);
for($x=0;$x<$c;$x++)
	{
		if($new_array[$x]=='bye')
		{
			unset($new_array[$x]);
		}
	}
$_SESSION['new']=$new_array;
echo "<center><input type='submit' class='button' name='submitt' value='SUBMIT'> </center></font>";
?>
</form>
</body>
</html>