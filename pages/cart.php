<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart - ReNew Bazaar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  
  <!-- <div id="header-container"></div> -->
  <?php include 'header.php'; ?>
  <main class="container mx-auto py-12">
    <div class="bg-white max-w-3xl mx-auto shadow-xl rounded-lg p-8">
      <h1 class="text-4xl font-bold text-gray-800 mb-6">Your Shopping Cart</h1>
      <p>Cart items added from shop.html will be rendered below:</p>
      <div id="cart-items"></div>
      <div class="mt-8 flex justify-between">
        <a href="shop.php" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-full transition duration-300">
          Continue Shopping
        </a>
        <button id="checkout-button" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-full transition duration-300">
          Checkout
        </button>
      </div>
    </div>
  </main>
  
  <!-- <div id="footer-container"></div> -->
 <?php include 'footer.php'; ?>

  <script>
    // When products are added via shop.html, their details are saved in localStorage under "cartItems".
    // This script reads those items and renders them in the cart.
    
    document.addEventListener('DOMContentLoaded', function() {
      const cartItemsContainer = document.getElementById('cart-items');
      
      // Retrieve cart items; if nothing is stored, default to an empty array.
      const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
      
      if (cartItems.length === 0) {
        cartItemsContainer.innerHTML = '<p class="text-gray-500 text-center">Your cart is empty.</p>';
      } else {
        cartItems.forEach(item => {
          const itemDiv = document.createElement('div');
          itemDiv.className = 'flex flex-col md:flex-row items-center border-b pb-4 mb-4';
          itemDiv.innerHTML = `
            <img src="${item.image}" alt="${item.name}" class="w-20 h-20 object-cover rounded mr-4">
            <div class="flex-1">
              <h2 class="text-xl font-semibold">${item.name}</h2>
              ${item.description ? `<p class="text-gray-600">${item.description}</p>` : ''}
            </div>
            <div class="text-lg font-bold text-indigo-600">
              ${item.price}
            </div>
          `;
          cartItemsContainer.appendChild(itemDiv);
        });
      }
    });
  </script>
  
  <script src="..assets/js/cart.js"></script>
  <script src="..assets/js/layout.js"></script>

</body>
</html>
