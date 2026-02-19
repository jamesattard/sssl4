<!DOCTYPE html>
<html lang="en">
	<meta charset="UTF-8">
	<title>26 - Break</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<body>
	<?php
		//Countdown from 100 using a while true loop.
		// while (true) means loop forever!
		$counter = 0;		
		while(true)		
		{
			$counter++; 
			echo("$counter <br/>");
			if ($counter == 10)
			{
			/*although the loop is supposed to loop forever
			  when the counter reaches 10, we are breaking the 
			  loop by using the break statment. This causes the 
			  loop to stop 
			  */
				break;
			}				
		}		
		
	?>
</body>
</html>
