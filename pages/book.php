<?php
session_start();

// Database connection (adjust credentials as needed)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Array of owner names to randomly assign
$ownerNames = [
    "Kiran Mukkamula",
    "Amit Sharma",
    "Priya Patel",
    "Rahul Gupta",
    "Neha Singh",
    "Vikram Joshi",
    "Ananya Reddy",
    "Suresh Kumar",
    "Meera Iyer",
    "Arjun Malhotra"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Details - ReNew Bazaar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- For beautiful alerts -->
</head>
<body class="bg-gray-50">
  
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
            This is a comprehensive description of the product.
          </p>
          <div>
            <span id="productPrice" class="text-2xl font-semibold text-green-600">Price: ₹12,999</span>
          </div>

          <div class="grid grid-cols-2 gap-4">
            <p id="productCategory" class="text-gray-600 font-medium">Category: Electronics</p>
            <p id="productAvailability" class="text-gray-600 font-medium">Availability: In Stock</p>
          </div>
          <p id="productSKU" class="text-gray-500">SKU: ABC12345</p>
          <div class="text-gray-900 font-medium flex flex-wrap gap-4">
            <div>
              <h2>Owner Details:</h2>
              <h3>Name: Kiran Mukkamula</h3>
              <h3>Phone: 8886454XXX</h3>
            </div>
            <div class="mt-4">
  <button 
    type="button" 
    onclick="bookNow()" 
    class="bg-green-600 hover:bg-green-700 text-white text-base font-medium px-5 py-3 rounded transition duration-200">
    Book Now
  </button>
</div>
          </div>
        </div>
      </div>
    </div>
  </main>
  
  <?php include 'footer.php'; ?>

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

    function bookNow() {
      // Get values directly from the displayed elements
      var productName = document.getElementById('productName').textContent;
      var productPrice = document.getElementById('productPrice').textContent.replace('Price: ', '');
      
      // Create form data
      var formData = new FormData();
      formData.append('products', productName);
      formData.append('totalprice', productPrice);
      
      // Send data via fetch API
      fetch(window.location.href, {
        method: 'POST',
        body: formData
      })
      .then(response => {
        if (response.ok) {
          // Show success message
          Swal.fire({
            title: 'Success!',
            text: 'You have successfully booked ' + productName + ' at price of ' + productPrice,
            icon: 'success',
            confirmButtonText: 'OK'
          }).then(() => {
            window.location.href = 'shop.php';
          });
        } else {
          throw new Error('Network response was not ok');
        }
      })
      .catch(error => {
        Swal.fire({
          title: 'Error!',
          text: 'There was a problem with your booking. Please try again.',
          icon: 'error',
          confirmButtonText: 'OK'
        });
      });
    }
  </script>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Store in session
    $_SESSION['products'] = $_POST['products'];
    $_SESSION['totalprice'] = str_replace(['₹', ','], '', $_POST['totalprice']); // Clean the price value
    
    // Randomly select an owner name
    $randomOwner = $ownerNames[array_rand($ownerNames)];
    
    // Insert booking into database
    $stmt = $conn->prepare("INSERT INTO Housebooking (name, email, owner_name, price, booking_status) VALUES (?, ?, ?, ?, 'booked')");
    $stmt->bind_param("ssss", $_SESSION['name'], $_SESSION['email'], $randomOwner, $_SESSION['totalprice']);
    
    if ($stmt->execute()) {
        // Send email confirmation
        if (isset($_SESSION['email'])) {
            $to = $_SESSION['email'];
            $subject = 'Booking Confirmation';
            $message = 'You have successfully booked ' . $_POST['products'] . ' at price of ₹' . $_POST['totalprice'] . 
                       "\n\nOwner: " . $randomOwner . 
                       "\n\nThank you for using ReNew Bazaar!";
            $headers = 'From: noreply@renewbazaar.com' . "\r\n" .
                       'Reply-To: noreply@renewbazaar.com' . "\r\n" .
                       'X-Mailer: PHP/' . phpversion();
            
            mail($to, $subject, $message, $headers);
        }
    } else {
        error_log("Error inserting booking: " . $stmt->error);
    }
    
    $stmt->close();
    $conn->close();
    
    // Don't redirect here - let JavaScript handle it after showing the success message
    exit();
}
?>

</body>
</html>
