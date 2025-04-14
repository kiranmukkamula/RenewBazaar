<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop - ReNew Bazaar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
  <style>
    body { font-family: 'Montserrat', sans-serif; }
  </style>
</head>
<body class="bg-gradient-to-b from-gray-100 to-gray-200">
    
<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center p-6">
        <a href="index.php" class="text-3xl font-bold text-indigo-700 relative group inline-block">
            <span class="text-orange-500">ReNew</span>Bazaar
            <span class="left-0 absolute -bottom-1 w-0 h-0.5 bg-violet-600 transition-all duration-300 group-hover:w-full"></span>
        </a>
        
        <!-- Search Bar -->
        <div class="flex-1 max-w-xl mx-8">
            <div class="relative">
                <input 
                    type="text" 
                    id="search-input"
                    placeholder="Search products... (Ctrl + K)" 
                    class="w-full px-4 py-2 pr-10 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-300 placeholder-gray-400"
                >
                <button 
                    id="search-clear" 
                    class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 text-xl hidden transition-colors duration-200 cursor-pointer"
                >
                    
                </button>
                <!-- Search Icon -->
                <svg 
                    class="absolute right-3 top-1/2 -translate-y-1/2 h-5 w-5 text-gray-400 pointer-events-none" 
                    xmlns="http://www.w3.org/2000/svg" 
                    fill="none" 
                    viewBox="0 0 24 24" 
                    stroke="currentColor"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

        <nav>
            <ul class="flex space-x-6 text-lg">
                   
                <li>
                    <a href="index.php" class="text-xl relative group inline-block text-gray-700 hover:text-indigo-600 transition-colors duration-300">
                        Home
                        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-indigo-700 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="shop.php" class="text-xl relative group inline-block text-gray-700 hover:text-indigo-600 transition-colors duration-300">
                        Shop
                        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-indigo-700 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
                
                <li>
                    <a href="about.php" class="text-xl relative group inline-block text-gray-700 hover:text-indigo-600 transition-colors duration-300">
                        About
                        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-indigo-700 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="contact.php" class="text-xl relative group inline-block text-gray-700 hover:text-indigo-600 transition-colors duration-300">
                        Contact
                        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-indigo-700 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="../logout.php" class="text-xl relative group inline-block text-gray-700 hover:text-indigo-600 transition-colors duration-300">
                        Logout
                        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-indigo-700 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
                <li>
                    <a href="login.php" class="text-xl relative group inline-block text-gray-700 hover:text-indigo-600 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A4 4 0 0112 15a4 4 0 016.879 2.804M12 12a4 4 0 110-8 4 4 0 010 8z"/>
                        </svg>
                        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-violet-700 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li> 
                <li>
    <a href="#" id="cart-icon" class="text-xl relative group inline-block text-gray-700 hover:text-indigo-600 transition-colors duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        <span id="cart-badge" class="hidden absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-indigo-700 transition-all duration-300 group-hover:w-full"></span>
    </a>
</li>  
            </ul>
        </nav>
    </div>
    
</header>

<!-- Add this div for no results message (it will be dynamically shown/hidden) -->
<div id="no-results-message" class="hidden text-center py-12">
    <h3 class="text-xl text-gray-600 mb-2">No products found</h3>
    <p class="text-sm text-gray-500">Try adjusting your search terms or browse our categories</p>
