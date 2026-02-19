<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8" />
	  <title>Query Database Books</title>
	  <link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>		
		<h1>Query the Books Database</h1>
		<h3>Search for Title</h3>
		<p>Precede and follow the entry with % if not a complete title.</p>
		
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<p>Book Title: <input type="text" name="title" /></p>
			<p><input type="submit" name="submit" value="Submit" /></p>
		</form>
		
		<?php
		if (isset($_POST['submit'])){
		
			$title = (trim($_POST['title']));
			//Connect to the Book database- Important to do this before using mysql_real_escape_string
	 	    $conn = mysqli_connect('localhost', 'root', '', 'books_db')
				or die('Error connecting to MySQL server.');	
				
			//Remove white space, check for blanks, and remove special characters
			if (empty($title)){
				die ("Please enter a title");
			}else{
				$title = mysqli_real_escape_string($conn, $title); 
			}
			
			
			//Select book with partial title
			$query = "SELECT * FROM tbl_books WHERE title LIKE '$title'";
		 	$result = mysqli_query($conn, $query)
				or die("Error in query: ". mysqli_error($conn));
			
			if(mysqli_num_rows($result) == 0){
				echo "No book found";
			}else{
				//Display book with associative array
				while($row = mysqli_fetch_assoc($result)) {
					echo "$row[title] $row[author] $row[publisher] $row[price] <br />";
				}
			}
		}
		
		?>
	</body>
</html>
