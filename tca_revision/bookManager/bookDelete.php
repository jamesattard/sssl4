<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "books_db";
$port = 3307;

$conn = mysqli_connect($host, $user, $pass, $db, $port)
    or die("Connection failed: " . mysqli_connect_error());

// Delete the record with id = $_GET['id']
if (!empty($_GET['id'])) {
    $id = (int) $_GET['id'];
    $sql = "DELETE FROM books_tbl WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        // redirect to the homepage
        header("Location: bookList.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "No book ID provided";
}

mysqli_close($conn);

?>

