<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
$servername = "localhost";
$username = "root";  // Change this based on your database credentials
$password = "";      // Your database password
$dbname = "user_database";  // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Connection failed: " . $conn->connect_error]));
}

// Get JSON data from request
$data = json_decode(file_get_contents("php://input"), true);

if(!isset($data['products']) || !isset($data['totalprice'])) {
    echo json_encode(["success" => false, "message" => "Invalid data"]);
    exit();
}

// Extract order data
$products = $conn->real_escape_string($data['products']); // Comma-separated product names
$totalprice = $data['totalprice'];

// Insert order into database
$sql = "INSERT INTO orders (products, total_price) VALUES ('$products', '$totalprice')";

if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION["totalprice"]=$totalPrice;
    echo json_encode(["success" => true, "message" => "Order placed successfully"]);
} else {
    echo json_encode(["success" => false, "message" => "Error placing order"]);
}

$conn->close();
?>