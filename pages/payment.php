<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php include 'header.php'; ?>
<?php
session_start();
$total_price = isset($_SESSION["totalprice"]) ? $_SESSION["totalprice"] : "0"; // Default to 0 if not set
$upi_id = "kiranmukkamula@upi"; // Replace with your actual UPI ID
$payment_url = "upi://pay?pa=$upi_id&pn=YourName&am=$total_price&cu=INR";
?>
<div class="min-h-screen bg-gray-50 flex justify-center items-center">

    <div class="bg-white shadow-2xl rounded-lg p-8 max-w-md w-full">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Payment Details</h2>

        <div class="font-semibold text-gray-900 text-xl text-center">
            Total Price: ₹<?php echo $total_price; ?>
        </div>

        <div class="text-xl p-5 text-gray-900 font-semibold text-center">Pay Via:</div>

        <div class="flex justify-center mb-6">
            <div class="w-48 h-48" id="qrcode"></div>
        </div>

        <div class="mt-6 text-center">
            <button onclick="showSuccessPopup()" class="w-full bg-gradient-to-r from-indigo-500 to-purple-500 text-white font-medium px-6 py-3 rounded-lg hover:from-indigo-600 hover:to-purple-600 transform hover:-translate-y-1 transition duration-300 shadow-lg">
                Pay Now
                <i class="fas fa-paper-plane ml-2"></i>
            </button>
        </div>
    </div>
</div>

<!-- Success Popup -->
<div id="successBox" class="fixed inset-0 flex items-center justify-center bg-black/40 z-50 hidden">
  <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-2xl max-w-sm w-full text-center animate-fade-in">
    <div class="flex justify-center mb-6">
      <div class=" flex items-center justify-center">
        <img src="../assets/images/time2.jpg" alt="Clock" class="w-14 h-15" />
      </div>
    </div>
    <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Payment Initiated!</h3>
    <p class="text-gray-600 dark:text-gray-300 mt-1">Complete payment in your UPI app.</p>
    <p class="text-red-600 font-bold mt-2">Redirecting in <span class="animate-pulse" id="countdown">15</span> seconds...</p>
    <button onclick="closePopup()" class="mt-6 px-4 py-2 bg-gradient-to-r from-indigo-500 to-purple-500 text-white rounded-lg hover:from-indigo-600 hover:to-purple-600 transition duration-300">
      Close Now
    </button>
  </div>
</div>


<?php include 'footer.php'; ?>

<!-- JS Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script>
    new QRCode(document.getElementById("qrcode"), "<?php echo $payment_url; ?>");

    function showSuccessPopup() {
        document.getElementById('successBox').classList.remove('hidden');
        startCountdown(); // start timer
    }

    function closePopup() {
        document.getElementById('successBox').classList.add('hidden');
        window.location.href = 'shop.php'; // redirect manually
    }

    function startCountdown() {
        let timeLeft = 15;
        const countdownEl = document.getElementById('countdown');
        
        const timer = setInterval(() => {
            timeLeft--;
            countdownEl.textContent = timeLeft;

            if (timeLeft <= 0) {
                clearInterval(timer);
                window.location.href = 'shop.php'; // auto-redirect
            }
        }, 1000);
    }
</script>

</body>
</html>
