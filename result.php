<?php
session_start();
/*require('connect.php');
$extract=mysql_query("SELECT clgname1 FROM firstround");
$numrows=mysql_num_rows($extract);*/
echo "<style>
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
</style>";
$cbit=$_POST['score'];
$clg1=$_SESSION['dept'];
$x=count($clg1);
?>
<center>
<h1>RESULTS</h1>
</center>
<?php
/*foreach ($cbit as $value)
echo $value;*/
function array_split($array, $parts){
    return array_chunk($array, ceil(count($array) / $parts));
}
/*$x=0;
while($r = mysql_fetch_assoc($extract))
{
	$new[]=$r['clgname1'];
	$x++;
	
}*/
 $array= array_chunk($cbit, ceil(count($cbit) / $x));
for($i=0;$i<$x;$i++){
	$arr[]=array_sum($array[$i]);
}
/*foreach ($arr as $value){
echo $value;
echo "<br>";
}*/
arsort($arr);
echo "<font size=5>";
foreach($arr as $key=>$val){
echo $clg1[$key];
echo "&nbsp";
echo $val;
echo "<br><br><br><br>";
}
echo "</font>";
//print_r($_SESSION['hi']);
//foreach( $_SESSION['hi'] as $val){
//echo $val;
//echo "<br>";}

/*foreach($new as $index=>$value)
{
$write=mysql_query("UPDATE scores SET clgname='$new1[$index]' WHERE id='i'");
}*/

/*foreach($new as $index=>$value)
$write=mysql_query("INSERT INTO scores(clgname,result) VALUES('$new[$index]','$arr[$index]')");*/
?>