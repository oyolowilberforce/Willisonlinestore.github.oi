<!-- home.php -->
<?php
// Add any specific logic or data for the home page here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping Store</title>
    <link rel="stylesheet" href="style.css">
    <style>
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

.banner {
    background-color: #f4f4f4;
    padding: 20px;
    text-align: center;
}

.banner h2 {
    color: #333;
    margin-bottom: 10px;
}

.featured-products {
    margin: 20px 0;
}

.featured-products h3 {
    color: #333;
}

.featured-products ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.featured-products li {
    text-align: center;
    margin: 10px;
}

/* .featured-products img {
    max-width: 100%;
    height: auto;
    border: 1px solid #ddd;
    border-radius: 4px;
} */

.featured-products p {
    color: #333;
    font-weight: bold;
}

.featured-products span {
    color: #4caf50;
    font-weight: bold;
}

.featured-products button {
    background-color: #4caf50;
    color: #fff;
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.featured-products button:hover {
    background-color: #45a049;
}

.special-offers {
    margin: 20px 0;
}

.special-offers h3 {
    color: #333;
}

.special-offers ul {
    list-style: none;
    padding: 0;
}

.special-offers li {
    color: #4caf50;
}

.product-categories {
    margin: 20px 0;
}

.product-categories h3 {
    color: #333;
}

.product-categories ul {
    list-style: none;
    padding: 0;
}

.product-categories li {
    margin-bottom: 5px;
}

.product-categories a {
    color: #4caf50;
    text-decoration: none;
    font-weight: bold;
}

.product-categories a:hover {
    text-decoration: underline;
}

.announcements {
    margin: 20px 0;
}

.announcements h3 {
    color: #333;
}

.announcements p {
    color: #555;
}
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="banner">
        <h2>Welcome to Our Online Shopping Store!</h2>
        <p>Discover a world of amazing products and unbeatable deals.</p>
    </div>

    <div class="container mt-5">
        <div class="featured-products">
            <h3>Featured Products</h3>
            <ul class="list-unstyled d-flex justify-content-around flex-wrap">
                <li class="card p-3 mb-3 shadow">
                    <img src="images\airjordan2.webp" class="img-fluid" alt="Product 1">
                    <p>Product A</p>
                    <span>$19.99</span>
                    <button class="btn btn-success">Add to Cart</button>
                </li>
                <li class="card p-3 mb-3 shadow">
                    <img src="images\Airforce1 white.jpg" class="img-fluid" alt="Product 2">
                    <p>Product B</p>
                    <span>$24.99</span>
                    <button class="btn btn-success">Add to Cart</button>
                </li>
                <li class="card p-3 mb-3 shadow">
                    <img src="images\9689_07422359463156864.jpg.webp" class="img-fluid" alt="Product 3">
                    <p>Product C</p>
                    <span>$24.99</span>
                    <button class="btn btn-success">Add to Cart</button>
                </li>
                <!-- Add more featured products as needed -->
            </ul>
        </div>
    </div>


    <div class="special-offers">
        <h3>Special Offers</h3>
        <ul>
            <li>Free Shipping on Orders Over $50</li>
            <li>Buy One, Get One 50% Off - Limited Time!</li>
            <!-- Add more special offers as needed -->
        </ul>
    </div>

    <div class="product-categories">
        <h3>Explore Our Categories</h3>
        <ul>
            <li><a href="products.php?category=electronics">Electronics</a></li>
            <li><a href="products.php?category=clothing">Clothing</a></li>
            <li><a href="products.php?category=home">Home & Kitchen</a></li>
            <!-- Add more product categories as needed -->
        </ul>
    </div>

    <div class="announcements">
        <h3>Announcements</h3>
        <p>Stay tuned for upcoming sales events and new product releases.</p>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>

