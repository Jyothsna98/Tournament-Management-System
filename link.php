<?php
session_start();



if(isset($_SESSION['username']))
{
echo "welcome ".$_SESSION['username']."!<br>";

echo "<a href ='logout.php'>logout</a>";
}
else
	die("you must log in");

?>