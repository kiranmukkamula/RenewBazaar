<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReNew Bazaar - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Optionally include a modern Google Font for a sleek look -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-200">

    <!-- Header -->
    <?php include 'header.php'; ?>
   
<section class="relative bg-cover bg-center h-screen flex items-center" style="background-image: url('../assets/images/bg4.jpg');">
    <div class="absolute inset-0 bg-gradient-to-br from-black/50 via-black/40 to-black/20"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl p-6 sm:p-8 bg-white/10 backdrop-blur-sm rounded-lg border border-white/20">
            <!-- Main heading with better visibility -->
            <h3 class="text-2xl sm:text-3xl lg:text-5xl font-extrabold text-white mb-4 leading-tight">
                Welcome to <span class="text-yellow-400">ReNew Bazaar</span>
            </h3>
            
            <!-- Subheading with improved contrast -->
            <p class="text-lg sm:text-xl text-gray-100 mb-8 max-w-xl">
                Discover a refined marketplace for pre-loved treasures. Buy, sell, and experience excellence.
            </p>
            
            <!-- Call-to-action buttons with clear hierarchy -->
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="../pages/shop.php"
                    class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 py-3 px-8 rounded-lg transition duration-300 shadow-lg text-center">
                    Explore Collection
                </a>
                <a href="../pages/about.php"
                    class="bg-transparent hover:bg-white/20 text-white border border-white font-medium py-3 px-8 rounded-lg transition duration-300 text-center">
                    Learn More
                </a>
            </div>
            
            <!-- Trust indicators -->
            <div class="mt-8 pt-6 border-t border-white/20 flex flex-wrap gap-6 items-center">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="animate-bounce h-5 w-5 text-yellow-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    <span class="text-white text-sm">Secure Payments</span>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="animate-bounce h-5 w-5 text-yellow-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                    <span class="text-white text-sm">Quality Guaranteed</span>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="animate-bounce h-5 w-5 text-yellow-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <span class="text-white text-sm">Free Shipping Over $50</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll indicator for better UX -->
    <div class="absolute bottom-6 left-0 right-0 flex justify-center animate-bounce">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
        </svg>
    </div>
