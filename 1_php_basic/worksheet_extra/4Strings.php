<!DOCTYPE html>
<html lang="en">
	<meta charset="UTF-8">
	<title>4EscapeSequence</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<body>
	<?php
		$expand = 77.33;
		$either = 80;
		// Outputs: Arnold once said: "I'll be back"
		echo "Arnold once said: I\'ll be back <br/> <br/>";
			
		
		// Outputs: You deleted C:\*.*?
		echo "You deleted C:\\*.*? <br/><br/>";
			
		// Outputs: Variables do not $expand $either
		echo "Variables do not \$expand \$either <br/> <br/>";	
		
		echo "However when using double quotes, variables expand! $expand";
	?>
	</body>
</html>
