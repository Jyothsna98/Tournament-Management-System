<?php


//if(!$_SESSION['username']) {
  //header("Location: register.php");
//}

?><!DOCTYPE html>
<html>
<head>
<style>
body {
    background-image: url("expense.jpg");
    background-color: #F0FFFF;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
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
</style>
</head>
<body>


<h1>SIGN UP</h1>
<form action="reg.php" method="post">
  Username
  <input type="text" name="username">
  <br><br><br>
  Password
  <input type="password" name="password"><br><br><br>
  Re-Enter Password
  <input type="password" name="repassword"><br><br><br>
  <input type="submit" class="btn" name="submit" value="REGISTER"/><br><br>
  </form>

<?php

 ini_set("display_errors", "0");
 // error_reporting(E_ALL);
 ob_start();
 session_start();
 //$con = require_once 'connectdb.php';
require("connect.php");

 
// $error = false;
 if( isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repassword']) && isset($_POST['submit']) ) { 
 
  if($_POST['repassword'] == $_POST['password']) {
   
    //echo "Password didn't match.";
  
  
 $username=$_POST['username'];
 $password=$_POST['password'];
 
   $query = mysql_query("INSERT INTO users(username,password) VALUES('$username','$password')");
   // unset($username);
   // unset($pass);
   echo "...";
    header("Location: main.php");
   // exit();
   }  
   else
	   echo "password didn't match";
 }  
?>

</body>
</html>