</section>

    <!-- Features Section -->
    <section class="container mx-auto px-4 py-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800">
                Exceptional Features &amp; Top Picks
            </h2>
            <p class="text-gray-600 mt-4">
                Discover innovative features and curated products that elevate your shopping experience. Enjoy
                unbeatable deals, seamless selling, secure transactions, and an exclusive selection of trending
                items!
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-6 bg-white rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
                <img alt="Illustration of a shopping cart with a discount tag"
                    class="w-full h-40 object-cover rounded-t-lg mb-4" height="400"
                    src="../assets/images/sale1.jpg"
                    width="600" />
                <h3 class="text-2xl font-semibold mb-3 text-indigo-600">
                    Unbeatable Deals
                </h3>
                <p class="text-gray-600">
                    Access exclusive offers on premium pre-owned items at competitive prices.
                </p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
                <img alt="Illustration of a person listing items online"
                    class="w-full h-40 object-cover rounded-t-lg mb-4" height="400"
                    src="../assets/images/sale2.jpg"
                    width="600" />
                <h3 class="text-2xl font-semibold mb-3 text-indigo-600">
                    Seamless Selling
                </h3>
                <p class="text-gray-600">
                    Effortlessly list your items and reach a vast audience with ease.
                </p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
                <img alt="Illustration of a secure payment system"
                    class="w-full h-40 object-cover rounded-t-lg mb-4" height="400"
                    src="../assets/images/tran.jpg"
                    width="600" />
                <h3 class="text-2xl font-semibold mb-3 text-indigo-600">
                    Secure Transactions
                </h3>
                <p class="text-gray-600">
                    Trade with confidence using our robust, secure payment system.
                </p>
            </div>
        </div>
        <div class="mt-12 text-center">
            <h3 class="text-3xl font-bold text-gray-800 mb-6">
                Top Picks
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-white rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
                    <img alt="Image of a trending electronic gadget"
                        class="w-full h-40 object-cover rounded-t-lg mb-4" height="400"
                        src="../assets/images/ele.jpg"
                        width="600" />
                    <h4 class="text-xl font-semibold mb-2 text-gray-800">
                        Electronic
                    </h4>
                    <p class="text-gray-600">
                        Stay ahead with the latest tech trends and gadgets.
                    </p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
                    <img alt="Image of a books item"
                        class="w-full h-40 object-cover rounded-t-lg mb-4" height="400"
                        src="../assets/images/bik.jpg"
                        width="600" />
                    <h4 class="text-xl font-semibold mb-2 text-gray-800">
                        Automobiles
                    </h4>
                    <p class="text-gray-600">
                        Discover a wide range of Automobiles across various genres.
                    </p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
                    <img alt="Image of a home decor item" class="w-full h-40 object-cover rounded-t-lg mb-4"
                        height="400"
                        src="../assets/images/gad.jpg"
                        width="600" />
                    <h4 class="text-xl font-semibold mb-2 text-gray-800">
                        Gadgets
                    </h4>
                    <p class="text-gray-600">
                        Enhance your living space with stylish home decor.
                    </p>
                </div>
            </div>
            <a href="shop.php" class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-10 rounded-full transition duration-300">
                See More
            </a>
        </div>
    </section>

    <!-- About Us Section -->
    <main class="container mx-auto px-6 py-12">
        <section class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">
                About Us
            </h1>
            <p class="text-lg text-gray-600">
                Welcome to Renew Bazaar, your number one source for buying and selling second-hand goods online.
            </p>
        </section>
        <section class="mb-12">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-6 md:mb-0">
                    <img alt="A diverse group of people holding second-hand items and smiling"
                        class="rounded-lg shadow-lg" height="400"
                        src="https://storage.googleapis.com/a1aa/image/H6qgWDJjXoZ5ZLPDmV0e7IuAMwb6LsYIZNEBi8oJjtc.jpg"
                        width="600" />
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h2 class="text-3xl font-bold mb-4">
                        Our Mission
                    </h2>
                    <p class="text-gray-600 mb-4">
                        At Renew Bazaar, we aim to provide a platform where people can easily buy and sell second-hand
                        goods. We believe in sustainability and the power of reusing items to reduce waste and promote a
                        circular economy.
                    </p>
                    <p class="text-gray-600">
                        Our mission is to make second-hand shopping as convenient and enjoyable as possible, while also
                        helping to reduce the environmental impact of consumerism.
                    </p>
                </div>
            </div>
        </section>
        <section class="mb-12">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 md:pr-12 mb-6 md:mb-0">
                    <h2 class="text-3xl font-bold mb-4">
                        Our Story
                    </h2>
                    <p class="text-gray-600 mb-4">
                        Renew Bazaar was founded in 2021 by a group of friends who were passionate about sustainability
                        and the environment. We started as a small local marketplace and have grown into a nationwide
                        platform, connecting buyers and sellers from all over the country.
                    </p>
                    <p class="text-gray-600">
                        We are committed to providing a safe and reliable platform for our users, and we are constantly
                        working to improve our services and expand our reach.
                    </p>
                </div>
                <div class="md:w-1/2">
                    <img alt="Founders of Renew Bazaar working together in a cozy office space"
                        class="rounded-lg shadow-lg" height="400"
                        src="https://storage.googleapis.com/a1aa/image/TfUWOsih5QYgUeSjawjpdfGYE_BqaWU0_ShyuwFKT-s.jpg"
                        width="600" />
                </div>
            </div>
        </section>
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-center mb-8">
                Meet the Team
            </h2>
