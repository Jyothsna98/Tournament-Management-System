<?php
session_start();
echo "<html>
<html>
</head>
<style>
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
</style>
</head>";

/**
 *
 * Create a round robin of teams or numbers
 *
 * @param    array    $teams
 * @return    $array
 *
 */
 function roundRobin( array $teams ){

    if (count($teams)%2 != 0){
        array_push($teams,"bye");
    }
    $away = array_splice($teams,(count($teams)/2));
    $home = $teams;
	/*print_r($home);
	print_r($away);*/
    for ($i=0; $i < count($home)+count($away)-1; $i++)
    {
        for ($j=0; $j<count($home); $j++)
        {
            $round[$i][$j]["Home"]=$home[$j];
            $round[$i][$j]["Away"]=$away[$j];
        }
        if(count($home)+count($away)-1 > 2)
        {
            $s = array_splice( $home, 1, 1 );
            $slice = array_shift( $s  );
            array_unshift($away,$slice );
            array_push( $home, array_pop($away ) );
        }
    }
    return $round;
}


$members=$_SESSION['d'];
$rounds = roundRobin($members);
$_SESSION['dept']=$members;
$table = "<table>\n";
$x=1;
foreach($rounds as $round => $games)
{
    $table .= "<tr><th>Round: ".($round+1)."</th><th></th><th>Away</th></tr>\n";
	echo "&nbsp";
    foreach($games as $play)
	{
	$table .= "<tr><td>".$x."   ".$play["Home"]."</td><td>-v-</td><td>".$play["Away"]."</td></tr>\n";
	echo "&nbsp";
	$x++;
        }
	$x=1;
}
$table .= "</table>\n";
echo $table;
?>
<form action='scores.php' method='POST'>
<center><input type='submit' class='button' name='submit11' value='Scores'></center>
</form>
<!--<?php
echo "<font size=5";
$score1=$_POST['score'];
foreach($members as $v)
{
	echo $v;
	foreach($score1 as $val)
	{
	echo $val;
	}
	$x++;
	echo "<br></font>";
}
?>
</form>-->

</body>
</html>
