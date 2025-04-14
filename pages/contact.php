<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - ReNew Bazaar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.95);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }
    .animate-fade-in {
        animation: fadeIn 0.3s ease-out forwards;
    }
</style>

    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900">
    
   <?php include 'header.php'; ?>
    <section class="py-16 bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">Get in Touch</h2>
                <p class="text-gray-600 dark:text-gray-400 mt-2">We'd love to hear from you. Drop us a message!</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                <div class="bg-white dark:bg-gray-700 p-8 rounded-2xl shadow-xl transform hover:scale-105 transition duration-300">
                    <form class="space-y-6">
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Your Name</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-600 dark:border-gray-500 transition duration-300" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Email Address</label>
                            <input type="email" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-600 dark:border-gray-500 transition duration-300" placeholder="john@example.com">
                        </div>
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Your Message</label>
                            <textarea class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-gray-600 dark:border-gray-500 transition duration-300" rows="4" placeholder="How can we help you?"></textarea>
                        </div>
                        <button onclick="send(event)" type="submit" class="w-full bg-gradient-to-r from-indigo-500 to-purple-500 text-white font-medium px-6 py-3 rounded-lg hover:from-indigo-600 hover:to-purple-600 transform hover:-translate-y-1 transition duration-300 shadow-lg">
    Send Message
    <i class="fas fa-paper-plane ml-2"></i>
</button>

                    </form>
                </div>
                <div class="bg-white dark:bg-gray-700 p-8 rounded-2xl shadow-xl space-y-8">
                    <div class="flex items-center space-x-6 transform hover:scale-105 transition duration-300">
                        <div class="bg-indigo-100 dark:bg-gray-600 p-4 rounded-full">
                            <i class="fas fa-map-marker-alt text-indigo-500 dark:text-indigo-400 text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Visit Us</h3>
                            <p class="text-gray-600 dark:text-gray-300">123 Market Street, Mumbai, India</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-6 transform hover:scale-105 transition duration-300">
                        <div class="bg-indigo-100 dark:bg-gray-600 p-4 rounded-full">
                            <i class="fas fa-phone text-indigo-500 dark:text-indigo-400 text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Call Us</h3>
                            <p class="text-gray-600 dark:text-gray-300">+91 1234567890</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-6 transform hover:scale-105 transition duration-300">
                        <div class="bg-indigo-100 dark:bg-gray-600 p-4 rounded-full">
                            <i class="fas fa-envelope text-indigo-500 dark:text-indigo-400 text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Email Us</h3>
                            <p class="text-gray-600 dark:text-gray-300">contact@renewbazaar1.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>
    <!-- Success Popup -->
<div id="successBox" class="fixed inset-0 flex items-center justify-center bg-black/40 z-50 hidden">
  <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-2xl max-w-sm w-full text-center animate-fade-in">
    <div class="flex justify-center mb-4">
      <div class="bg-green-100 p-4 rounded-full">
        <i class="fas fa-check text-green-600 text-3xl"></i>
      </div>
    </div>
    <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Message Sent!</h3>
    <p class="text-gray-600 dark:text-gray-300 mt-1">Successfully sent to ReNew Bazaar.</p>
    <button onclick="closePopup()" class="mt-6 px-8 py-2 bg-gradient-to-r from-indigo-500 to-purple-500 text-white rounded-lg hover:from-indigo-600 hover:to-purple-600 transition duration-300">
      Close
    </button>
  </div>
</div>

<script>
    function send(event) {
        event.preventDefault(); // Stop the form from submitting
        document.getElementById('successBox').classList.remove('hidden');
    }

    function closePopup() {
        document.getElementById('successBox').classList.add('hidden');
        window.location.href = 'shop.php';
    }
</script>



</body>
</html>
