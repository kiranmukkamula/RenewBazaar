<?php
session_start();
$total_price = isset($_SESSION["totalprice"]) ? $_SESSION["totalprice"] : "0"; // Default to 0 if not set
$upi_id = "yourupiid@upi"; // Replace with your actual UPI ID
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
<body class="min-h-screen bg-gray-50 flex justify-center items-center">

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

</body>
</html>
