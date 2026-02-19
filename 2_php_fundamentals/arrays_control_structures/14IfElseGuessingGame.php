<!DOCTYPE html>
<html lang="en">
	<meta charset="UTF-8">
	<title>14 - Guessing Game</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<body>
		<?php
		$random = (rand(1,10));
		print("Random number between 0 and 10 is: $random <br/>");
		//Notice that since you used double quotes you can avoid using the . to concatenate the $random variable.

		if ($random == 7){
			echo ("You won");
		}else{
			echo ("You lose try again");
		}
		?>
	</body>
</html>