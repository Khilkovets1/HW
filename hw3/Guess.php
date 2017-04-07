<form method ="GET" action ="Guess.php">
	<label>Guess a number between 1-100</label>
	<input type ="number" name = "guess">
		<br/ >
	<input type="submit" value="submit"> 
</form>





<?php
if(isset($_GET["guess"]))
{
		




	$guess = $_GET["guess"];

	if($guess > 61)
		{
		echo "$guess is too high";
		}	
	if($guess < 61)
		{
		echo "$guess is too low";
		}	
	if($guess == 61)
		{
			echo "$guess is right!";
		}
	
}




?>