</div>

  <div id="notification-container" class="fixed top-16 right-4 z-50"></div>

  <main class="container mx-auto p-6 bg-violet-200">
      <h1 class="text-4xl font-bold text-center mb-8 bg-gradient-to-r from-indigo-500 to-purple-500 bg-clip-text text-transparent">
          Shop Products
      </h1>
      
      <!-- Category Section: Electronics -->
      <section class="mb-12">
          <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-gray-300 pb-2 mb-6">Electronics</h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

              <!-- Product Card: Smartphone -->
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/iphone 15.jpg" alt="Smartphone" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">Iphone 15</h3>
                      <p data-product-description class="text-gray-600 mt-1">Latest smartphone with advanced features.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹35,999</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=Iphone 15&amp;description=Latest smartphone with advanced features.&amp;price=₹35,999&amp;category=Electronics&amp;availability=In Stock&amp;sku=SP123&amp;image=../assets/images/iphone 15.jpg" 
                          class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
              
              <!-- Product Card: Laptop -->
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/macbook.jpg" alt="Laptop" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">MacBook Pro</h3>
                      <p data-product-description class="text-gray-600 mt-1">High performance laptop for work and play.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹79,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=MacBook Pro&amp;description=High performance laptop for work and play.&amp;price=₹89,999&amp;category=Electronics&amp;availability=In Stock&amp;sku=LP123&amp;image=../assets/images/macbook.jpg" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
      
              <!-- Product Card: Headphones -->
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/boult headphone.jpg" alt="Headphones" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">Boult Headphones</h3>
                      <p data-product-description class="text-gray-600 mt-1">Noise-cancelling headphones with superior sound quality.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹2,499</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=Boult Headphones&amp;description=Noise-cancelling headphones with superior sound quality.&amp;price=₹2,499&amp;category=Electronics&amp;availability=In Stock&amp;sku=HP123&amp;image=../assets/images/boult headphone.jpg" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
              
              <!-- Product Card: Refurbished Fridge -->
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/fridge.jpg" alt="Second Hand Fridge" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">Whirlpool Fridge</h3>
                      <p data-product-description class="text-gray-600 mt-1">Whirlpool 327 L 3 Star Convertible Frost Free Double Door Refrigerator (IF INV 375 ILLUSIA STEEL(3S) CONV-TL 2024 Model)</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹12,499</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=Whirlpool Fridge&amp;description=Whirlpool 327 L 3 Star Convertible Frost Free Double Door Refrigerator (IF INV 375 ILLUSIA STEEL(3S) CONV-TL 2024 Model).&amp;price=₹12,499&amp;category=Electronics&amp;availability=In Stock&amp;sku=FR123&amp;image=../assets/images/fridge.jpg" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
              
              <!-- Product Card: Used Ceiling Fan -->
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/fan.jpg" alt="Second Hand Fan" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">Polycab Superia</h3>
                      <p data-product-description class="text-gray-600 mt-1">
                        Polycab Superia SP04 1200mm Star Rated Premium BLDC | Free Installation | Designer Ceiling Fan For Home with Remote | 100% Copper, High Air Flow.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹2,299</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=Polycab Superia&amp;description=
                          Polycab Superia SP04 1200mm Star Rated Premium BLDC | Free Installation | Designer Ceiling Fan For Home with Remote | 100% Copper, High Air Flow.&amp;price=₹2,299&amp;category=Electronics&amp;availability=In Stock&amp;sku=FN123&amp;image=../assets/images/fan.jpg" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
              
              <!-- Product Card: Pre-owned AC -->
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/ac.jpg" alt="Second Hand AC" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">Blue Star AC</h3>
                      <p data-product-description class="text-gray-600 mt-1">Blue Star 1 Ton 5 Star, 60 Months Warranty, Wi-Fi Smart Inverter Split AC (Copper,Convertible 5 in 1 Cooling, AI Pro, Voice Command, 4 Way Swing, White)</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹15,999</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=Blue Star AC&amp;description=Blue Star 1 Ton 5 Star, 60 Months Warranty, Wi-Fi Smart Inverter Split AC (Copper,Convertible 5 in 1 Cooling, AI Pro, Voice Command, 4 Way Swing, White).&amp;price=₹15,999&amp;category=Electronics&amp;availability=In Stock&amp;sku=AC123&amp;image=../assets/images/ac.jpg" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
              
              <!-- Product Card: Used Air Cooler -->
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/cooler.jpg" alt="Second Hand Cooler" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">Symphony Air Cooler</h3>
                      <p data-product-description class="text-gray-600 mt-1">
                        Symphony Sumo 75 XL Desert Air Cooler For Home with Honeycomb Pads, Powerful +Air Fan, i-Pure Console and Low Power Consumption.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹3,499</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=Symphony Air Cooler&amp;description=
                          Symphony Sumo 75 XL Desert Air Cooler For Home with Honeycomb Pads, Powerful +Air Fan, i-Pure Console and Low Power Consumptions.&amp;price=₹3,499&amp;category=Electronics&amp;availability=In Stock&amp;sku=CL123&amp;image=../assets/images/cooler.jpg" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
              
              <!-- Product Card: Second Hand LED TV -->
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/tv.jpg" alt="Second Hand TV" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">TOSHIBA LED TV</h3>
                      <p data-product-description class="text-gray-600 mt-1">
                        TOSHIBA 139 cm (55 inches) C350NP Series 4K Ultra HD Smart LED Google TV 55C350NP (Black)|Supported Apps : Netflix, Youtube|.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹22,999</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=TOSHIBA LED TV&amp;description=TOSHIBA 139 cm (55 inches) C350NP Series 4K Ultra HD Smart LED Google TV 55C350NP (Black)|Supported Apps : Netflix, Youtube, Prime Video, Disney+Hotstar|.&amp;price=₹22,999&amp;category=Electronics&amp;availability=In Stock&amp;sku=TV123&amp;image=../assets/images/tv.jpg" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
              
              <!-- Product Card: Used Washing Machine -->
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/washing-machine.jpg" alt="Second Hand Washing Machine" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">
                        Godrej Washing Machine</h3>
                      <p data-product-description class="text-gray-600 mt-1">
                        Godrej 8 Kg 5 Star I-Sense Technology Fully-Automatic Front Load Washing Machine (2024 Model, WFEON CRS 8012 5.0 FKEDM GLWH).</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹8,999</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=Godrej Washing Machine&amp;description= Godrej 8 Kg 5 Star I-Sense Technology Fully-Automatic Front Load Washing Machine (2024 Model, WFEON CRS 8012 5.0 FKEDM GLWH).&amp;price=₹8,999&amp;category=Electronics&amp;availability=In Stock&amp;sku=WM123&amp;image=../assets/images/washing-machine.jpg" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
              
          </div>
      </section>
      
      <!-- Category Section: Books -->
      <section class="mb-12">
          <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-gray-300 pb-2 mb-6">Automobiles</h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
              <!-- Product Card: Bestselling Novel -->
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/hero-pleasure-scooter.webp" alt="Bestselling Novel" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">Hero Pleasure</h3>
                      <p data-product-description class="text-gray-600 mt-1">The engine is low on power, A twist to the throttle is all you need from this zippy little scooter.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹60,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=Hero Pleasure&amp;description=The engine is low on power, A twist to the throttle is all you need from this zippy little scooter.&amp;price=₹60,000&amp;category=Books&amp;availability=In Stock&amp;sku=BN123&amp;image=../assets/images/hero-pleasure-scooter.webp" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
              <!-- Product Card: Mystery Thriller -->
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/KTM 390 Duke.jpg" alt="Mystery Thriller" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">KTM Duke 390</h3>
                      <p data-product-description class="text-gray-600 mt-1">It’s an excellent choice if you want sharp handling, and advanced engine in a lightweight frame.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹1,40,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=KTM Duke 390&amp;description=It’s an excellent choice if you want sharp handling, and advanced engine in a lightweight frame.&amp;price=₹1,40,000&amp;category=Books&amp;availability=In Stock&amp;sku=MT123&amp;image=../assets/images/KTM 390 Duke.jpg" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
              <!-- Product Card: Science Fiction Epic -->
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/swift-dzire.webp" alt="Science Fiction Epic" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">Swift-Dzire</h3>
                      <p data-product-description class="text-gray-600 mt-1">Known for its fuel efficiency, spacious cabin,Mileage-22.41km/litre</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹2,50,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=Swift-Dzire&amp;description=Known for its fuel efficiency, spacious cabin,Mileage-22.41km/litre&amp;price=₹2,50,000&amp;category=Books&amp;availability=In Stock&amp;sku=SF123&amp;image=../assets/images/swift-dzire.webp" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
              <!-- Product Card: Legends of Avalon - Fantasy Epic -->
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/suzuki-access-125.webp" alt="Legends of Avalon" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">Suzuki Access 125</h3>
                      <p data-product-description class="text-gray-600 mt-1"> Delivers an impressive 50-55 km/l mileage, making it cost-effective for daily rides.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹65,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=Suzuki Access 125&amp;description=Delivers an impressive 50-55 km/l mileage, making it cost-effective for daily rides.&amp;price=₹65,000&amp;category=Books&amp;availability=In Stock&amp;sku=FA123&amp;image=../assets/images/suzuki-access-125.webp" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
              <!-- Product Card: History Unveiled - Nonfiction -->
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/splendor-plus.jpeg" alt="History Unveiled" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">Hero Splendor plus</h3>
                      <p data-product-description class="text-gray-600 mt-1">Powered by a 97.2cc air-cooled, single-cylinder, BS6-compliant engine.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹45,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=Hero Splendor plusd&amp;description=Powered by a 97.2cc air-cooled, single-cylinder, BS6-compliant engine.&amp;price=₹45,000&amp;category=Books&amp;availability=In Stock&amp;sku=NF123&amp;image=../assets/images/splendor-plus.jpeg" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
              
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/pure ev epluto 7g.webp" alt="Cooking Wonders" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">
                        Pure EV epluto 7G</h3>
                      <p data-product-description class="text-gray-600 mt-1">
                      Comes with a fully digital instrument cluster displaying speed, battery level, and trip info.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹75,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=Pure EV epluto 7G&amp;description=
                                                Comes with a fully digital instrument cluster displaying speed, battery level, and trip info.</p>
