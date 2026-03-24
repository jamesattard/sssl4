<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "customer_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function registration_message($fullname, $email)
    {
        echo "<p style='color:green;'>
        Customer $fullname with email $email has been successfully registered
        </p>";
}

$full_name = "";
$email = "";
$success_message = "";

$full_name_err = "";
$email_err = "";

if (isset($_POST['submit'])) {

    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);

    if (empty($full_name)) {
        $full_name_err = "Full name is required";
    }

    if (empty($email)) {
        $email_err = "Email is required";
    }

    if ($full_name_err == "" && $email_err == "") {
        $full_name = mysqli_real_escape_string($conn, $full_name);
        $email = mysqli_real_escape_string($conn, $email);

        $sql = "INSERT INTO customers (full_name, email)
                VALUES ('$full_name', '$email')";

        if (mysqli_query($conn, $sql)) {
            registration_message($full_name, $email);
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>
</head>
<body>

<a href="index.php">Home</a> | <a href="insert.php">Insert</a>
<br><br>
<h2>Add Customer</h2>



<form method="post" action="">
    Full Name:<br>
    <input type="text" name="full_name" value="<?php echo $full_name; ?>" >
    <?php echo $full_name_err; ?>
    <br><br>

    Email:<br>
    <input type="email" name="email" value="<?php echo $email; ?>" >
    <?php echo $email_err; ?>
    <br><br>

    <input type="submit" name="submit" value="Add Customer">
</form>

</body>
</html>
