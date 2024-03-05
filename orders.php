<!-- order.php -->
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: Login.php");
    exit();
}

// Sample order details, you may fetch this from a database in a real-world scenario
$orderDetails = [
    'order_id' => 123,
    'total_price' => 59.97,
    'products' => [
        ['id' => 1, 'name' => 'Product A', 'price' => 19.99],
        ['id' => 2, 'name' => 'Product B', 'price' => 24.99],
        ['id' => 3, 'name' => 'Product C', 'price' => 14.99],
    ],
];

// Check if the form for shipping information is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_order'])) {
    // Process the submitted shipping information
    $shippingName = $_POST['shipping_name'];
    $shippingAddress = $_POST['shipping_address'];

    // You may perform further actions like updating the database, sending confirmation emails, etc.

    // Redirect to a thank you page or display a confirmation message
    header("Location: thank_you.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* style.css */

body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.order-details {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.order-details h2 {
    color: #333;
    text-align: center;
}

.order-details p {
    color: #333;
}

.order-details ul {
    list-style: none;
    padding: 0;
}

.order-details li {
    color: #333;
    margin-bottom: 5px;
}

.shipping-form {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.shipping-form h2 {
    color: #333;
    text-align: center;
}

.shipping-form form {
    display: flex;
    flex-direction: column;
}

.shipping-form label {
    margin-top: 10px;
    color: #333;
}

.shipping-form input,
.shipping-form textarea {
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.shipping-form input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.shipping-form input[type="submit"]:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>

    <div class="order-details">
        <h2>Order Details</h2>
        <p>Order ID: <?php echo $orderDetails['order_id']; ?></p>
        <p>Total Price: $<?php echo $orderDetails['total_price']; ?></p>

        <h3>Products</h3>
        <ul>
            <?php foreach ($orderDetails['products'] as $product): ?>
                <li><?php echo $product['name']; ?> - $<?php echo $product['price']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="shipping-form">
        <h2>Shipping Information</h2>
        <form method="post" action="">
            <label for="shipping_name">Name:</label>
            <input type="text" id="shipping_name" name="shipping_name" required>

            <label for="shipping_address">Address:</label>
            <textarea id="shipping_address" name="shipping_address" required></textarea>

            <input type="submit" name="submit_order" value="Submit Order">
        </form>
    </div>

</body>
</html>
