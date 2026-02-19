<!DOCTYPE html>
<html lang="en">
	<meta charset="UTF-8">
	<title>25 - For Loop Table</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<body>

	<?php
		$destination = (rand(1,10));
		echo("Number generated: $destination <br/>");
		
		switch ($destination){
			case 1:
				echo"Going to Las Vegas";
				break;
			case 2:
				echo "Going to Amsterdam";
				break;	
			case 3:
				echo "Going to Egypt";
				break;	
			case 4:
				echo "Going to Tokyo";
				break;
			default:
				echo "Going nowhere";
		}
	?>
	</body>
</html>