&amp;price=₹75,000&amp;category=Books&amp;availability=In Stock&amp;sku=CA123&amp;image=../assets/images/pure ev epluto 7g.webp" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
              <!-- Product Card: Poetry in Motion - Selected Poems -->
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/PURE-EV-ecoDryft.webp" alt="Poetry in Motion" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">Pure EV eco dryft 350</h3>
                      <p data-product-description class="text-gray-600 mt-1">Offers multiple riding modes, including Eco, Normal, and Sport.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹1,10,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=Pure EV eco dryft 350&amp;description=Offers multiple riding modes, including Eco, Normal, and Sport.&amp;price=₹1,10,000&amp;category=Books&amp;availability=In Stock&amp;sku=PO123&amp;image=../assets/images/PURE-EV-ecoDryft.webp" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
              <!-- Product Card: Tech Trends: Modern Innovations -->
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/Revolt-RV1.webp" alt="Tech Trends" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">Revolt RV1 Plus</h3>
                      <p data-product-description class="text-gray-600 mt-1">Lightweight and easy to handle with telescopic front suspension and dual rear shock absorbers.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹85,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=Revolt RV1 Plus&amp;description=Lightweight and easy to handle with telescopic front suspension and dual rear shock absorbers.&amp;price=₹85,000&amp;category=Books&amp;availability=In Stock&amp;sku=TT123&amp;image=../assets/images/Revolt-RV1.webp" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
              <!-- Product Card: Art of Mindfulness - Self-Help Guide -->
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/tvs_xl100.webp" alt="Art of Mindfulness" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">TVS XL100</h3>
                      <p data-product-description class="text-gray-600 mt-1">Well-maintained and in excellent working condition and at reasonable price.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹30,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="product.php?name=TVS XL100&amp;description=Well-maintained and in excellent working condition and at reasonable price&amp;price=₹30,000&amp;category=Books&amp;availability=In Stock&amp;sku=SH123&amp;image=../assets/images/tvs_xl100.webp" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <button class="add-to-cart-btn bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Add to Cart
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      
      <!-- Category Section: Home & Apartments -->
      <section class="mb-12">
          <h2 class="text-2xl font-semibold text-gray-800 border-b-2 border-gray-300 pb-2 mb-6">For Sale: Home & Apartments</h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/1bhk2.jpg" alt="2bhk" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">2BHK Flat</h3>
                      <p data-product-description class="text-gray-600 mt-1">Modular kitchen with ample storage and granite countertops.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹15,00,000</p>
                      <div class="mt-3 flex justify-between items-center">
    <a href="book.php?name=2BHK Flat&amp;description=Modular kitchen with ample storage and granite countertops.&amp;price=₹15,00,000&amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=VC123&amp;image=../assets/images/1bhk2.jpg" 
       class="text-blue-600 hover:underline font-medium">
        View Details
    </a>
    <a href="book.php?name=2BHK Flat&amp;description=Modular kitchen with ample storage and granite countertops.&amp;price=₹15,00,000&amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=VC123&amp;image=../assets/images/1bhk2.jpg" 
       class=" bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
          Book Now
    </a>
