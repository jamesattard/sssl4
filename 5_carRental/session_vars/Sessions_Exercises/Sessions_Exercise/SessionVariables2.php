<?php
	session_start();
?>
<html>
	<head>
		<title>Session Variables 2</title>
	</head>
	<body>
		<?php
		
		//if ( (isset($_SESSION['name'])) && (isset($_SESSION['amount'])) && (isset($_SESSION['time'])) ){
			echo "Read session Variables <br/>";
			echo "Name is: $_SESSION[name] <br/>";
			echo "Name is: $_SESSION[surname] <br/>";
			echo "Amount is: $_SESSION[amount] <br/>";
			echo "Date and Time are: ", date('Y m d H:i:s', $_SESSION['time']), "<br/>";
	
			unset ($_SESSION['name']);
			unset ($_SESSION['amount']);
			unset ($_SESSION['time']);
		
		//or else use $_SESSION=array() to unset all the session variables at once.
		//}
		
		?>
		<a href="SessionVariables3.php">Session Variables 3</a>
	</body>
</html>