<?php
// Define constants
define("TAX_RATE", 0.08); // 8% tax rate
define("DISCOUNT_RATE", 0.10); // 10% discount rate

// Product details
$productName = "Smartphone";
$price = 699.99;
$quantity = 2;

// Calculations
$subtotal = $price * $quantity;
$discount = $subtotal * DISCOUNT_RATE;
$totalAfterDiscount = $subtotal - $discount;
$tax = $totalAfterDiscount * TAX_RATE;
$totalPrice = $totalAfterDiscount + $tax;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
</head>
<body>
    <h1>Product Details</h1>
    <p><strong>Product Name:</strong> <?php echo $productName; ?></p>
    <p><strong>Price per Unit:</strong> €<?php echo number_format($price, 2); ?></p>
    <p><strong>Quantity:</strong> <?php echo $quantity; ?></p>
    <p><strong>Subtotal:</strong> €<?php echo number_format($subtotal, 2); ?></p>
    <p><strong>Discount (<?php echo DISCOUNT_RATE * 100; ?>%):</strong> -€<?php echo number_format($discount, 2); ?></p>
    <p><strong>Total After Discount:</strong> €<?php echo number_format($totalAfterDiscount, 2); ?></p>
    <p><strong>Tax (<?php echo TAX_RATE * 100; ?>%):</strong> +€<?php echo number_format($tax, 2); ?></p>
    <h3><strong>Total Price:</strong> €<?php echo number_format($totalPrice, 2); ?></h3>
</body>
</html>
