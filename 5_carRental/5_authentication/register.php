<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="Menu.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Car Rentals - Register</title>
</head>
<body>


<?php
session_start();
require_once 'Menu.php';    
require_once 'Dbtrans.php';

$conn = connectToDB();

$message = "";

// Check if form submitted
if (isset($_POST['register'])) {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert into DB
    $result = insertEmployee($conn, $name, $email, $hashedPassword);

    if ($result) {
        $message = "Registration successful! You can now log in.";
    } else {
        $message = "Error: Could not register user.";
    }
}
?>


<?php
if (isset($_SESSION['email'])) {
    echo "<div class='container mt-5'>
            <div class='alert alert-warning'>
                You are already logged in.
            </div>
        </div>";
    exit();
}
?>

<div class="container mt-5">
    <h2>Register</h2>

    <?php if ($message != "") { ?>
        <div class="alert alert-info"><?php echo $message; ?></div>
    <?php } ?>

    <form method="POST" action="">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" name="register" class="btn btn-primary">Register</button>
    </form>
</div>

</body>
</html>