<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: admin_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - ICE Expo-2025 QR Code</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com">  </script>
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
        <h2>Welcome, Admin</h2>
<ul>
  <li><a href="scanner.php" target="_blank">Open QR Scanner</a></li>
  <li><a href="export.php">Download Verified Users (CSV)</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
        </div>
    </div>
   </div>
  </section>
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