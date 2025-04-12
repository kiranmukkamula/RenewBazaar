<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php include 'header.php'; ?>
<?php
session_start();
$total_price = isset($_SESSION["totalprice"]) ? $_SESSION["totalprice"] : "0"; // Default to 0 if not set
$upi_id = "pavankal@upi"; // Replace with your actual UPI ID
$payment_url = "upi://pay?pa=$upi_id&pn=YourName&am=$total_price&cu=INR";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<div class="min-h-screen bg-gray-50 flex justify-center items-center">

    <div class="bg-white shadow-2xl rounded-lg p-8 max-w-md w-full">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Payment Details</h2>

        <div class="font-semibold text-gray-900 text-xl text-center">
            Total Price: ₹<?php echo $total_price; ?>
        </div>

        <div class="text-2xl p-5 text-gray-900 font-semibold text-center">Pay Via:</div>

        <div class="flex justify-center">
            <div id="qrcode"></div>
        </div>

        <div class="mt-6 text-center">
            <a href="<?php echo $payment_url; ?>" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                Pay Now
            </a>
        </div>
    </div>

    <script>
        new QRCode(document.getElementById("qrcode"), "<?php echo $payment_url; ?>");
    </script>

</div>
</html>

<?php include 'footer.php'; ?>

<script>
  // Basic payment form submission handler
  document.getElementById('payment-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const submitButton = this.querySelector('button[type="submit"]');
    submitButton.disabled = true;
    submitButton.textContent = 'Processing...';
    
    // Simulate payment processing delay
    setTimeout(() => {
      // Show success message
      document.getElementById('payment-success').classList.remove('hidden');
      submitButton.textContent = 'Make Payment';
      submitButton.disabled = false;
      // Optionally, reset the form fields
      this.reset();
    }, 2000);
  });
</script>



</body>
</html>
