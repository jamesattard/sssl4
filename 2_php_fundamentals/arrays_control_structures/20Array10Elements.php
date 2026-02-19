<!DOCTYPE html>
<html lang="en">
	<meta charset="UTF-8">
	<title>20 - Array</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<body>
		<?php
			
			$marksArray = array();
			
			for ($i = 0; $i <10; $i++){
					$marksArray[$i] = (rand(1,10));
			}
			
			//$marksArray[0] = (rand(1,10));
			//$marksArray[1] = (rand(1,10));
			//$marksArray[2] = (rand(1,10));
			//$marksArray[3] = (rand(1,10));				
			
			for ($i = 0; $i <count($marksArray); $i++){
					echo("Array element $i - Value contained is " . $marksArray[$i]);
					echo("<br/>");
			}
		?>
	</body>
</html>