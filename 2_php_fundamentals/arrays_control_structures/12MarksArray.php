<!DOCTYPE html>
<html lang="en">
	<meta charset="UTF-8">
	<title>12 - Marks Array</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<body>
		<?php //beginning of the actual PHP code
			
			$marksArray = array();
			$marksArray[0] = 40;
			$marksArray[1] = 50;
			$marksArray[2] = 45;
			$marksArray[3] = 60;
			$marksArray[4] = 50;				
			
			$elements = count($marksArray);
			$sum = $marksArray[0] + $marksArray[1] + $marksArray[2] + $marksArray[3] + $marksArray[4] + $marksArray[5];
			$mean = $sum/$elements;
			
			echo("The number of elements in the array is $elements <br />");
			echo("The sum of the elements is $sum <br />");
			echo("The mean of the array is $mean <br />");
		?>
	</body>
</html>