</div>
                  </div>
              </div>
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/2bhk1.jpg" alt="Decorative Lamp" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">1BHK (2nd Floor)</h3>
                      <p data-product-description class="text-gray-600 mt-1">Spacious living room with good ventilation and natural light.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹24,00,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="book.php?name=1BHK (2nd Floor)&amp;description=Spacious living room with good ventilation and natural light. &amp;price=₹24,00,000 &amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=DL123&amp;image=../assets/images/2bhk1.jpg" class="text-blue-600 hover:underline font-medium">View Details</a>
                         
                          <a href="book.php?name=1BHK (2nd Floor)&amp;description=Spacious living room with good ventilation and natural light. &amp;price=₹24,00,000 &amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=DL123&amp;image=../assets/images/2bhk1.jpg"  class=" bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Book Now </a>
                      </div>
                  </div>
              </div>

              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/2bhk3.webp" alt="Wall Art" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">3BHK (Ground Floor)</h3>
                      <p data-product-description class="text-gray-600 mt-1">Well-connected to public transport, metro, and major roads/highways.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹45,00,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="book.php?name=3BHK (Ground Floor)&amp;description=Well-connected to public transport, metro, and major roads/highways.&amp;price=₹45,00,000&amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=WA123&amp;image=../assets/images/2bhk3.webp" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <a href="book.php?name=3BHK (Ground Floor)&amp;description=Well-connected to public transport, metro, and major roads/highways.&amp;price=₹45,00,000&amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=WA123&amp;image=../assets/images/2bhk3.webp" class=" bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Book Now
                          </a>
                      </div>
                  </div>
              </div>
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/h1.webp" alt="Modern Sofa" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">House For Sale </h3>
                      <p data-product-description class="text-gray-600 mt-1">Close to schools, colleges, hospitals, shopping malls, and restaurants.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹60,00,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="book.php?name=House For Sale &amp;description=Close to schools, colleges, hospitals, shopping malls, and restaurants.&amp;price=₹60,00,000&amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=FS123&amp;image=../assets/images/h1.webp" class="text-blue-600 hover:underline font-medium">View Details</a>
                           <a href="book.php?name=House For Sale &amp;description=Close to schools, colleges, hospitals, shopping malls, and restaurants.&amp;price=₹60,00,000&amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=FS123&amp;image=../assets/images/h1.webp" class=" bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Book Now
                          </a>
                      </div>
                  </div>
              </div>
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/h2.avif" alt="Glass Coffee Table" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">House For Sale (with garden)</h3>
                      <p data-product-description class="text-gray-600 mt-1">Attached western-style bathrooms with geysers installed.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹35,00,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="book.php?name=House For Sale (with garden)&amp;description=Attached western-style bathrooms with geysers installed.&amp;price=₹35,00,000&amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=FS124&amp;image=../assets/images/h2.avif" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <a href="book.php?name=House For Sale (with garden)&amp;description=Attached western-style bathrooms with geysers installed.&amp;price=₹35,00,000&amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=FS124&amp;image=../assets/images/h2.avif" class=" bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Book Now
                          </a>
                      </div>
                  </div>
              </div>
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/h5.webp" alt="Elegant Dining Set" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">House For Sale Near to Main Road</h3>
                      <p data-product-description class="text-gray-600 mt-1">Balcony with a great view (garden/road/city view).</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹70,00,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="book.php?name=House For Sale Near to Main Road&amp;description=Balcony with a great view (garden/road/city view).&amp;price=₹70,00,000&amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=FS125&amp;image=../assets/images/h5.webp" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <a href="book.php?name=House For Sale Near to Main Road&amp;description=Balcony with a great view (garden/road/city view).&amp;price=₹70,00,000&amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=FS125&amp;image=../assets/images/h5.webp" class=" bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Book Now
                          </a>
                      </div>
                  </div>
              </div>
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/h6.jpg" alt="Contemporary Bookshelf" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">House For Sale</h3>
                      <p data-product-description class="text-gray-600 mt-1">Located with 2 floors of a well-maintained apartment building.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹90,00,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="book.php?name=House For Sale&amp;description=Located with 2 floors of a well-maintained apartment building.&amp;price=₹90,00,000&amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=FS126&amp;image=../assets/images/h6.jpg" class="text-blue-600 hover:underline font-medium">View Details</a>
                         <a href="book.php?name=House For Sale&amp;description=Located with 2 floors of a well-maintained apartment building.&amp;price=₹90,00,000&amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=FS126&amp;image=../assets/images/h6.jpg" class=" bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Book Now
                          </a>
                      </div>
                  </div>
              </div>
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/3bhk4.jpg" alt="Rustic Bed Frame" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">2BHK Near to Law Gate</h3>
                      <p data-product-description class="text-gray-600 mt-1">Modular kitchen with ample storage and granite countertops.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹55,00,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="book.php?name=2BHK Near to Law Gate&amp;description=Modular kitchen with ample storage and granite countertops.&amp;price=₹55,00,000&amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=FS127&amp;image=../assets/images/3bhk4.jpg" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <a href="book.php?name=2BHK Near to Law Gate&amp;description=Modular kitchen with ample storage and granite countertops.&amp;price=₹55,00,000&amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=FS127&amp;image=../assets/images/3bhk4.jpg" class=" bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Book Now
                          </a>
                      </div>
                  </div>
              </div>
              <div data-product-card class="bg-white rounded-xl border border-gray-200 p-4 shadow-md hover:shadow-xl transition transform duration-300 hover:-translate-y-1">
                  <div class="w-full h-48 overflow-hidden rounded-xl">
                      <img src="../assets/images/h4.avif" alt="Artisan Rug" class="w-full h-full object-contain">
                  </div>
                  <div class="mt-4">
                      <h3 data-product-name class="text-xl font-semibold text-gray-800">House For Sale (Deep Nagae)</h3>
                      <p data-product-description class="text-gray-600 mt-1">Well-connected to public transport, metro, and major roads/highways.</p>
                      <p class="text-lg font-bold text-indigo-600 mt-2">₹98,00,000</p>
                      <div class="mt-3 flex justify-between items-center">
                          <a href="book.php?name=House For Sale (Deep Nagae)&amp;description=Well-connected to public transport, metro, and major roads/highways.&amp;price=₹98,00,000&amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=FS128&amp;image=../assets/images/h4.avif" class="text-blue-600 hover:underline font-medium">View Details</a>
                          <a href="book.php?name=House For Sale (Deep Nagae)&amp;description=Well-connected to public transport, metro, and major roads/highways.&amp;price=₹98,00,000&amp;category=Home &amp; Decor&amp;availability=In Stock&amp;sku=FS128&amp;image=../assets/images/h4.avif" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-md transition-colors">
                              Book Now
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      
  </main>
  
  <!-- Cart Sidebar -->
  <div id="cart-sidebar" class="fixed top-0 right-0 h-full w-80 bg-white shadow-xl transform translate-x-full transition-transform duration-300 z-50">
      <div class="flex justify-between items-center p-4 border-b">
          <h2 class="text-2xl font-bold text-gray-800">Your Cart</h2>
          <button id="close-cart-sidebar" class="text-gray-500 hover:text-gray-800 text-2xl">&times;</button>
      </div>
      <div id="cart-items-container" class="p-4 overflow-y-auto" style="max-height: calc(100% - 160px);">
      </div>
      <div class="p-4 border-t">
          <div class="flex justify-between items-center mb-4">
              <span class="text-lg font-semibold text-gray-700">Total: </span>
              <span id="cart-total" class="text-lg font-semibold text-gray-700">₹0.00</span>
          </div>
          <button id="checkout-button" class="w-full text-center bg-green-500 hover:bg-green-600 text-white font-medium px-4 py-2 rounded-md shadow-lg transition-colors">
            Checkout
        </button>
      </div>
  </div>
  
  <!-- <div id="footer-container"></div> -->
 <?php include 'footer.php'; ?>
