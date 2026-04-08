<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "books_db";
$port = 3307;

$conn = mysqli_connect($host, $user, $pass, $db, $port)
    or die("Connection failed: " . mysqli_connect_error());

$title = "";
$author = "";
$price = 0;
$category = "";

if (isset($_POST['submit'])) {
    $title = trim($_POST['title']); // remove any leading/trailing spaces
    $author = trim($_POST['author']); // remove any leading/trailing spaces
    $price = $_POST['price']; // remove any leading/trailing spaces
    $category = trim($_POST['category']); // remove any leading/trailing spaces


    // Escape user input from SQL injection attacks
    $title  = mysqli_real_escape_string($conn, $title);
    $author = mysqli_real_escape_string($conn, $author);
    $price  = mysqli_real_escape_string($conn, $price);
    $category = mysqli_real_escape_string($conn, $category);

    $sql = "INSERT INTO books_tbl (title, author, price, category) 
            VALUES ('$title', '$author', '$price', '$category')";

    if (mysqli_query($conn, $sql)) {
        echo "Book added successfully!";
    } else {
        echo "Echo: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Book</title>
</head>

<body>

    <h1>Add a New Book</h1>

    <form method="post" action="">
        Title:<br>
        <input type="text" name="title" value="<?php echo $title; ?>">
        <br><br>

        Author:<br>
        <input type="text" name="author" value="<?php echo $author; ?>">
        <br><br>

        Price:<br>
        <input type="number" name="price" value="<?php echo $price; ?>">
        <br><br>

        Category:<br>
        <input type="text" name="category" value="<?php echo $category; ?>">
        <br><br>

        <input type="submit" name="submit" value="Add Book">
    </form>

    <br><br>
    <a href="bookList.php">Home</a>

</body>
</html>