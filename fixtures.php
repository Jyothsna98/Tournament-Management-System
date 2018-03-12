<?php
session_start();
echo" 
<html>
<body>
<style>
.button {
    background-color:  #A0522D;
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
    background-image: url(all.jpg);
    background-size: 1600px 1600px;
    background-repeat: no-repeat;
    padding-top: 40px;
}
</style>
<center>
<h1>Fixtures</h1>
<form action='fixtures.php' method='POST'>
<b>Enter number of Departments:</b><input type='number' name='number1'>
<input type='submit' class='button' name='submit' value='submit'><br></form>";
//echo "<form action='fixtures.php' method='POST' onsubmit='' onreset=''>"; 
echo "<form action='type.php' method='POST'>";
require('connect.php');
$extract=mysql_query("SELECT * FROM college");
$numrows=mysql_num_rows($extract);
if(isset($_POST['submit']))
{
$number1=$_POST['number1'];
$_SESSION['limit']=$number1;
//echo "<script>var bikki = new Array()</script>";
	if($number1<=1)
	{echo "please enter a valid number";}
	else
	{
	while($number1)
	{
	 	echo "<br><b>Enter Department name:</b><input list='names' name='joshi[]'><br>
		<datalist id='names'>";
		while($row=mysql_fetch_assoc($extract))
		{
			$namedb=$row['clgname'];
			//$arr=array($namedb);
			echo "<option>$namedb</option>";
		}echo "</datalist>";
		$number1--;
	}
	}
	echo "<br><br><center><input type='submit' class='button' name='submitt' value='submit'></form>";
}
?>
