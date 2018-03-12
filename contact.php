
<html>
<head>
 
<style>
body  {
    background-image: url('bbb.jpg');
	    background-repeat: repeat-no;
	background-size: 100%;

}

.textbox {
    height: 40px;
}

.button {
    background-color:  #663399;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}
li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</head>
</style>
<body>
<ul>
  <li><a class="active" href="home.php"><font size=5 color='white'>Home</font></a></li>
  <li><a href="fixtures.php"><font size=5 color='white'>Fixtures</font></a></li>
  <li><a href="contact.php"><font size=5 color='white'>Notify</font></a></li>
  <li><a href="records.php"><font size=5 color='white'>Winning Records</a></li>
   <li><a href="logout.php"><font size=5 color='white'>Log Out</a></li>
  <?php 
  session_start();
  if(isset($_SESSION['username']))
  {
 echo "<li style='float:right'><br>Welcome ";
echo $_SESSION['username'];
echo "!</a></li></font>";
  }
?>
</ul>
</body>
</html>





<?php

echo "<br><br><br><font color='black'><center><form action='contact.php' method='POST' id='mine'>E-mail
<input type='email' name='id' placeholder='name@gmail.com'>
 <input type='submit' name='submit'  value='send' class='button'/></form>

<textarea rows='4' cols='50' name='message' form='mine'>
Enter text here...</textarea>";
if(isset($_POST['submit']) && isset($_POST['id']) & isset($_POST['message']))
{

	if($_POST['id'] && $_POST['message']){
	$msg=$_POST['message'];
	$id=$_POST['id'];
//$msg = "we will keep you updated regarding tournaments being held in our college";

// use wordwrap() if lines are longer than 70 characters
//$msg = wordwrap($msg,70);

// send email
mail($id,"My subject",$msg);
}
else
	echo "<br><br><font color='red'>bad input</font>";

}