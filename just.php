<?php 
session_start();
$arr=$_POST['joshi'];
$_SESSION['d']=$arr;
echo "<form method='POST'>";
	echo "<p><b>Type of the Tournment:</b></p><br>";
//echo "<input type='radio' name='type' value='Round Robin' checked>Round robin</b>&nbsp;&nbsp;
//<input type='radio' name='type' value='Knockout'>Knockout<br>";
echo "<input class='form-radio' type='radio' id='RoundRobin' name='options' value='RoundRobin' />Round Robin<br>";
  echo  "<input class='form-radio' type='radio' id='Knockout'  name='options' value='Knockout'  />Knockout";
echo "<br><br><center><input type='submit' name='submitt' value='submit'></form>";
$value_to_page = array(
    'RoundRobin' => 'roundrobin.php',
    'Knockout'  => 'knockout.php',
);
if(isset($_POST['submitt'])){

    // process other fields like $_POST['some-other']
    if(isset($_POST['options']) && isset($value_to_page[$_POST['options']])){
        header('Location: '.$value_to_page[$_POST['options']]);
        return;
    }
} 
	 echo "<br><br><center><input type='submit' name='register' value='register' formaction='register.php'>
<input type='submit' name='roundrobin' value='roundrobin' formaction='roundrobin.php'><input type='submit' name='roundy' value='knock' formaction='knockout.php'></center>";

?>

</body>

</html>	
