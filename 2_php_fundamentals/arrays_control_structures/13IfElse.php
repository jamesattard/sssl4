<!DOCTYPE html>
<html lang="en">
	<meta charset="UTF-8">
	<title>13 - If Else</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<body>
		<?php
		$age = 19;
		$password = "ginger";
		if ($age > 18)
		{
			echo "Person should be allowed in the club since $age is greater than 18 <br/>";
		}else{
			echo "Not allowed <br/>";
		}
		
		if ($password=="ginger"){
			echo "Password is ginger";
		}else{
			echo "Password is not ginger";
		}
		
		?>
	</body>
</html>
