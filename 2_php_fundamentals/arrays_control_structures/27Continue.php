<!DOCTYPE html>
<html lang="en">
	<meta charset="UTF-8">
	<title>27 - Continue</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<body>
<?php
  for ($i = 0; $i < 5; ++$i) {
      if ($i == 2)
      {
          continue;
	//notice that once the program hits continue 
	//the echo command underneath is ignored and
	//the loop starts with the next cycle when $i == 2
      }
      echo "$i\n";
  }
?> 
</body>
</html>	