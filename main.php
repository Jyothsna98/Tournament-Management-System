<html>
<head>
<style>
body  {
    background-image: url('bbb.jpg');
	    background-repeat: repeat-no;
	background-size: 100%;

}

h1 {
    color: black;
    text-align: center;
    font-family: "SIMPSON";
    font-size: 60px;
}

form {
	text-align:center;
	font-size:30px
}
.input {
  height: 26px;
    width: 250px;
    border: 1px solid #d2d2d2;
    margin-bottom: 20px;
}

.btn {
      background-color: green;
      color: white;
    border: 1px solid green;
    padding: 8px 24px;
    cursor: pointer;
    border-radius: 4px;
}
}
</style>
</head>
<body>

</style>
</style>
</head>

</html>
<?php

echo "<html><body>";
echo "<center><br><h1>Log In</h1><br><br>
<form action='main.php' method='POST'>
Username:&nbsp;&nbsp;<input type='text' name='username'placeholder='yourname' required> <br>";
echo "<br>Password:&nbsp;&nbsp;<input type='password' name='password' placeholder='password' required><br>";
echo "<br>
<input type='submit' name='submit' value='Login' class='btn'>
<form></center>
</body>
</html>";

?>
<?php
 ini_set("display_errors", "0");
 // error_reporting(E_ALL);
 ob_start();
 session_start();
 require('connect.php');
 
 $error = false;
 
 if( isset($_POST['username']) && isset($_POST['password']) && isset($_POST['submit']) ) { 
  

  $password=$_POST['password'];
  $username=$_POST['username'];
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
			
			//echo "<a href='link.php'>click to redirect</a>";
			$_SESSION['username']=$username;
			header("Location: home.php");
		}

    else {
    $errMSG = "Incorrect Credentials, Try again...";
   }
    
  }
 }
 
?>

<p style="color: red; text-align: center; font-size: 1.2em;"><?php echo $errMSG ?></p>
</body>
</html>
