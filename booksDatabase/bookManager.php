<?php
// =============================
// 1. DATABASE CONNECTION
// =============================
$connection = mysqli_connect("localhost", "root", "", "books_db")
    or die("Error in connection: " . mysqli_connect_error());


// =============================
// 2. DELETE LOGIC
// =============================
if (isset($_POST['delete_id'])) {

    $delete_id = $_POST['delete_id'];

    $delete_query = "DELETE FROM tbl_books 
                     WHERE bookId = $delete_id";

    mysqli_query($connection, $delete_query)
        or die("Error in delete query: " . mysqli_error($connection));
}


// =============================
// 3. SEARCH LOGIC
// =============================
$search = "";

if (isset($_POST['search'])) {

    $search = $_POST['search'];

    $query = "SELECT * FROM tbl_books
              WHERE title LIKE '%$search%'
              OR author LIKE '%$search%'";

} else {

    $query = "SELECT * FROM tbl_books";
}


// =============================
// 4. EXECUTE QUERY
// =============================
$result = mysqli_query($connection, $query)
    or die("Error in query: " . mysqli_error($connection));
?>


<!DOCTYPE html>
<html>
<head>
    <title>Book Manager</title>
</head>
<body>

<h2>Book Management System</h2>

<!-- SEARCH FORM -->
<form method="POST" action="">
    <input type="text"
           name="search"
           placeholder="Search by title or author"
           value="<?php echo $search; ?>">
    <button type="submit">Search</button>
</form>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Publisher</th>
        <th>Price</th>
        <th>Category</th>
        <th>Action</th>
    </tr>

<?php if (mysqli_num_rows($result) > 0) { ?>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>

        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['author']; ?></td>
            <td><?php echo $row['publisher']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td>
                <form method="POST" action="" style="display:inline;">
                    <input type="hidden"
                           name="delete_id"
                           value="<?php echo $row['bookId']; ?>">

                    <input type="submit"
                           value="Delete"
                           onclick="return confirm('Are you sure you want to delete this book?');">
                </form>
            </td>
        </tr>

    <?php } ?>

<?php } else { ?>

    <tr>
        <td colspan="6">No books found</td>
    </tr>

<?php } ?>

</table>

</body>
</html>

<?php
mysqli_close($connection);
?>
