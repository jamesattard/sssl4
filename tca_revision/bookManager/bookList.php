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
    <title>Display list of books</title>
</head>

<body>

    <h1>List of Books</h1>
    <?php
        $sql = "SELECT id, title, author FROM books_tbl";
        $result = mysqli_query($conn, $sql)
            or die("Error in query: " . mysqli_error($conn));

        // Display the list of the books inside assoc. array
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <a href="bookDetails.php?id=<?php echo $row['id']; ?>">
                <?php echo $row['title'] . " - " . $row['author']; ?>
            </a> - 
            <a href="bookDelete.php?id=<?php echo $row['id']; ?>">
                DELETE
            </a>
            <br/>
        <?php
        }

        mysqli_close($conn);
    ?>

    <br><br>
    <a href="bookInsert.php">Add a new Book</a>

</body>
</html>