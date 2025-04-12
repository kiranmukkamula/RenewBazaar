<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup - ReNew Bazaar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-300">
    <?php include 'header.php'; ?>
    <main class="container mx-auto py-12">
        <div class="bg-white rounded-lg shadow-2xl p-8 max-w-lg mx-auto border-t-4 border-blue-500">
            <!-- OTP Form (Shown by default if user already has an account) -->
            <div id="otp-form">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 text-center">Join Us!</h2>
                <p class="text-gray-600 mb-6 text-center">Sign up and start your shopping adventure.</p>
                <form action="http://localhost/cse220/otp.php" method="post">
                    <div class="mb-4">
                        <label for="login-email" class="block text-sm font-medium text-gray-700">Enter OTP</label>
                        <input type="number" id="login-email" name="otp" placeholder="XXXXXX" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 transition">
                    </div>
                    <div class="mb-6">
                        <label for="login-password" class="block text-sm font-medium text-gray-700">Create Password</label>
                        <input type="password" id="login-password" name="password" placeholder="********" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 transition">
                    </div>
                    <div class="mb-6">
                        <label for="login-password" class="block text-sm font-medium text-gray-700">Re-enter Password</label>
                        <input type="password" id="login-password" name="re-enter-password" placeholder="********" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 transition">
                    </div>
                    <button type="submit" class="w-full bg-orange-600 hover:bg-orange-700 text-white font-semibold py-2 rounded-md transition duration-300 shadow-md hover:shadow-lg">Signup</button>
                </form>
            </div>
            </div>
        
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
