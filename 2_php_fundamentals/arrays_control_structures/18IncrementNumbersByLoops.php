<!DOCTYPE html>
<html lang="en">
	<meta charset="UTF-8">
	<title>18 - Increment Numbers</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<body>
		<?php
			for ($i = 1; $i <=10; $i++){
					echo("$i ..");
			}
			
			echo("<br/><br/>");
			
			$j = 1;
			while ($j <= 10){
				echo("$j ..");
				$j++;
			}		
			
			echo("<br/><br/>");
			
			$k = 1;
			do{
				echo("$k . ..");
				$k++;
			}while ($k <= 10);
			
		?>
	</body>
</html>