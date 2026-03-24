<?php
$conn = mysqli_connect("localhost", "root", "", "revision_db");

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM quiz WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record.";
    }
}
?>
