<?php
session_start();
$message = "";
$alert_class = "";
$redirect_script = "";

$conn = new mysqli("localhost", "root", "", "user_database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_otp = $_POST['otp'];
    $generated_otp = isset($_SESSION['otp']) ? $_SESSION['otp'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : ""; // FIXED: Retrieve email from session

    if ($entered_otp == $generated_otp) {
        $message = "✅ OTP Verified! Signed Up Successfully.";
        $alert_class = "bg-green-100 border border-green-400 text-green-700 p-3 text-center rounded-lg";

        // FIXED: Updating password in the database
        if (!empty($email) && !empty($password)) {
            $sql = "UPDATE signup SET password = ? WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $password, $email);
            $stmt->execute(); // FIXED: Execute statement
            $stmt->close(); // FIXED: Close statement
        } else {
            $message = "❌ Error: Missing Email or Password.";
            $alert_class = "bg-red-100 border border-red-400 text-red-700 p-3 text-center rounded-lg";
        }

        unset($_SESSION['otp']); // Clear OTP after verification
        unset($_SESSION['email']); // FIXED: Clear email session

        // FIXED: Redirect script
        $redirect_script = "<script>setTimeout(function() { window.location.href = 'pages/login.php'; }, 3000);</script>";
    } else {
        $message = "❌ Invalid OTP! Please try again.";
        $alert_class = "bg-red-100 border border-red-400 text-red-700 p-3 text-center rounded-lg";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center h-screen bg-gray-100">
    <div class="w-full max-w-sm p-6 bg-white shadow-md rounded-lg">
        <?php if (!empty($message)): ?>
            <div class="<?= $alert_class; ?> mb-4">
                <?= $message; ?>
            </div>
            <?php if ($entered_otp == $generated_otp): ?>
                <button onclick="redirectToLogin()" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-md transition duration-300 shadow-md hover:shadow-lg">
                    Go to Login Page
                </button>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <script>
        function redirectToLogin() {
            window.location.href = "pages/login.php";
        }
    </script>

    <?= $redirect_script; ?> <!-- Injects automatic redirection if OTP is valid -->
</body>
</html>
