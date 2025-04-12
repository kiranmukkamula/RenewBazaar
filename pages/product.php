<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Details - ReNew Bazaar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
  
  <!-- <div id="header-container"></div> -->
  <?php include 'header.php'; ?>
  <main class="container mx-auto px-4 py-12">
    <div class="bg-white shadow-2xl rounded-xl overflow-hidden">
      <div class="md:grid md:grid-cols-2 bg-white">
        <!-- Product Image Section -->
        <div class="bg-gray-200 flex items-center justify-center h-96 overflow-hidden bg-white border-20">
          <img id="productImage" src="/assets/images/h1.webp" alt="Sample Product" class="border-14 object-contain h-full">
        </div>
        <!-- Product Details Section -->
        <div class="p-8 space-y-6">
          <h1 id="productName" class="text-3xl md:text-4xl font-bold text-gray-900">Sample Product Name</h1>
          <p id="productDescription" class="text-gray-700 leading-relaxed">
            This is a comprehensive description of the product. It includes details about the features, materials, dimensions, and any other relevant information that a customer might need to make an informed decision.
          </p>
          <div>
            <span id="productPrice" class="text-2xl font-semibold text-green-600">Price: ₹12,999</span>
          </div>

          <div class="grid grid-cols-2 gap-4">
            <p id="productCategory" class="text-gray-600 font-medium">Category: Electronics</p>
            <p id="productAvailability" class="text-gray-600 font-medium">Availability: In Stock</p>
          </div>
          <p id="productSKU" class="text-gray-500">SKU: ABC12345</p>
<div class="flex flex-wrap gap-4">
    <button type="button" onclick="fun()" class="bg-green-600 hover:bg-green-700 text-white font-bold px-6 py-3 rounded-md transition-colors">
        Buy Now
    </button>
    <a href="shop.php" class="text-green-600 hover:underline font-semibold">
        Back to Shop
    </a>
</div>
        </div>
      </div>
    </div>
  </main>
  
  <?php include 'footer.php'; ?>

  <script src="../assets/js/layout.js"></script>
  
  <script>

    // Retrieve product details from URL parameters
    const params = new URLSearchParams(window.location.search);
    const productName = params.get('name') || 'Sample Product Name';
    const productDescription = params.get('description') || 'No description available.';
    const productPrice = params.get('price') || '₹0';
    const productCategory = params.get('category') || 'Unknown';
    const productAvailability = params.get('availability') || 'Out of Stock';
    const productSKU = params.get('sku') || 'N/A';
    const productImage = params.get('image') || 'https://via.placeholder.com/600x400';
    
    // Set the product details in the HTML elements
    document.getElementById('productName').textContent = productName;
    document.getElementById('productDescription').textContent = productDescription;
    document.getElementById('productPrice').textContent = 'Price: ' + productPrice;
    document.getElementById('productCategory').textContent = 'Category: ' + productCategory;
    document.getElementById('productAvailability').textContent = 'Availability: ' + productAvailability;
    document.getElementById('productSKU').textContent = 'SKU: ' + productSKU;
    document.getElementById('productImage').src = productImage;

    function fun() {
        // Get values directly from the displayed elements
        var productName = document.getElementById('productName').textContent;
        var productPrice = document.getElementById('productPrice').textContent.replace('Price: ', '');
        
        // Create a form and submit it
        var form = document.createElement('form');
        form.method = 'POST';
        form.action = window.location.href; // Use current URL

        // Add hidden fields
        var nameInput = document.createElement('input');
        nameInput.type = 'hidden';
        nameInput.name = 'products';
        nameInput.value = productName;
        form.appendChild(nameInput);

        var priceInput = document.createElement('input');
        priceInput.type = 'hidden';
        priceInput.name = 'totalprice';
        priceInput.value = productPrice;
        form.appendChild(priceInput);

        // Add to document and submit
        document.body.appendChild(form);
        form.submit();
    }
   
  

</script>
<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Store in session
    $_SESSION['products'] = $_POST['products'];
    $_SESSION['totalprice'] = str_replace(['₹', ','], '', $_POST['totalprice']); // Clean the price value
    
    // JavaScript redirect
    echo "<script>window.location.href = 'checkouthtml.php';</script>";
    exit();
  }
?>

</body>
</html>
