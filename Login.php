<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Database connection details
    $hostname = "localhost";
    $username_db = "root";
    $password_db = "";
    $database = "database1";

    // Connect to the database
    $conn = new mysqli($hostname, $username_db, $password_db, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to retrieve user data based on the provided username
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, verify the password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, perform login actions (e.g., set session variables)
            session_start();
            $_SESSION['username'] = $username;
            // Redirect to a dashboard or home page
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Incorrect password</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>User not found</div>";
    }

    // Close the database connection
    $conn->close();
}
?>
