<?php
	session_start();
?>
<html>
	<head>
		<title>Session Variables 4</title>
	</head>
	<body>
		<?php

			echo "Read session Variables <br/>";
			
			if(isset($_SESSION['surname'])){
				echo "Name is: $_SESSION[surname] <br/>";
			}
	
			session_destroy();
		?>

	</body>
</html>