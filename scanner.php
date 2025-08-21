<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Entry Scanner - ICE Expo-2025 QR Code</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com">  </script>
  <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
</head>
<body>
    <!-------------------------------------------- Hero Section ------------------------------------------------------->
  <div aria-hidden="true" class="background-images">
   <img alt="Modern abstract art with vibrant colors and geometric shapes covering top left background" loading="lazy" src="./images/build.jpg"/>
   <img alt="Minimalist nature landscape featuring mountains and a calm lake at sunset covering top right background" loading="lazy" src="./images/vande bharat train.jpeg"/>
   <img alt="Futuristic cityscape at night with neon lights and skyscrapers covering bottom left background" loading="lazy" src="./images/India-Briefing-Ports.jpg"/>
   <img alt="Creative workspace with modern tech gadgets, laptop, and coffee cup on desk covering bottom right background" loading="lazy" src="./images/airport1.jpg"/>
  </div>
    <nav class="fixed top-0 left-0 right-0 z-30 bg-black bg-opacity-10 backdrop-blur-md">
   <div class="max-w-7xl mx-auto px-6">
    <div class="flex items-center justify-between h-16">
     <div class="flex items-center space-x-8">
      <ul class="hidden md:flex space-x-8 text-white font-semibold text-lg">
       <li>
        <a class="hover:text-indigo-400 transition-colors duration-300" href="./index.html">
         Home
        </a>
       </li>
       <li>
        <a class="hover:text-indigo-400 transition-colors duration-300" href="./Exhibitor.html">
         Exhibitor
        </a>
       </li>
       <li>
        <a class="hover:text-indigo-400 transition-colors duration-300" href="./Visitor.html">
         Visitor
        </a>
       </li>
      </ul>
     </div>
     <div class="flex-shrink-0">
      <a class="inline-flex items-center" href="#">
       <img alt="Company logo, stylized letter E in a circle with gradient blue and purple" class="h-10 w-auto" height="80" src="https://storage.googleapis.com/a1aa/image/143e8857-12bd-406b-5d46-f44b8dcbeb1c.jpg" width="80"/>
      </a>
     </div>
     <div class="md:hidden">
      <button aria-label="Toggle menu" class="text-white focus:outline-none" id="menu-btn">
       <i class="fas fa-bars fa-lg">
       </i>
      </button>
     </div>
    </div>
   </div>
   <div class="md:hidden bg-black bg-opacity-10 backdrop-blur-md" id="mobile-menu" style="display:none;">
    <ul class="flex flex-col space-y-4 px-6 py-4 text-white font-semibold text-lg">
     <li>
      <a class="block hover:text-indigo-400 transition-colors duration-300" href="./index.html">
       Home
      </a>
     </li>
     <li>
      <a class="block hover:text-indigo-400 transition-colors duration-300" href="./Exhibitor.html">
       Exhibitor
      </a>
     </li>
     <li>
      <a class="block hover:text-indigo-400 transition-colors duration-300" href="./Visitor.html">
       Visitor
      </a>
     </li>
    </ul>
   </div>
  </nav>
  <section class="relative max-w-full mx-auto px-6 py-32 flex flex-col items-center justify-center min-h-screen text-center text-white">
   <div class="max-w-full mx-auto " id="pdf-content">
    
    <div class="bg-white rounded-xl mt-4 max-w-4xl flex flex-col sm:flex-row overflow-hidden shadow-lg transition-shadow duration-300 ease-in-out hover:shadow-2xl">
     <div class="flex flex-col items-center justify-center sm:flex-row w-full  p-6 sm:p-8 space-y-6">
      <!-- <div class="flex flex-col sm:w-1/2 p-6 sm:p-8 space-y-6"> -->
       
       <div class="text-2xl text-gray-700 leading-tight flex flex-col items-center justify-center">
        <p class="font-semibold text-orange-600 mb-1">
         Showcase Your Innovations at 
         <span class="font-bold">
          ICE Expo 2025 – InfraConnect India
         </span>
        </p>
    <h2>Scan QR Code to Verify Entry</h2>
  <div id="reader" style="width:300px;"></div>
  <div id="result"></div>

        </div>
    </div>
   </div>
  </section><!--------------------------------------- Footer Section ----------------------------------------------------------->
