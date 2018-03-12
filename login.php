<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
if($username && $password)
{
	require('connect.php');
	$extract=mysql_query("SELECT * FROM users WHERE username='$username'");
$numrows=mysql_num_rows($extract);
	if($numrows!=0)
{
	while($row=mysql_fetch_assoc($extract))
	{
		$dbusername=$row['username'];
		$dbpassword=$row['password'];
	}
		if( $dbusername==$username && $dbpassword==$password)
		{
			//echo "<center><h1 style='color:white;'> TOURNAMENT MANAGER</h1></center>";
			//echo "<p style='color:white'>welcome $username ,</p>";
			//echo ",";
			//echo "<br><br><br>";
			//echo "FIXTURES<br><br><br><br>NOTIFY<br><br><br><br>WINNING RECORDS";
			/*echo "<style>
					body {
					background-image: url(tm.jpg);
					background-size: 1600px 1600px;
					background-repeat: no-repeat;
					padding-top: 40px;
						}
					</style>	
					<a href='fixtures.php'>FIXTURES</a><br><br><br><br>";
			echo "<a href='notify.php'>NOTIFY</a><br><br><br><br>";
			echo "<a href='records.php'>WINNING RECORDS</a><br><br><br><br>";
			echo "<a href='logout.php'>LOGOUT</a><br><br><br><br>";*/
			$_SESSION['username']=$username;
		}
		else
			echo "incorrect password";
		
		
}

else
echo "invalid username and password";
}
else
	echo "please enter username and password";
?>