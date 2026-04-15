<?php
	session_start();
?>
<html>
	<head>
		<title>Session Variables 3</title>
	</head>
	<body>
		<?php
			
			echo "Read session Variables <br/>";
			if(isset($_SESSION['name'])){
				echo "Name is: $_SESSION[name] <br/>";
			}
			if(isset($_SESSION['surname'])){
				echo "Name is: $_SESSION[surname] <br/>";
			}
			if(isset($_SESSION['amount'])){
				echo "Amount is: $_SESSION[amount] <br/>";
			}
			if(isset($_SESSION['name'])){
				echo "Date and Time are: ", date('Y m d H:i:s', $_SESSION['time']), "<br/>";
			}

			header("Location: SessionVariables4.php");
			
		?>

	</body>
</html>