<div class="">
  <section class="w-full flex justify-center items-center py-6 px-4 relative">
   <img alt="Background image showing a group of people in a business event or trade show setting" class="absolute inset-0 w-full h-full object-cover opacity-70" height="150" src="https://storage.googleapis.com/a1aa/image/92cdd8d4-7fb7-48f9-4010-fb79b3ff216a.jpg" width="1920"/>
   <h2 class="relative text-center text-[#5194c8] text-lg sm:text-xl md:text-2xl font-semibold max-w-4xl text-shadow: 1px 1px 2px gray;">
    Join India's Most Comprehensive B2B Trade Show and Propel Your Business to New Heights!
   </h2>
  </section>
  <footer class="bg-gradient-to-b bg-[#0145f2] text-white py-10 px-6 sm:px-12 flex flex-col sm:flex-row justify-between max-w-full mx-auto">
   <div class="mb-8 sm:mb-0 sm:w-1/3">
    <h3 class="font-bold text-lg mb-4">
     Quick Links
    </h3>
    <ul class="text-xs leading-5 space-y-1">
     <li><a href="./index.html">
      Home</a>
     </li>
     <li><a href="./RegistrationPage.html">
      Exhibitor</a>
     </li>
     <li><a href="./Visitor.html">
      Visitors</a>
     </li>
     <li><a href="./Conference.html">
      Conference</a>
     </li>
     <li><a href="./index.html">
      Contact Us</a>
     </li>
    </ul>
   </div>
   <div class="mb-8 sm:mb-0 sm:w-1/3">
    <h3 class="font-bold text-lg mb-4">
     Direction Map
    </h3>
    <img alt="Google map showing location of Hall no 6 with nearby roads and landmarks" class="w-[200px] h-[180px] object-cover" height="180" src="https://storage.googleapis.com/a1aa/image/80d4debe-2b02-488e-6815-8fe15bdb7373.jpg" width="200"/>
   </div>
   <div class="sm:w-1/3 flex flex-col ">
    <h3 class="font-bold text-lg mb-4">
     Contact Us
    </h3>
    <p class="text-xs leading-5 space-y-1">
     <span class="flex items-center justify-start gap-2 mb-1">
      <i class="fas fa-home">
      </i>
      Bharat Mandapam Hall No - 6, New Delhi, India
     </span>
     <span class="flex items-center justify-start gap-2 mb-1">
      <i class="fas fa-envelope">
      </i>
      info@infraconnectindia.com
     </span>
     <span class="flex items-center">
      <i class="fas fa-phone">
      </i>
      +91 98635123XX
     </span>
    </p>
   </div>
  </footer>
  <div class="bg-white text-center text-xs text-gray-700 py-2">
   Copyright © 2025 Infra Connect India 2026 | Designed & Developed by BluMart Global LLP
  </div>
  <button aria-label="Scroll to top" class="fixed bottom-2 right-2 bg-black text-white p-1 rounded-sm" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
   <i class="fas fa-angle-up">
   </i>
  </button>
</div>
<!--------------------------------------- End Footer Section ------------------------------------------------------->

  
  <script>
    function verifyQR(qrData) {
      fetch("verify.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "qr=" + encodeURIComponent(qrData)
      })
      .then(res => res.text())
      .then(data => {
        document.getElementById("result").innerHTML = data;
      });
    }

    const html5QrCode = new Html5Qrcode("reader");
    const config = { fps: 10, qrbox: 250 };

    html5QrCode.start({ facingMode: "environment" }, config,
      qrCodeMessage => {
        html5QrCode.stop();
        verifyQR(qrCodeMessage);
      },
      errorMessage => {}
    );
  </script>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", function () {
      if (mobileMenu.style.display === "none" || mobileMenu.style.display === "") {
        mobileMenu.style.display = "block";
      } else {
        mobileMenu.style.display = "none";
      }
    });
  });
</script>
</body>
</html>