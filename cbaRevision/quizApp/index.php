<?php
$conn = mysqli_connect("localhost", "root", "", "revision_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM quiz";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz Questions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2 class="mb-4">Quiz Questions</h2>

<a href="questions.php" class="btn btn-primary mb-3">Add New Question</a>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<div class="card mb-3">
    <div class="card-body">
        <h5><?php echo $row['question']; ?></h5>
        <ul>
            <li>A. <?php echo $row['option_a']; ?></li>
            <li>B. <?php echo $row['option_b']; ?></li>
            <li>C. <?php echo $row['option_c']; ?></li>
            <li>D. <?php echo $row['option_d']; ?></li>
        </ul>
        <p><strong>Correct Answer:</strong> <?php echo $row['correct_answer']; ?></p>

        <a href="delete.php?id=<?php echo $row['id']; ?>" 
           class="btn btn-danger btn-sm"
           onclick="return confirm('Are you sure?');">
           Delete
        </a>
    </div>
</div>

<?php } ?>

</body>
</html>
