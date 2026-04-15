<?php
	session_start();
?>
<html>
	<head>
		<title>Session Variables</title>
	</head>
	<body>
		<?php
		$name="Joe";
		$surname="Borg";
		$amount="$14.92";
		
		$_SESSION['name'] = $name;
		$_SESSION['surname'] = $surname;
		$_SESSION['amount'] = $amount;
		$_SESSION['time'] = time();
		
		echo "Store session variables <br/>";
		echo "Name is: $_SESSION[name] <br/>";
		echo "Amount is: $_SESSION[amount] <br/>";
		echo "Date and Time are: ", date('Y m d H:i:s', $_SESSION['time']), "<br/>";
		?>
		<a href="SessionVariables2.php">Session Variables 2</a>
	</body>
</html>