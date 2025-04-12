<?php
session_start(); // Start session to track login

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data safely
$email = trim($_POST['email']);
$password = $_POST['password'];

// SQL query to check if email exists
$sql = "SELECT id, password FROM signup WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die("Statement preparation failed: " . mysqli_error($conn));
}

// Bind and execute
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
    // Compare entered password with stored password (no hashing)
    if ($password === $row['password']) {
        $_SESSION['user_id'] = $row['id']; // Store session
        $_SESSION['email'] = $email;

        echo "<div style='
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            width: 300px;
            margin: 100px auto;
            text-align: center;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
        '>
            ✅ Login successful! Redirecting...
        </div>";

        // Redirect after 2 seconds
        echo "<script>setTimeout(function() { window.location.href = 'pages/shop.php'; }, 2000);</script>";
    } else {
        echo "<div style='
            background-color: #FF4C4C;
            color: white;
            padding: 20px;
            width: 300px;
            margin: 100px auto;
            text-align: center;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
        '>
            ❌ Incorrect password!
        </div>";
    }
} else {
    echo "<div style='
        background-color: #FF4C4C;
        color: white;
        padding: 20px;
        width: 300px;
        margin: 100px auto;
        text-align: center;
        border-radius: 10px;
        font-size: 18px;
        font-weight: bold;
    '>
        ❌ Email does not exist!
    </div>";
}

// Close database connections
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
