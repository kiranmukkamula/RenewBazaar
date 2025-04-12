<?php
session_start();
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "user_database"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure the session contains an email
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Delete only the row where the email matches
    $deleteQuery = "DELETE FROM signup WHERE email = ?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        // Destroy session after deleting user data
        session_destroy();
        echo '
        <div class="logout-message">Logged out successfully.</div>
        <script>
            setTimeout(function() {
                window.location.href = "/cse220/pages/index.php";
            }, 3000);
        </script>
        <style>
            .logout-message {
                background-color: #4CAF50;
                color: white;
                padding: 15px;
                text-align: center;
                font-size: 18px;
                border-radius: 5px;
                width: 50%;
                margin: 50px auto;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            }
        </style>';
    } else {
        echo "Error deleting user.";
    }

    $stmt->close();
} else {
    echo '<div class="logout1">No User Logged in.</div>
    <script>
            setTimeout(function() {
                window.location.href = "/cse220/pages/index.php";
            }, 3000);
        </script>
        <style>
            .logout-message {
                background-color:rgb(226, 39, 18);
                color: white;
                padding: 15px;
                text-align: center;
                font-size: 18px;
                border-radius: 5px;
                width: 50%;
                margin: 50px auto;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            }
        </style>';
}

$conn->close();
?>
