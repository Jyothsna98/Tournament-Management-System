<?php
echo "<form action='chesscheck.php' method='POST'><font size=5>1.This piece has limited movement. Its capture or mate means the end the game.<br><br>
	
  <input type='radio' name='ansch1' value='King' > King<br>
  <input type='radio' name='ansch1' value='Queen'> Queen<br>
  <input type='radio' name='ansch1' value='Bishop'> Bishop<br>  
   <input type='radio' name='ansch1' value='Knight'> Knight<br><br>";
   echo "2.Its movement is a combination of the Rook and Bishop.<br><br>
   <input type='radio' name='ansch2' value='King' > King<br>
  <input type='radio' name='ansch2' value='Queen'> Queen<br>
  <input type='radio' name='ansch2' value='Bishop'> Bishop<br>  
   <input type='radio' name='ansch2' value='Knight'> Knight<br><br>
   3.Its movement forms an L shape and can jump overhead the piece blocking it.<br><br>
   <input type='radio' name='ansch3' value='King' > King<br>
  <input type='radio' name='ansch3' value='Queen'> Queen<br>
  <input type='radio' name='ansch3' value='Bishop'> Bishop<br>  
   <input type='radio' name='ansch3' value='Knight'> Knight<br><br>
   4.As long as its line of sight is clear, this piece moves in a straight, diagonal line.<br><br>
   <input type='radio' name='ansch4' value='King' > King<br>
  <input type='radio' name='ansch4' value='Queen'> Queen<br>
  <input type='radio' name='ansch4' value='Bishop'> Bishop<br>  
   <input type='radio' name='ansch4' value='Knight'> Knight<br><br>
   5.It moves forward one square, except when at the initial position where it may move two squares ahead.<br><br>
   <input type='radio' name='ansch5' value='King' > King<br>
  <input type='radio' name='ansch5' value='Queen'> Queen<br>
  <input type='radio' name='ansch5' value='Pawn'> pawn<br>  
   <input type='radio' name='ansch5' value='Knight'> Knight<br><br>
   6.When this piece reaches the last square, it is promoted and can be swapped for a Bishop, Knight, Rook or Queen.<br><br>
   <input type='radio' name='ansch6' value='King' > King<br>
  <input type='radio' name='ansch6' value='Queen'> Queen<br>
  <input type='radio' name='ansch6' value='Pawn'> pawn<br>  
   <input type='radio' name='ansch6' value='Knight'> Knight<br><br>
   7.How many boxes does the Chess board have ?<br><br>
   <input type='radio' name='ansch7' value='60' > 60<br>
  <input type='radio' name='ansch7' value='62'> 62<br>
  <input type='radio' name='ansch7' value='64'> 64<br>  
   <input type='radio' name='ansch7' value='66'> 66<br><br>
   8.This situation ends the game in a draw where the player can no longer make any legal moves; however, his/her King is not in check.<br><br>
   <input type='radio' name='ansch8' value='Stalemate' > Stalemate<br>
  <input type='radio' name='ansch8' value='Checkmate'> Checkmate<br>
  <input type='radio' name='ansch8' value='Castle'> Castle<br>  
   <input type='radio' name='ansch8' value='Promotion'> Promotion<br><br>
   9.As long as its line of sight is clear, this piece moves in a straight line, either horizontally or vertically.<br><br>
   <input type='radio' name='ansch9' value='Rook' >Rook<br>
  <input type='radio' name='ansch9' value='Queen'> Queen<br>
  <input type='radio' name='ansch9' value='Pawn'> pawn<br>  
   <input type='radio' name='ansch9' value='Knight'> Knight<br><br>
   10.You need this pair for castling. Castling is a way of keeping a very important piece safe while the other piece at an advantageous position.<br><br>
   <input type='radio' name='ansch10' value='King and Queen' > King and Queen<br>
  <input type='radio' name='ansch10' value='King and Rook'> King and Rook<br>
  <input type='radio' name='ansch10' value='King and Pawn'>King and pawn<br>  
   <input type='radio' name='ansch10' value='King and Knight'>King and Knight<br><br>
    <center><input type='submit' name='submit' value='submit'></center></form></font>";
	
	/*if(isset($_POST['sss']))
	{
		if(isset( $_POST['ansch1']) && isset($_POST['ansch2']) && isset($_POST['ansch3']) && isset($_POST['ansch4']) && isset($_POST['ansch5']) && isset($_POST['ansch6']) && isset($_POST['ansch7']) && isset($_POST['ansch8']) && isset($_POST['ansch9']) && isset($_POST['ansch10']) )  
		{
				echo "<input type='submit' name='sss' value='submit2' formaction='chesscheck.php'></form>";
		}
		else
			echo "please attempt all questions";
	}*/
   ?>
   
   