<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "books_db";
$port = 3307;

$conn = mysqli_connect($host, $user, $pass, $db, $port)
    or die("Connection failed: " . mysqli_connect_error());
?>

<!DOCTYPE html>

<html>
<head>
    <title>Book Details</title>
</head>

<body>

    <h1>Book Details</h1>

    <?php
        $id = $_GET['id'];

        $sql = "SELECT title, author, price, category FROM books_tbl WHERE id = $id";
        $result = mysqli_query($conn, $sql)
            or die("Error in query: " . mysqli_error()); 
            
        // Display the book detail inside the assoc. array
        while ($row = mysqli_fetch_assoc($result)) {
            echo 
                $row['title'] . " - " . 
                $row['author'] . " - " . 
                $row['price'] . " - " . 
                $row['category']; 
        }

        mysqli_close($conn);
    ?>

</body>
</html>