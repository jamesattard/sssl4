<!--Question 1-->
<?php
$productName = "Laptop";
$price = 999.99;

echo "The product is a $productName and it costs €$price.<br/>";
?>
<!--Question 2-->
<?php
define("TAX_RATE", 0.08); // 8% tax rate
$subtotal = 100;

$totalPrice = $subtotal + ($subtotal * TAX_RATE);
echo "The total price after tax is: €$totalPrice<br/>";
?>
<!--Question 3-->
<?php
$firstName = "John";
$lastName = "Doe";

$fullName = $firstName . " " . $lastName;
echo "Full Name: $fullName<br/>";

echo "Is first name equal to last name? " . ($firstName == $lastName ? "Yes" : "No") . "<br/>";
echo "Is first name identical to last name? " . ($firstName === $lastName ? "Yes" : "No") . "<br/>";
?>
<!--Question 4-->
<?php
$inStock = false;
$onSale = true;

if ($inStock && $onSale) {
    echo "The product is in stock and on sale!<br/>";
} elseif ($inStock) {
    echo "The product is in stock but not on sale.<br/>";
} else {
    echo "The product is not available.<br/>";
}
?>
<!--Question 5-->
<?php
$quantity = 5;

echo "Initial quantity: $quantity<br>";

$quantity++; // Post-increment
echo "After increment: $quantity<br>";

$quantity--; // Post-decrement
echo "After decrement: $quantity<br>";

++$quantity; // Pre-increment
echo "After pre-increment: $quantity<br>";

--$quantity; // Pre-decrement
echo "After pre-decrement: $quantity<br>";
?>

