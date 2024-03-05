<?php
// products.php
// Assuming you have a database connection logic here

// Check if a category is specified in the URL, default to 'all' if not set
$category = isset($_GET['category']) ? $_GET['category'] : 'all';

// Retrieve products based on the selected category or all products
// Note: You should use prepared statements and sanitize user input to prevent SQL injection.
if ($category == 'all') {
    // Retrieve all products
    $sql = "SELECT * FROM products";
} else {
    // Retrieve products based on the specified category
    $sql = "SELECT * FROM products WHERE category = '$category'";
}

// Execute the query and fetch products
// $result = mysqli_query($your_database_connection, $sql); // Uncomment and replace with your actual database connection
// $products = mysqli_fetch_all($result, MYSQLI_ASSOC); // Uncomment and replace with your actual database connection
// For the sake of this example, let's assume you have an array of products:
$products = [
    ['id' => 1, 'name' => 'Product A', 'price' => 19.99],
    ['id' => 2, 'name' => 'Product B', 'price' => 24.99],
    // Add more products as needed
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | <?php echo ucfirst($category); ?></title>
    <link rel="stylesheet" href="style.css">
    <style>
/* style.css */

body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.product-list {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.product-list h2 {
    color: #333;
    text-align: center;
}

.product-list ul {
    list-style: none;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.product-list li {
    text-align: center;
    margin: 10px;
    padding: 10px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.product-list img {
    max-width: 100%;
    height: auto;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-bottom: 10px;
}

.product-list p {
    color: #333;
    font-weight: bold;
}

.product-list span {
    color: #4caf50;
    font-weight: bold;
}

.product-list button {
    background-color: #4caf50;
    color: #fff;
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.product-list button:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>

    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="products.php">Products</a>
        <a href="orders.php">Orders</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="products-wrapper">
        <h1>Products - <?php echo ucfirst($category); ?></h1>

        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product">
                    <h3><?php echo $product['name']; ?></h3>
                    <p>$<?php echo $product['price']; ?></p>
                    <button>Add to Cart</button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
</body>
</html>
