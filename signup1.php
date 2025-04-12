<?php
session_start();

$conn = new mysqli("localhost", "root", "", "user_database");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $otp = rand(100000, 999999); // Generate a 6-digit OTP

    $_SESSION['otp'] = $otp;
    $_SESSION['email'] = $email;
    $_SESSION['name']=$name;

    // Insert name and email first, password will be updated later
    $sql = "INSERT INTO signup (name, email) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error preparing SQL statement: " . $conn->error);
    }

    $stmt->bind_param("ss", $name, $email);

    if ($stmt->execute()) {
        // Send OTP Email
        $subject = "OTP From ReNewBazaar";
        $message = "Hi $name. Your OTP is: $otp. It is valid for 5 minutes.";
        $headers = "From: your_email@gmail.com\r\n" .
                   "Reply-To: your_email@gmail.com\r\n" .
                   "X-Mailer: PHP/" . phpversion();
        mail($email, $subject, $message, $headers);
        if (mail($email, $subject, $message, $headers)) {
            header("Location: pages/otphtml.php");
            exit();
        }
        else echo "error sending otp";
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    $stmt->close();
}