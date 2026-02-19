<!DOCTYPE html>
<html lang="en">
	<meta charset="UTF-8">
	<title>17 - Even Numbers</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<body>
		<?php
			for ($i = 1; $i <=50; $i++){
				if ($i%2==0){
					echo($i . "<br />");
				}
			}
		?>
	</body>
</html>