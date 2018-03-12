<?php 
echo "<style>
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
</style>";
session_start();
$arr=$_POST['joshi'];
$_SESSION['d']=$arr;
//echo $_SESSION['d'];
echo "<form method='POST'>";
	echo "<center><p><h1>Type of the Tournment:</h1></p><br></center>";
//echo "<input type='radio' name='type' value='Round Robin' checked>Round robin</b>&nbsp;&nbsp;
//<input type='radio' name='type' value='Knockout'>Knockout<br>";
//echo "<input class='form-radio' type='radio' id='RoundRobin' name='options' value='RoundRobin' />Round Robin<br>";
  //echo  "<input class='form-radio' type='radio' id='Knockout'  name='options' value='Knockout'  />Knockout";
//echo "<br><br><center><input type='submit' name='submitt' value='submit'></form>";
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
	 //<br><br><center><input type='submit' name='register' value='register' formaction='register.php'>
echo "<center><input type='submit' class='button' name='roundrobin' value='Roundrobin' formaction='roundrobin.php'><br><br><br><br>
<input type='submit' name='roundy' class='button' value='knockout' formaction='knockout.php'></center>";

?>

</body>

</html>	