<div class="flex flex-wrap justify-center gap-12">
                <div class="text-center">
                    <img alt="Portrait of John Doe, CEO of Renew Bazaar" class="rounded-full mx-auto mb-4" 
                        src="../assets/images/kiran.jpeg"
                      height="150"  width="180" />
                    <h3 class="text-xl font-bold">
                        Kiran Mukkamula
                    </h3>
                   
                </div>
                <div class="text-center">
                    <img alt="Portrait of Jane Smith, COO of Renew Bazaar" class="rounded-full mx-auto mb-4"
                        
                        src="../assets/images/gaurav.jpeg"
                       height="250"  width="220" />
                    <h3 class="text-xl font-bold">
                        Gaurav Yadav
                    </h3>
                    
                </div>
                <div class="text-center">
                    <img alt="Portrait of Emily Johnson, CTO of Renew Bazaar" class="rounded-full mx-auto mb-4"
                       
                        src="../assets/images/ashok.jpeg"
                       height="150"  width="180" />
                    <h3 class="text-xl font-bold">
                        Ashok
                    </h3>
                    
                </div>
                <div class="text-center">
                    <img alt="Portrait of Emily Johnson, CTO of Renew Bazaar" class="rounded-full mx-auto mb-4"
                      
                        src="../assets/images/sundaram.jpeg"
                       height="150"  width="180" />
                    <h3 class="text-xl font-bold">
                        Sundaram
                    </h3>
                    
                </div>
            </div>
        </section>
        <section class="text-center">
            <h2 class="text-3xl font-bold mb-4">
                Join Us
            </h2>
            <p class="text-gray-600 mb-8">
                We are always looking for passionate and talented individuals to join our team. If you are interested in
                working with us, please get in touch!
            </p>
            <a class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700" href="contact.php">
                Contact Us
            </a>
        </section>
    </main>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-bold text-gray-900">
                    How It Works
                </h2>
                <p class="text-lg text-gray-700 mt-4">
                    Embark on a seamless journey from exploration to ownership with confidence and ease.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div
                    class="flex flex-col items-center p-8 bg-white rounded-xl shadow-xl transform hover:scale-105 transition duration-300">
                    <div class="mb-6 flex items-center justify-center bg-indigo-600 rounded-full h-14 w-14">
                        <span class="text-white text-2xl font-bold">
                            1
                        </span>
                    </div>
                    <img alt="Illustration of a person browsing items on a website" class="mb-4" height="100"
                        src="https://storage.googleapis.com/a1aa/image/Fe2CC9NVoVqpj_Tc41zZH3HkitdJS5jPyi2VvfW57qQ.jpg"
                        width="100" />
                    <h3 class="text-3xl font-semibold text-gray-800 mb-4">
                        Browse
                    </h3>
                    <p class="text-gray-600 text-center">
                        Discover our curated selection of stylish pre-loved treasures tailored just for you.
                    </p>
                </div>
                <div
                    class="flex flex-col items-center p-8 bg-white rounded-xl shadow-xl transform hover:scale-105 transition duration-300">
                    <div class="mb-6 flex items-center justify-center bg-indigo-600 rounded-full h-14 w-14">
                        <span class="text-white text-2xl font-bold">
                            2
                        </span>
                    </div>
                    <img alt="Illustration of a person connecting with a seller" class="mb-4" height="100"
                        src="https://storage.googleapis.com/a1aa/image/VlKvVFsRzeQ3zDPLEXgPub6C7hFgVzLgyAdjVZ8BHDI.jpg"
                        width="100" />
                    <h3 class="text-3xl font-semibold text-gray-800 mb-4">
                        Connect
                    </h3>
                    <p class="text-gray-600 text-center">
                        Engage with trusted sellers and unlock personalized insights effortlessly.
                    </p>
                </div>
                <div
                    class="flex flex-col items-center p-8 bg-white rounded-xl shadow-xl transform hover:scale-105 transition duration-300">
                    <div class="mb-6 flex items-center justify-center bg-indigo-600 rounded-full h-14 w-14">
                        <span class="text-white text-2xl font-bold">
                            3
                        </span>
                    </div>
                    <img alt="Illustration of a secure transaction and delivery" class="mb-4" height="100"
                        src="https://storage.googleapis.com/a1aa/image/lMIylrX-cS91xR3H0OJE4A-Yc_26lttpjGMgpJWxaIs.jpg"
                        width="100" />
                    <h3 class="text-3xl font-semibold text-gray-800 mb-4">
                        Purchase
                    </h3>
                    <p class="text-gray-600 text-center">
                        Experience secure transactions and rapid delivery for a hassle-free purchase.
                    </p>
                </div>
            </div>
            <div class="mt-16 text-center">
                <a class="inline-block bg-indigo-600 text-white text-lg font-semibold py-3 px-8 rounded-full shadow-lg transform hover:scale-105 transition duration-300"
                    href="#">
                    Get Started
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">What Our Clients Say</h2>
                <p class="text-lg text-gray-600">Hear directly from our satisfied customers!</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                    <div class="flex flex-col items-center">
                        <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-600 mb-4"
                            src="../assets/images/profile1.jpg" alt="Photo of Sarah">
                        <p class="text-gray-600 italic text-center">"ReNew Bazaar transformed my selling experience. The
                            platform is intuitive and the customer support is outstanding."</p>
                        <p class="mt-4 text-gray-800 font-semibold">- Sarah M.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                    <div class="flex flex-col items-center">
                        <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-600 mb-4"
                            src="../assets/images/profile2.jpg" alt="Photo of John">
                        <p class="text-gray-600 italic text-center">"A seamless and secure environment. I discovered
                            rare treasures and enjoyed a flawless transaction process."</p>
                        <p class="mt-4 text-gray-800 font-semibold">- John D.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300">
                    <div class="flex flex-col items-center">
                        <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-600 mb-4"
                            src="../assets/images/profile3.jpg" alt="Photo of Emma">
                        <p class="text-gray-600 italic text-center">"The ultimate marketplace for quality second-hand
                            items. I am consistently impressed with their service."</p>
                        <p class="mt-4 text-gray-800 font-semibold">- Emma R.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <!-- Footer -->
    <!-- <div id="footer-container"></div> -->
   
    
    <?php include 'footer.php'; ?>
    
  
</body>

</html>
