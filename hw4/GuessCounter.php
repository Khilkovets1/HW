<?php session_start(); ?>
 
<form method ="GET" action ="Guess.php">
	<label>Guess a number between 1-100</label>
	<input type ="number" name = "guess">
		<br/ >
	<input type="submit" value="submit"> 
</form>





<?php
if(isset($_GET["guess"]))
{
	if(!isset($_SESSION["counter"]))
	{
		$_SESSION["counter"] = 0;
	}
	$_SESSION["counter"] += 1;
	$guesses = $_SESSION["counter"];
 

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
	echo "<br/> counter: $guesses";
	
}




?>