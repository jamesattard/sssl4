<!DOCTYPE html>
<html lang="en">
	
	<head>
	  <meta charset="utf-8" />
	  <title>Display list of books</title>
	  <link rel="stylesheet" type="text/css" href="style.css" />
	</head>

	<body>
		
		<?php
	 	    $connection = mysqli_connect("localhost", "root", "", "books_db")
		 		or die("Cannot connect.");
			
			$query = "SELECT * FROM tbl_books";
		 	$result = mysqli_query($connection, $query)
		 		or die("Error in query: ". mysqli_error($connection));
				
			//Display book with associative array
			while($row = mysqli_fetch_assoc($result)) {?>	
				<a href="bookDetails.php?bookid=<?php echo $row['bookId']; ?>"><?php echo $row['title']; ?> </a><br>
			<?php
		 	}
		?>

	</body>
	
</html>