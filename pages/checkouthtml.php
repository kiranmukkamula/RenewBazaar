<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Secure Checkout - ReNew Bazaar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
  
  <!-- <div id="header-container"></div> -->
  <?php include 'header.php'; ?>
  <main class="container mx-auto py-8">
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-8" id="checkout-container">
      <h1 class="text-3xl font-bold text-gray-800 mb-4">Secure Checkout</h1>
      <p class="text-gray-600 mb-6">Please fill in your billing and shipping information to complete your purchase.</p>
      <form action="http://localhost/cse220/update_name.php" method="POST" class="space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label for="first-name" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" id="first-name" name="name" placeholder="Rahul" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>
        
        </div>
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
          <input type="email" id="email" name="email" placeholder="rahul@example.com" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div>
          <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
          <input type="tel" id="phone" name="phone" placeholder="+91 9876543210" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div>
          <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
          <input type="text" id="address" name="address" placeholder="Street address, apartment, etc." required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div>
            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
            <input type="text" id="city" name="city" placeholder="City" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>
          <div>
            <label for="state" class="block text-sm font-medium text-gray-700">State</label>
            <input type="text" id="state" name="state" placeholder="State" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>
          <div>
            <label for="postal" class="block text-sm font-medium text-gray-700">PIN Code</label>
            <input type="text" id="postal" name="postal" placeholder="e.g., 110001" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
          </div>
        </div>
        <div>
          <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
          <select id="country" name="country" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option>India</option>
          </select>
        </div>
        <div class="pt-4">
          <button type="submit" name="but" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-md transition duration-300">
            Complete Purchase
          </button>
        </div>
      </form>
    </div>
  </main>
  
  <!-- <div id="footer-container"></div> -->
 <?php include 'footer.php'; ?>

  <!-- Success Animation Overlay -->
  <!-- <div id="success-message" class="fixed inset-0 bg-green-100 flex items-center justify-center z-50 hidden">
    <div class="text-center">
      <svg class="h-16 w-16 text-green-600 mx-auto animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
      </svg>
      <h2 class="text-2xl font-bold text-green-600 mt-4">Order Successful!</h2>
    </div>
  </div>
   -->
  <script src="../assets/js/layout.js"></script>
  <script>
//     document.getElementById('checkout-form').addEventListener('submit', function(e) {
//     e.preventDefault();

//     var formData = new FormData(this);

//     fetch('/cse220/update_name.php', {
//         method: 'POST',
//         body: formData
//     })
//     .then(response => response.json())
//     .then(data => {
//         if (data.status === "success") {
//             document.getElementById('checkout-container').classList.add('hidden');
//             document.getElementById('success-message').classList.remove('hidden');
//             setTimeout(() => window.location.href = "index.html", 3000);
//         } else {
//             alert(data.message);
//         }
//     })
//     .catch(error => console.error('Error:', error));
// });



    // document.getElementById('checkout-form').addEventListener('submit', function(e) {
    //   e.preventDefault();
    //   // Optionally validate form inputs here
      
    //   // Hide the checkout form container
    //   document.getElementById('checkout-container').classList.add('hidden');
    //   // Show success animation overlay
    //   var successOverlay = document.getElementById('success-message');
    //   successOverlay.classList.remove('hidden');
      
    //   // After 3 seconds, redirect to the homepage
    //   setTimeout(function() {
    //     window.location.href = "index.html";
    //   }, 3000);
    // });
  </script>
</body>
</html>