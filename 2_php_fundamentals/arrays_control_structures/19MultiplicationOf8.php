<!DOCTYPE html>
<html lang="en">
	<meta charset="UTF-8">
	<title>19 - Mulitplication *8</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<body>
		<?php
			$eight = 8;
			for ($i = 1; $i <=10; $i++){
					echo("$i x $eight = " . ($i*$eight) . "<br/>");
			}
			echo("<br/><br/>");
			
			$j = 1;
			while ($j <= 10){
				echo("$j x $eight = " . ($j*$eight) . "<br/>");
				$j++;
			}		
			echo("<br/><br/>");
			
			$k = 1;
			do{
				echo("$k x $eight = " . ($k*$eight));
				echo("<br/>");
				$k++;
			}while ($k <= 10);
		?>
	</body>
</html>