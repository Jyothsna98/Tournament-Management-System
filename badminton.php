<?php
echo "<font size=5><form action='badcheck.php' method='POST'>1: What is the standard height of a badminton net at the center of the court?<br><br>";
echo "<input type='radio' name='ans1' value='4 feet 6 inches'  >4 feet 6 inches<br>";
echo "<input type='radio' name='ans1' value='5 feet' >5 feet<br>";
echo "<input type='radio' name='ans1' value='5 feet 6 inches' >5 feet 6 inches<br>";
echo "<input type='radio' name='ans1' value='4 feet' >4 feet<br>";

echo "<br>";
echo "2: How many feathers are there in a standard feathered badminton shuttlecock?<br><br>";
echo "<input type='radio' name='ans2' value='12 feathers'  >12 feathers<br>";
echo "<input type='radio' name='ans2' value=' 16 feathers' >16 feathers<br>";
echo "<input type='radio' name='ans2' value=' 20 feathers' >20 feathers<br>";
echo "<input type='radio' name='ans2' value='18 feathers' >18 feathers<br>";
echo "<br>";
echo "3: What is the width of a badminton court for Singles play?<br><br>";
echo "<input type='radio' name='ans3' value='17 feet'  >17 feet<br>";
echo "<input type='radio' name='ans3' value=' 18 feet 6 inches' >18 feet 6 inches<br>";
echo "<input type='radio' name='ans3' value='  20 feet' >20 feet<br>";
echo "<input type='radio' name='ans3' value='11 feet' >11 feet<br>";
echo "<br>";
echo "4: When was badminton introduced as a Medal Sport in the Olympics?<br><br>";
echo "<input type='radio' name='ans4' value='1992 Barcelona Olympics'  >1992 Barcelona Olympics<br>";
echo "<input type='radio' name='ans4' value='1996 Atlanta Olympics' >1996 Atlanta Olympics<br>";
echo "<input type='radio' name='ans4' value='2000 Sydney Olympics' >2000 Sydney Olympics<br>";
echo "<input type='radio' name='ans4' value='2002 Sydney Olympics' >2002 Sydney Olympics<br>";
echo "<br>";

echo "5: Like the Thomas Cup championship which is only for men, there is a badminton championship trophy that is only for women. Which is it?<br><br>";
echo "<input type='radio' name='ans5' value='Sudirman Cup'  >Sudirman Cup<br>";
echo "<input type='radio' name='ans5' value='Uber Cup' >Uber Cup<br>";
echo "<input type='radio' name='ans5' value='All England Open' >All England Open<br>";
echo "<input type='radio' name='ans5' value='None of the above' >None of the above<br>";
echo "<br>";
echo "6: If a shuttlecock is hit on the line by a badminton player, is it considered to have fallen IN or OUT?<br><br>";
echo "<input type='radio' name='ans6' value='IN'  >IN<br>";
echo "<input type='radio' name='ans6' value='OUT' >OUT<br>";
echo "<input type='radio' name='ans6' value='Both' >Both<br>";
echo "<input type='radio' name='ans6' value='None of the above' >None of the above<br>";
echo "<br>";

echo "7:  If a badminton player touches the net while playing is it considered a FAULT?<br><br>";
echo "<input type='radio' name='ans7' value=' Yes, Its a fault'  >Yes, Its a fault<br>";
echo "<input type='radio' name='ans7' value='No, it is not a fault' >No, it is not a fault<br>";
echo "<input type='radio' name='ans7' value='Both' >Both<br>";
echo "<input type='radio' name='ans7' value='None of the above' >None of the above<br>";
echo "<br>";
echo "8: Which of these badminton tournaments is a higher level tournament? the Grand Prix Gold or Super Series?<br><br>";
echo "<input type='radio' name='ans8' value='Grand Prix Gold'  >Grand Prix Gold<br>";
echo "<input type='radio' name='ans8' value='Super Series' >Super Series<br>";
echo "<input type='radio' name='ans8' value='Both' > Both<br>";
echo "<input type='radio' name='ans8' value='None of the above' >None of the above<br>";
echo "<br>";

echo "9: When was mixed doubles introduced as a medal sport at the Olympics?<br><br>";
echo "<input type='radio' name='ans9' value='1992 Barcelona Olympics' >1992 Barcelona Olympics<br>";
echo "<input type='radio' name='ans9' value='1996 Atlanta Olympics' >1996 Atlanta Olympics<br>";
echo "<input type='radio' name='ans9' value='2000 Sydney Olympics' >2000 Sydney Olympics<br>";
echo "<input type='radio' name='ans9' value='None of the above' >None of the above<br>";
echo "<br>";
echo "10: Badminton World rankings are calculated and released by BWF at what frequency?<br><br>";
echo "<input type='radio' name='ans10' value='Once in every year'  >Once in every year<br>";
echo "<input type='radio' name='ans10' value='Once in every month.' >Once in every month.<br>";
echo "<input type='radio' name='ans10' value='Once in every week' >Once in every week<br>";
echo "<input type='radio' name='ans10' value='Twice in every year' >Twice in every year<br>";



echo "<center><input type='submit' name='submit' value='submit'></form></center></font>";
/*if(isset($_POST['submit']))
{
if($_POST['ans1'] && $_POST['ans2'] && $_POST['ans3'] && $_POST['ans4'] && $_POST['ans5'] && $_POST['ans6'] && $_POST['ans7'] && $_POST['ans8'] && $_POST['ans9'] && $_POST['ans10'] )
	echo "<input type='submit' name='submit' value='submit' form action='badcheck'></form>  ";
else
	echo "attempt incomplete";
}

*/
?>





 