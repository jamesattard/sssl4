<!-- Question 4 -->
<?php
// Step 1: Check if form is submitted
if (isset($_POST['submit'])) {
    // Step 2: Get user input from the form
    $name = $_POST['name'];
    $color = $_POST['color'];

    // Step 3: Validate input and display content
    if (!empty($name) && !empty($color)) {
        echo "<h1>Welcome, $name!</h1>";
        echo "<body style='background-color:$color;'></body>";
    } else {
        echo "<p style='color:red;'>Please enter your name and select a color.</p>";
    }
}
?>

<!-- HTML Form -->
<form method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"><br><br>

    <label for="color">Favorite Color:</label>
    <select name="color" id="color">
        <option value="">--Select Color--</option>
        <option value="red">Red</option>
        <option value="green">Green</option>
        <option value="#00A2FF">Blue</option>
    </select><br><br>

    <input type="submit" name="submit" value="Submit">
</form>
