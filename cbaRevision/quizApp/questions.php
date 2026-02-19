<?php
$conn = mysqli_connect("localhost", "root", "", "revision_db");

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $question = trim($_POST['question']);
    $a = trim($_POST['option_a']);
    $b = trim($_POST['option_b']);
    $c = trim($_POST['option_c']);
    $d = trim($_POST['option_d']);
    $correct = trim($_POST['correct_answer']);

    // Server-side validation
    if (empty($question) || empty($a) || empty($b) || empty($c) || empty($d) || empty($correct)) {
        $message = "<div class='alert alert-danger'>All fields are required!</div>";
    } else {

        $sql = "INSERT INTO quiz (question, option_a, option_b, option_c, option_d, correct_answer)
                VALUES ('$question', '$a', '$b', '$c', '$d', '$correct')";

        if (mysqli_query($conn, $sql)) {
            $message = "<div class='alert alert-success'>Question added successfully!</div>";
        } else {
            $message = "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Question</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2 class="mb-4">Add New Quiz Question</h2>

<?php echo $message; ?>

<form method="POST">

    <div class="mb-3">
        <label class="form-label">Question</label>
        <input type="text" name="question" class="form-control">
    </div>

    <div class="mb-3">
        <label>Option A</label>
        <input type="text" name="option_a" class="form-control">
    </div>

    <div class="mb-3">
        <label>Option B</label>
        <input type="text" name="option_b" class="form-control">
    </div>

    <div class="mb-3">
        <label>Option C</label>
        <input type="text" name="option_c" class="form-control">
    </div>

    <div class="mb-3">
        <label>Option D</label>
        <input type="text" name="option_d" class="form-control">
    </div>

    <div class="mb-3">
        <label>Correct Answer (A, B, C or D)</label>
        <input type="text" name="correct_answer" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Add Question</button>
    <a href="index.php" class="btn btn-secondary">Back</a>

</form>

</body>
</html>
