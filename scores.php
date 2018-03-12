<?php
session_start();
/*require('connect.php');
$extract=mysql_query("SELECT clgname1 FROM firstround");
while($r = mysql_fetch_assoc($extract))
{
	$row[]=$r['clgname1'];	
}*/
$row=$_SESSION['dept'];
	echo "<html><head><style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
tr:nth-child(even) {
    background-color: #dddddd;
}
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
</style></head><body>";

echo "<table><tr><th>Name of the college</th>";

echo "<form action='result.php' method='POST'>";
$x=1;
foreach ($row as $value)
{
	echo "<th>Round";
	echo $x;
	$x++;
	echo "</th>";
}
echo "</tr>";
$x=1;
foreach ($row as $value)
{
	echo "<tr><th>";
	echo $value;
	echo "</th>";
	foreach ($row as $r)
	{
		echo "<th><input type='text' name='score[]'></th>";
	}
	$x++;
}
echo "<center>";
echo "<input type='submit' class='button' name='sub' value='submit'>";
echo "</center>";
echo "</form";
echo "</table</body></html>";

?>