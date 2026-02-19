<!-- Q1: Write a PHP script to check if a user is 18 or older. If they are, display a welcome message. If they are not, display a message that they must be at least 18 years old to access the site. -->
<?php
// Step 1: Define the user's age
$userAge = 20; // You can change this value to test different cases

// Step 2: Check if the user is 18 or older
if ($userAge >= 18) {
    echo "Welcome to the website!";
} else {
    echo "You must be at least 18 years old to access this site.";
}
?>
<!-- Question 2 -->
<?php
// Step 1: Define predefined username and password
$correctUsername = "admin";
$correctPassword = "12345";

// Step 2: User-provided credentials (simulate user input)
$username = "admin"; // Change this to test
$password = "12345"; // Change this to test

// Step 3: Check if both username and password match
if ($username === $correctUsername && $password === $correctPassword) {
    echo "Login successful!";
} else {
    echo "Invalid username or password.";
}
?>

<!-- Question 3 -->
<?php
// Step 1: Define user role (simulate user input)
$userRole = "editor"; // Change this value to test different roles

// Step 2: Display navigation based on role
if ($userRole === "admin") {
    echo "Dashboard | Manage Users | Settings";
} elseif ($userRole === "editor") {
    echo "Dashboard | Edit Content";
} elseif ($userRole === "viewer") {
    echo "Dashboard | View Content";
} else {
    echo "Invalid role.";
}
?>
xċ