</body>
</html>
  <script>
    tailwind.config = {
    theme: {
        extend: {
            keyframes: {
                'fade-in': {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' }
                }
            },
            animation: {
                'fade-in': 'fade-in 0.3s ease-in-out'
            }
        }
    }
}
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input');
    const searchClear = document.getElementById('search-clear');
    const productCards = document.querySelectorAll('[data-product-card]'); // Add this attribute to your product cards
    const noResultsMessage = document.getElementById('no-results-message');

    function filterProducts(searchTerm) {
        searchTerm = searchTerm.toLowerCase().trim();
        let hasVisibleProducts = false;

        productCards.forEach(card => {
            const productName = card.querySelector('[data-product-name]').textContent.toLowerCase();
            const productDescription = card.querySelector('[data-product-description]').textContent.toLowerCase();
            
            if (productName.includes(searchTerm) || productDescription.includes(searchTerm)) {
                card.classList.remove('hidden');
                card.classList.add('animate-fade-in');
                hasVisibleProducts = true;
            } else {
                card.classList.add('hidden');
                card.classList.remove('animate-fade-in');
            }
        });

        // Toggle clear button
        if (searchTerm) {
            searchClear.classList.remove('hidden');
        } else {
            searchClear.classList.add('hidden');
        }

        // Toggle no results message
        if (!hasVisibleProducts && searchTerm) {
            noResultsMessage.classList.remove('hidden');
        } else {
            noResultsMessage.classList.add('hidden');
        }
    }

    // Search input event listener with debounce
    let debounceTimer;
    searchInput.addEventListener('input', (e) => {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => {
            filterProducts(e.target.value);
        }, 300);
    });

    // Clear search
    searchClear.addEventListener('click', () => {
        searchInput.value = '';
        filterProducts('');
        searchInput.focus();
    });

    // Keyboard shortcuts
    document.addEventListener('keydown', (e) => {
        // Ctrl/Cmd + K to focus search
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault();
            searchInput.focus();
        }
        // Escape to clear search
        if (e.key === 'Escape' && document.activeElement === searchInput) {
            searchInput.value = '';
            filterProducts('');
            searchInput.blur();
        }
    });
});
  document.addEventListener('DOMContentLoaded', () => {
    const cartBadge = document.getElementById('cart-badge');
    const cartSidebar = document.getElementById('cart-sidebar');
    const cartItemsContainer = document.getElementById('cart-items-container');
    const cartIcon = document.getElementById('cart-icon');
    const closeCartSidebarButton = document.getElementById('close-cart-sidebar');
    const checkoutButton = document.getElementById('checkout-button');
    const cart = {};

    function updateCartBadge() {
        let totalQuantity = 0;
        let totalPrice = 0;
        for (let key in cart) {
            totalQuantity += cart[key].quantity;
            totalPrice += cart[key].price * cart[key].quantity;
        }
        cartBadge.textContent = totalQuantity;
        cartBadge.classList.toggle('hidden', totalQuantity === 0);
        document.getElementById('cart-total').textContent = '₹' + totalPrice.toFixed(2);
    }

    function renderCartItems() {
        cartItemsContainer.innerHTML = '';
        const keys = Object.keys(cart);
        if (keys.length === 0) {
            cartItemsContainer.innerHTML = '<p class="text-center text-gray-600">Your cart is empty.</p>';
            return;
        }
        keys.forEach(productName => {
            const item = cart[productName];
            const itemDiv = document.createElement('div');
            itemDiv.className = "flex justify-between items-center border-b border-gray-200 py-2";
            itemDiv.innerHTML = `
                <span class="text-lg">${item.name} (₹${item.price}) x ${item.quantity}</span>
                <div>
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold px-2 rounded-l" data-action="decrease" data-product="${item.name}">-</button>
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold px-2 rounded-r" data-action="increase" data-product="${item.name}">+</button>
                    <button class="ml-2 text-red-500" data-action="remove" data-product="${item.name}">&times;</button>
                </div>
            `;
            cartItemsContainer.appendChild(itemDiv);
        });
    }

    function openCartSidebar() {
        cartSidebar.classList.remove('translate-x-full');
        renderCartItems();
    }

    function closeCartSidebar() {
        cartSidebar.classList.add('translate-x-full');
    }

    cartIcon.addEventListener('click', (e) => {
        e.preventDefault();
        openCartSidebar();
    });

    closeCartSidebarButton.addEventListener('click', closeCartSidebar);

    cartItemsContainer.addEventListener('click', (e) => {
        const action = e.target.getAttribute('data-action');
        const productName = e.target.getAttribute('data-product');
        if (!action || !productName) return;
        
        if (action === 'increase') {
            cart[productName].quantity += 1;
        } else if (action === 'decrease') {
            if (cart[productName].quantity > 1) {
                cart[productName].quantity -= 1;
            } else {
                delete cart[productName];
            }
        } 
        else if (action === 'remove') {
            delete cart[productName];
        }

        updateCartBadge();
        renderCartItems();
    });

    const addToCartButtons=document.querySelectorAll('.add-to-cart-btn');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const productCard = button.closest('.bg-white');
            const productName = productCard.querySelector('h3').textContent;
            let priceText = productCard.querySelector('p.text-lg.font-bold.text-indigo-600').textContent;
            priceText = priceText.replace('₹', '').replace(/,/g, '').trim();
            const price = parseFloat(priceText);

            if (cart[productName]) {
                cart[productName].quantity += 1;
            }
            else {
                cart[productName] = {
                    name: productName,
                    price: price,
                    quantity: 1
                };
            }
            updateCartBadge();
            openCartSidebar();
        });
    });

   

    if (checkoutButton) {
        checkoutButton.addEventListener('click', async () => {
            const selectedProducts = [];
            let totalPrice = 0;

            for (let key in cart) {
                selectedProducts.push(`${cart[key].name} (${cart[key].quantity})`);
                totalPrice += cart[key].price * cart[key].quantity;
            }

            const productsString = selectedProducts.join(", ");
            const formattedPrice = '₹' + totalPrice.toFixed(2);

            // Create a form to submit to the same page
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = window.location.href;

            // Add hidden fields
            const productsInput = document.createElement('input');
            productsInput.type = 'hidden';
            productsInput.name = 'products';
            productsInput.value = productsString;
            form.appendChild(productsInput);

            const priceInput = document.createElement('input');
            priceInput.type = 'hidden';
            priceInput.name = 'totalPrice';
            priceInput.value = formattedPrice;
            form.appendChild(priceInput);

            // Add to document and submit
            document.body.appendChild(form);
            form.submit();
        });
    }
});
</script>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Store in session
    $_SESSION['products'] = $_POST['products'];
    $_SESSION['totalprice'] = str_replace(['₹', ','], '', $_POST['totalPrice']); // Clean the price value
    
    // JavaScript redirect
    echo "<script>window.location.href = 'checkouthtml.php';</script>";
    exit();
}
?>
