<!DOCTYPE html>
<html lang="en">
	<meta charset="UTF-8">
	<title>15 - Slot Machine</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<body>
		<?php
		$random1 = (rand(1,3));
		$random2 = (rand(1,3));
		$random3 = (rand(1,3));
		
		print("Random number 1 is $random1 <br/>");
		print("Random number 2 is $random2 <br/>");
		print("Random number 3 is $random3 <br/>");
		//Notice that since you used double quotes you can avoid using the . to concatenate the $random variable.

		if (($random1 == $random2) && ($random1 == $random3)){
			echo ("You won");
		}else{
			echo ("You lose try again");
		}
		?>
	</body>
</html>