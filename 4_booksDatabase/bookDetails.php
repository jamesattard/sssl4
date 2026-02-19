<!DOCTYPE html>
<html lang="en">

	<head>
	  <meta charset="utf-8" />
	  <title>Display list of books</title>
	  <link rel="stylesheet" type="text/css" href="style.css" />
	</head>

	<body>		
		<?php
			$id = $_GET['bookid'];
			
	 	    $connection = mysqli_connect("localhost", "root", "", "books_db")
		 		or die("Cannot connect.");
			
			$query = "SELECT * FROM tbl_books WHERE bookId = '$id'";
			
		 	$result = mysqli_query($connection, $query)
		 		or die("Error in query: ". mysql_error());
				
			//Display book with associative array
			while($row = mysqli_fetch_assoc($result)) {
				echo "$row[price] $row[publisher]";

		 	}			
		?>
	</body>
	
</html>