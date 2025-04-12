<?php
session_start();
$servername = "localhost";
$username = "root";  // Change based on your database credentials
$password = "";      // Your database password
$dbname = "user_database";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
    $customer_name = $conn->real_escape_string($_POST["name"]); // Get customer name from form
    $products = isset($_SESSION["products"]) ? $conn->real_escape_string($_SESSION["products"]) : ''; // Get products from session
    $total_price = isset($_SESSION["totalprice"]) ? $conn->real_escape_string($_SESSION["totalprice"]) : 0; // Get total price from session
    
    // Store customer name in session for later use
    $_SESSION["customername"] = $customer_name;

    // Insert all details into orders table
    $sql = "INSERT INTO orders (customer_name, products, total_price) VALUES (?, ?, ?)";
    
    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssd", $customer_name, $products, $total_price);
    
    if ($stmt->execute()) {
        header("Location: /cse220/pages/payment.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}

$conn->close();
?>
