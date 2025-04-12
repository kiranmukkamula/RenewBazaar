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
    <!-- <div id="header-container"></div> -->
    <?php include 'header.php'; ?>
    <main class="container mx-auto py-12">
        <div class="bg-white rounded-lg shadow-2xl p-8 max-w-lg mx-auto border-t-4 border-blue-500">
            <!-- Login Form (Shown by default if user already has an account) -->
            <div id="login-form">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 text-center">Welcome Back!</h2>
                <p class="text-gray-600 mb-6 text-center">Login to continue exploring the best deals.</p>
                <form action="http://localhost/cse220/login1.php" method="post">
                    <div class="mb-4">
                        <label for="login-email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="login-email" name="email" placeholder="you@example.com" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                    </div>
                    <div class="mb-6">
                        <label for="login-password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="login-password" name="password" placeholder="********" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                    </div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-md transition duration-300 shadow-md hover:shadow-lg">Login</button>
                </form>
                <p class="mt-4 text-center text-gray-600">
                    Don’t have an account? 
                    <button id="show-signup" class="text-green-600 hover:underline font-medium focus:outline-none">Sign Up</button>
                </p>
            </div>
            <!-- Signup Form (Hidden by default – shown when user clicks Sign Up) -->
            <div id="signup-form" class="hidden">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 text-center">Join Us!</h2>
                <p class="text-gray-600 mb-6 text-center">Sign up and start your shopping adventure.</p>
                <form id="signup-form" action="http://localhost/cse220/signup1.php" method="post">
                    <div class="mb-4">
                        <label for="signup-name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" id="signup-name" name="name" placeholder="Your Name" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 transition">
                    </div>
            
                    <div class="relative mb-4">
                        <label for="signup-email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <div class="mt-1 relative">
                            <input type="email" id="signup-email" name="email" placeholder="you@example.com" required 
                                   class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 transition pr-24">       
                        
                        </div>
                        <p id="otp-message" class="text-sm text-gray-600"></p>
                    </div>
                    <button type="submit" name="signup" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded-md transition duration-300 shadow-md hover:shadow-lg">
                       Send OTP
                    </button>
                    </form>
                
                <!-- <script>
                document.getElementById("send-otp-btn").addEventListener("click", function() {
                    var email = document.getElementById("signup-email").value;
                    
                    if (email === "") {
                        alert("Please enter an email address.");
                        return;
                    }
                
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "http://localhost/cse220/send_otp.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            document.getElementById("otp-message").innerText = xhr.responseText;
                        }
                    };
                
                    xhr.send("email=" + encodeURIComponent(email));
                });
                </script> -->
                
                
                <p class="mt-4 text-center text-gray-600">
                    Already have an account? 
                    <button id="show-login" class="text-blue-600 hover:underline font-medium focus:outline-none">Login</button>
                </p>
            </div>           
        </div>
    </main>
    <!-- <div id="footer-container"></div> -->
    <?php include 'footer.php'; ?>
    
    <script src="../assets/js/layout.js"></script>
    <script>
        // Toggle between Login and Signup forms with a smooth transition
        document.getElementById('show-signup').addEventListener('click', function() {
            document.getElementById('login-form').classList.add('hidden');
            document.getElementById('signup-form').classList.remove('hidden');
        });

        document.getElementById('show-login').addEventListener('click', function() {
            document.getElementById('signup-form').classList.add('hidden');
            document.getElementById('login-form').classList.remove('hidden');
        });
    </script>
</body>
</html>
