<!DOCTYPE html>
<html lang="en">
	<meta charset="UTF-8">
	<title>5_DeclaringConstants</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<body>
	<?php
		define("CONSTANT_1", 100);
		define("CONSTANT_2", 'One hundred', TRUE);
		
		echo "CONSTANT_1: ".CONSTANT_1 . "<br/>"; //outputs 100
		echo "CONSTANT_2: ".CONSTANT_2 . "<br/>"; //outputs One hundred
		echo "CONSTANT_1: ".constant_1 . "<br/>"; // outputs constant_1 since by default case_sensitive is set to false
		echo 'CONSTANT_2: '.constant_2; // outputs One hundred since case_sensitive is set to TRUE
	?>
	</body>
</html>
