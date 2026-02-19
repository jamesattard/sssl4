<!DOCTYPE html>
<html lang="en">
	<meta charset="UTF-8">
	<title>25 - For Loop Table</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<body>
<?php
	echo "<table width='100' align='center'>";
	for($i=0; $i<=5; $i=$i+1)
	{
		if($i % 2 == 0)
		{
			echo "<tr><td style='background-color:red'>$i</td><tr>";
		}
		else
		{
			echo "<tr><td style='background-color:green'>$i</td><tr>";
		}
	}
	echo "</table>";
?>
</body>
</html>
