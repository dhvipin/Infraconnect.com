<?php
session_start();

// Get selected cluster
$selected_cluster = isset($_POST['selected_cluster']) ? $_POST['selected_cluster'] : '';

// Define stalls under each cluster
$stalls = [
    "Platinum Avenue" => [
        ["stall_no" => "PA-1", "price" => 250000, "inclusions" => "Basic Furniture, Fascia", "exclusions" => "Electricals"],
        ["stall_no" => "PA-2", "price" => 280000, "inclusions" => "Premium Furniture, Fascia", "exclusions" => "Electricals, Branding"],
        ["stall_no" => "PA-3", "price" => 300000, "inclusions" => "Luxury Furniture, Fascia, Lights", "exclusions" => "Branding"]
    ],
    "Innovation Boulevard" => [
        ["stall_no" => "IB-1", "price" => 180000, "inclusions" => "Basic Setup", "exclusions" => "Electricals"],
        ["stall_no" => "IB-2", "price" => 200000, "inclusions" => "Premium Setup", "exclusions" => "Electricals, Branding"]
    ],
    "Growth Gateway" => [
        ["stall_no" => "GG-1", "price" => 150000, "inclusions" => "Basic Furniture", "exclusions" => "Electricals"],
        ["stall_no" => "GG-2", "price" => 170000, "inclusions" => "Furniture + Fascia", "exclusions" => "Branding"]
    ],
    // ... add stalls for remaining clusters
];

// Get stalls for selected cluster
$selected_stalls = isset($stalls[$selected_cluster]) ? $stalls[$selected_cluster] : [];
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICE Expo-2025 stall_boking_2</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com">
  </script>
    <style>
              .img-Size {
  width: 100%;
  aspect-ratio: 1 / 1;
  /* makes logos square */
  object-fit: contain;
  border-radius: 8px;
}



/* ===== TOP LOGO SLIDER (scrolls left) ===== */
/* ===== TOP LOGO SLIDER (continuous left scroll) ===== */
/* ===== TOP LOGO SLIDER ===== */
.icons-slider-left {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 30;
  overflow: hidden;
  background: #fff;
  padding: 10px 0;
  border-bottom: 1px solid #ddd;
}

.icons-slider-left .scroll-track {
  display: flex;
  animation: scroll-left 8s linear infinite;
}

.icons-slider-left img {
  margin: 0 20px;
  height: 40px;
  object-fit: contain;
  flex-shrink: 0;
}

/* ===== BOTTOM LOGO SLIDER ===== */
.icons-slider-right {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  z-index: 30;
  overflow: hidden;
  background: #fff;
  padding: 10px 0;
  border-top: 1px solid #ddd;
}

.icons-slider-right .scroll-track-right {
  display: flex;
  animation: scroll-right 8s linear infinite;
}

.icons-slider-right img {
  margin: 0 20px;
  height: 40px;
  object-fit: contain;
  flex-shrink: 0;
}

/* ===== Animations ===== */
@keyframes scroll-left {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

@keyframes scroll-right {
  0% { transform: translateX(-50%); }
  100% { transform: translateX(0); }
}


/* ===== Responsive ===== */
@media (max-width: 768px) {
    .icons-slider-left{
    display:none;
  }

  .icons-slider-left img,
  .icons-slider-right img {
    height: 30px;
    margin: 0 10px;
  }
}
  </style>
</head>
<body>
  <!------------------------------------------- end scroll icons ---------------------------------------------------->
  <!-- ===== TOP SCROLLER ===== -->
  <div class="icons-slider-left">
    <div class="scroll-track">
      <!-- Logos duplicated twice for seamless loop -->
      <img src="images/DRDO.png">
      <img src="images/eviksitbharat.png">
      <img src="images/GAIL.png">
      <img src="images/Gem.png">
      <img src="images/Hydrogen Missionofindia.png">
      <img src="images/Indian Railways.png">
      <img src="images/Make in india.png">
      <img src="images/Ministry of commerce and industry.png">
      <img src="images/Ministry of Micro Small and medium enterprises.png">
      <img src="images/Ministry of Petrolleum and naturalgas.png">
      <img src="images/ministry of railways.png">
      <img src="images/Ministry of Steel.png">
      <img src="images/NHAI.png">
      <img src="images/NHIDCL.png">
      <img src="images/Road Transpport and highways.png">
      <img src="images/roadtransport.jpeg">


      <!-- Repeat same set -->
      <img src="images/DRDO.png">
      <img src="images/eviksitbharat.png">
      <img src="images/GAIL.png">
      <img src="images/Gem.png">
      <img src="images/Hydrogen Missionofindia.png">
      <img src="images/Indian Railways.png">
      <img src="images/Make in india.png">
      <img src="images/Ministry of commerce and industry.png">
      <img src="images/Ministry of Micro Small and medium enterprises.png">
      <img src="images/Ministry of Petrolleum and naturalgas.png">
      <img src="images/ministry of railways.png">
      <img src="images/Ministry of Steel.png">
      <img src="images/NHAI.png">
      <img src="images/NHIDCL.png">
      <img src="images/Road Transpport and highways.png">
      <img src="images/roadtransport.jpeg">


      <!-- Repeat same set -->
      <img src="images/DRDO.png">
      <img src="images/eviksitbharat.png">
      <img src="images/GAIL.png">
      <img src="images/Gem.png">
      <img src="images/Hydrogen Missionofindia.png">
      <img src="images/Indian Railways.png">
      <img src="images/Make in india.png">
      <img src="images/Ministry of commerce and industry.png">
      <img src="images/Ministry of Micro Small and medium enterprises.png">
      <img src="images/Ministry of Petrolleum and naturalgas.png">
      <img src="images/ministry of railways.png">
      <img src="images/Ministry of Steel.png">
      <img src="images/NHAI.png">
      <img src="images/NHIDCL.png">
      <img src="images/Road Transpport and highways.png">
      <img src="images/roadtransport.jpeg">


      <!-- Repeat same set -->
      <img src="images/DRDO.png">
      <img src="images/eviksitbharat.png">
      <img src="images/GAIL.png">
      <img src="images/Gem.png">
      <img src="images/Hydrogen Missionofindia.png">
      <img src="images/Indian Railways.png">
      <img src="images/Make in india.png">
      <img src="images/Ministry of commerce and industry.png">
      <img src="images/Ministry of Micro Small and medium enterprises.png">
      <img src="images/Ministry of Petrolleum and naturalgas.png">
      <img src="images/ministry of railways.png">
      <img src="images/Ministry of Steel.png">
      <img src="images/NHAI.png">
      <img src="images/NHIDCL.png">
      <img src="images/Road Transpport and highways.png">
      <img src="images/roadtransport.jpeg">


      <!-- Repeat same set -->
      <img src="images/DRDO.png">
      <img src="images/eviksitbharat.png">
      <img src="images/GAIL.png">
      <img src="images/Gem.png">
      <img src="images/Hydrogen Missionofindia.png">
      <img src="images/Indian Railways.png">
      <img src="images/Make in india.png">
      <img src="images/Ministry of commerce and industry.png">
      <img src="images/Ministry of Micro Small and medium enterprises.png">
      <img src="images/Ministry of Petrolleum and naturalgas.png">
      <img src="images/ministry of railways.png">
      <img src="images/Ministry of Steel.png">
      <img src="images/NHAI.png">
      <img src="images/NHIDCL.png">
      <img src="images/Road Transpport and highways.png">
      <img src="images/roadtransport.jpeg">


      <!-- Repeat same set -->
      <img src="images/DRDO.png">
      <img src="images/eviksitbharat.png">
      <img src="images/GAIL.png">
      <img src="images/Gem.png">
      <img src="images/Hydrogen Missionofindia.png">
      <img src="images/Indian Railways.png">
      <img src="images/Make in india.png">
      <img src="images/Ministry of commerce and industry.png">
      <img src="images/Ministry of Micro Small and medium enterprises.png">
      <img src="images/Ministry of Petrolleum and naturalgas.png">
      <img src="images/ministry of railways.png">
      <img src="images/Ministry of Steel.png">
      <img src="images/NHAI.png">
      <img src="images/NHIDCL.png">
      <img src="images/Road Transpport and highways.png">
      <img src="images/roadtransport.jpeg">


      <!-- Repeat same set -->
      <img src="images/DRDO.png">
      <img src="images/eviksitbharat.png">
      <img src="images/GAIL.png">
      <img src="images/Gem.png">
      <img src="images/Hydrogen Missionofindia.png">
      <img src="images/Indian Railways.png">
      <img src="images/Make in india.png">
      <img src="images/Ministry of commerce and industry.png">
      <img src="images/Ministry of Micro Small and medium enterprises.png">
      <img src="images/Ministry of Petrolleum and naturalgas.png">
      <img src="images/ministry of railways.png">
      <img src="images/Ministry of Steel.png">
      <img src="images/NHAI.png">
      <img src="images/NHIDCL.png">
      <img src="images/Road Transpport and highways.png">
      <img src="images/roadtransport.jpeg">


    </div>
  </div>

  <!-- ===== BOTTOM SCROLLER ===== -->
  <div class="icons-slider-right">
    <div class="scroll-track-right">
      <img src="images/AAI.png">
      <img src="images/AMRUT.png">
      <img src="images/Ariel platform Association of India .png">
      <img src="images/ASSOCHAM.png">
      <img src="images/BCI.png">
      <img src="images/Building Association of India .png">
      <img src="images/Carbon Green Credit.png">
      <img src="images/CII IGBC.png">
      <img src="images/concor.png">
      <img src="images/construction federation of india.png">
      <img src="images/CREDAI.png">
      <img src="images/CSIR.png">
      <img src="images/DGCA.png">
      <img src="images/federation of association of small industry in india.png">
      <img src="images/Gati Shakti.png">
      <img src="images/IBA .png">
      <img src="images/Indian Building Congress.png">
      <img src="images/Indian Chamber Congress.png">
      <img src="images/Indian Concrete Institute.png">
      <img src="images/Indian Road Congress.png">
      <img src="images/International Road Federation India Chapter.png">
      <img src="images/Invoice Mart.png">
      <img src="images/NAREDCO.png">
      <img src="images/Net zero Emission Mission.png">
      <img src="images/NSIC.png">
      <img src="images/Pavers and Blocks Manufactures Association.png">
      <img src="images/PHDCCI.png">
      <img src="images/Pre engineered structures society of India.png">
      <img src="images/RVNL.png">
      <img src="images/SIDBI.png">


      <!-- Repeat same set -->

      <img src="images/AAI.png">
      <img src="images/AMRUT.png">
      <img src="images/Ariel platform Association of India .png">
      <img src="images/ASSOCHAM.png">
      <img src="images/BCI.png">
      <img src="images/Building Association of India .png">
      <img src="images/Carbon Green Credit.png">
      <img src="images/CII IGBC.png">
      <img src="images/concor.png">
      <img src="images/construction federation of india.png">
      <img src="images/CREDAI.png">
      <img src="images/CSIR.png">
      <img src="images/DGCA.png">
      <img src="images/federation of association of small industry in india.png">
      <img src="images/Gati Shakti.png">
      <img src="images/IBA .png">
      <img src="images/Indian Building Congress.png">
      <img src="images/Indian Chamber Congress.png">
      <img src="images/Indian Concrete Institute.png">
      <img src="images/Indian Road Congress.png">
      <img src="images/International Road Federation India Chapter.png">
      <img src="images/Invoice Mart.png">
      <img src="images/NAREDCO.png">
      <img src="images/Net zero Emission Mission.png">
      <img src="images/NSIC.png">
      <img src="images/Pavers and Blocks Manufactures Association.png">
      <img src="images/PHDCCI.png">
      <img src="images/Pre engineered structures society of India.png">
      <img src="images/RVNL.png">
      <img src="images/SIDBI.png">


      
      <!-- Repeat same set -->

      <img src="images/AAI.png">
      <img src="images/AMRUT.png">
      <img src="images/Ariel platform Association of India .png">
      <img src="images/ASSOCHAM.png">
      <img src="images/BCI.png">
      <img src="images/Building Association of India .png">
      <img src="images/Carbon Green Credit.png">
      <img src="images/CII IGBC.png">
      <img src="images/concor.png">
      <img src="images/construction federation of india.png">
      <img src="images/CREDAI.png">
      <img src="images/CSIR.png">
      <img src="images/DGCA.png">
      <img src="images/federation of association of small industry in india.png">
      <img src="images/Gati Shakti.png">
      <img src="images/IBA .png">
      <img src="images/Indian Building Congress.png">
      <img src="images/Indian Chamber Congress.png">
      <img src="images/Indian Concrete Institute.png">
      <img src="images/Indian Road Congress.png">
      <img src="images/International Road Federation India Chapter.png">
      <img src="images/Invoice Mart.png">
      <img src="images/NAREDCO.png">
      <img src="images/Net zero Emission Mission.png">
      <img src="images/NSIC.png">
      <img src="images/Pavers and Blocks Manufactures Association.png">
      <img src="images/PHDCCI.png">
      <img src="images/Pre engineered structures society of India.png">
      <img src="images/RVNL.png">
      <img src="images/SIDBI.png">

      
      <!-- Repeat same set -->

      <img src="images/AAI.png">
      <img src="images/AMRUT.png">
      <img src="images/Ariel platform Association of India .png">
      <img src="images/ASSOCHAM.png">
      <img src="images/BCI.png">
      <img src="images/Building Association of India .png">
      <img src="images/Carbon Green Credit.png">
      <img src="images/CII IGBC.png">
      <img src="images/concor.png">
      <img src="images/construction federation of india.png">
      <img src="images/CREDAI.png">
      <img src="images/CSIR.png">
      <img src="images/DGCA.png">
      <img src="images/federation of association of small industry in india.png">
      <img src="images/Gati Shakti.png">
      <img src="images/IBA .png">
      <img src="images/Indian Building Congress.png">
      <img src="images/Indian Chamber Congress.png">
      <img src="images/Indian Concrete Institute.png">
      <img src="images/Indian Road Congress.png">
      <img src="images/International Road Federation India Chapter.png">
      <img src="images/Invoice Mart.png">
      <img src="images/NAREDCO.png">
      <img src="images/Net zero Emission Mission.png">
      <img src="images/NSIC.png">
      <img src="images/Pavers and Blocks Manufactures Association.png">
      <img src="images/PHDCCI.png">
      <img src="images/Pre engineered structures society of India.png">
      <img src="images/RVNL.png">
      <img src="images/SIDBI.png">


      <!-- Repeat same set -->

      <img src="images/AAI.png">
      <img src="images/AMRUT.png">
      <img src="images/Ariel platform Association of India .png">
      <img src="images/ASSOCHAM.png">
      <img src="images/BCI.png">
      <img src="images/Building Association of India .png">
      <img src="images/Carbon Green Credit.png">
      <img src="images/CII IGBC.png">
      <img src="images/concor.png">
      <img src="images/construction federation of india.png">
      <img src="images/CREDAI.png">
      <img src="images/CSIR.png">
      <img src="images/DGCA.png">
      <img src="images/federation of association of small industry in india.png">
      <img src="images/Gati Shakti.png">
      <img src="images/IBA .png">
      <img src="images/Indian Building Congress.png">
      <img src="images/Indian Chamber Congress.png">
      <img src="images/Indian Concrete Institute.png">
      <img src="images/Indian Road Congress.png">
      <img src="images/International Road Federation India Chapter.png">
      <img src="images/Invoice Mart.png">
      <img src="images/NAREDCO.png">
      <img src="images/Net zero Emission Mission.png">
      <img src="images/NSIC.png">
      <img src="images/Pavers and Blocks Manufactures Association.png">
      <img src="images/PHDCCI.png">
      <img src="images/Pre engineered structures society of India.png">
      <img src="images/RVNL.png">
      <img src="images/SIDBI.png">
   </div>
  </div>
<!------------------------------------------- end scroll icons ---------------------------------------------------->
    <!-------------------------------------------- Hero Section ------------------------------------------------------->
  <div aria-hidden="true" class="background-images">
   <img alt="Modern abstract art with vibrant colors and geometric shapes covering top left background" loading="lazy" src="./images/build.jpg"/>
   <img alt="Minimalist nature landscape featuring mountains and a calm lake at sunset covering top right background" loading="lazy" src="./images/vande bharat train.jpeg"/>
   <img alt="Futuristic cityscape at night with neon lights and skyscrapers covering bottom left background" loading="lazy" src="./images/India-Briefing-Ports.jpg"/>
   <img alt="Creative workspace with modern tech gadgets, laptop, and coffee cup on desk covering bottom right background" loading="lazy" src="./images/airport1.jpg"/>
  </div>
<!------------------------------------------------------- new navbar ------------------------------------------------------>
<nav
    class="fixed top-0   right-0 h-full w-12 bg-grey bg-opacity-80 backdrop-blur-md z-30 hidden md:flex flex-col items-center py-6">
    <!-- Logo -->
    <a href="#" class="mb-8">
      <img src="images/logo.png" alt="Logo"
        class="h-16 w-auto">
    </a>

    <!-- Menu Items -->
    <ul class="flex flex-col items-center space-y-24 text-white font-semibold text-lg">
      <li class="transform rotate-90 origin-center">
        <a href="./index.html" class="hover:text-indigo-400 transition">Home</a>
      </li>
      <li class="transform rotate-90 origin-center">
        <a href="./event_registration.html" class="hover:text-indigo-400 transition">Event_Registrations</a>
      </li>
      <li class="transform rotate-90 py-12 origin-center">
        <a href="./Stall_Booking.html" class="hover:text-indigo-400 transition">Stall Booking</a>
      </li>
      <!-- <li class="transform -rotate-90 origin-center">
        <a href="/" class="hover:text-indigo-400 transition">ABC</a>
      </li>
      <li class="transform -rotate-90 origin-center">
        <a href="/" class="hover:text-indigo-400 transition">ABC</a>
      </li>
      <li class="transform -rotate-90 origin-center">
        <a href="/" class="hover:text-indigo-400 transition">ABC</a>
      </li> -->
    </ul>



  </nav>

  <!-- left side nav bar herer -->

  <nav
    class="fixed top-0   left-0 h-full w-12 bg-grey bg-opacity-80 backdrop-blur-md z-30 hidden md:flex flex-col items-center py-6">
    <!-- Logo -->
    <a href="#" class="mb-8">
      <img src="images/logo.png" alt="Logo"
        class="h-16 w-auto">
    </a>

    <!-- Menu Items -->
    <ul class="space-y-28  text-white font-semibold text-lg">
      <!-- <li class="transform -rotate-90 origin-center"><a href="./index.html" class="hover:text-indigo-400 transition">Home</a></li>
      <li class="transform -rotate-90 origin-center"><a href="./Exhibitor.html" class="hover:text-indigo-400 transition">Exhibitor</a></li>
      <li class="transform -rotate-90 origin-center"><a href="./Visitor.html" class="hover:text-indigo-400 transition">Visitor</a></li> -->

      <li class="transform -rotate-90 origin-center">
        <a href="./index.html" class="hover:text-indigo-400 transition p-10">Home</a>
      </li>
      <li class="transform -rotate-90 origin-center">
        <a href="./event_registration.html" class="hover:text-indigo-400 transition">Event_Registrations</a>
      </li>
      <li class="transform -rotate-90 origin-center">
        <a href="./Stall_Booking.html" class="hover:text-indigo-400 transition">Stall Booking</a>
      </li>

    </ul>
  </nav>

  <!-- Mobile Navbar -->
  <div
    class="md:hidden fixed top-0 left-0 right-0 bg-grey bg-opacity-80 backdrop-blur-md z-30 flex items-center justify-between px-6 h-16">
    <a href="#">
      <img src="images/logo.png" alt="Logo"
        class="h-10 w-auto">
    </a>
    <button id="menu-btn" class="text-white text-2xl focus:outline-none">
      <i class="fa fa-bars"></i>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu"
    class="hidden md:hidden fixed top-16 left-0 w-full bg-black bg-opacity-90 backdrop-blur-md z-20">
    <ul class="flex flex-col items-center space-y-4 py-6 text-white font-semibold text-lg">
      <li><a href="./index.html" class="hover:text-indigo-400 transition">Home</a></li>
      <li><a href="./event_registration.html" class="hover:text-indigo-400 transition">Event_Registrations</a></li>
      <li><a href="./Stall_Booking.html" class="hover:text-indigo-400 transition">Stall Booking</a></li>
      
    </ul>
  </div>
<!------------------------------------------------------- end new navbar ------------------------------------------------------>
<!-------------------------------------------- Hero Section ------------------------------------------------------->
<!-- Page Wrapper -->
      <div class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">

        <!-- Left Side - Stall Cluster List -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h2 class="text-2xl font-bold text-blue-600 mb-4">Your Dream Stall Cluster</h2>
          <img src="images/Expomap.png" alt="Stall Cluster Image" class="rounded-lg mb-4 shadow">

          <table class="w-full border-collapse border text-sm text-left">
              <thead class="bg-blue-600 text-white">
                  <tr>
                      <th class="px-2 py-2 border">S.No.</th>
                      <th class="px-2 py-2 border">Stall No.</th>
                      <th class="px-2 py-2 border">Reserve Price</th>
                      <th class="px-2 py-2 border">Inclusions</th>
                      <th class="px-2 py-2 border">Exclusions</th>
                      <th class="px-2 py-2 border">Select</th>
                  </tr>
              </thead>
              <tbody>
                  <?php if (!empty($selected_stalls)): ?>
                      <?php foreach ($selected_stalls as $index => $stall): ?>
                          <tr>
                              <td class="border px-2 py-2"><?= $index+1 ?></td>
                              <td class="border px-2 py-2"><?= $stall['stall_no'] ?></td>
                              <td class="border px-2 py-2">₹<?= number_format($stall['price']) ?></td>
                              <td class="border px-2 py-2"><?= $stall['inclusions'] ?></td>
                              <td class="border px-2 py-2"><?= $stall['exclusions'] ?></td>
                              <td class="border px-2 py-2 text-center">
                                  <input type="radio" name="stall"
                                      onclick="document.getElementById('basePrice').value=<?= $stall['price'] ?>; enableForm(); calculatePrice();">
                              </td>
                          </tr>
                      <?php endforeach; ?>
                  <?php else: ?>
                      <tr>
                          <td colspan="6" class="text-center text-gray-500 py-4">No stalls available for this cluster.</td>
                      </tr>
                  <?php endif; ?>
              </tbody>
          </table>
        </div>


        <!-- Right Side - Reservation Form -->
        <div id="reservationForm" class="bg-white p-6 rounded-lg shadow-lg opacity-50 pointer-events-none">
            <h2 class="text-2xl font-bold text-blue-600 mb-4">Reserve Your Elite Space</h2>
            <p class="text-gray-600 mb-4">"A smart investment today secures your elite presence tomorrow."</p>

            <!-- Exhibitor Form -->
            <form class="space-y-3">
                <input type="text" placeholder="Company Name" class="w-full border rounded p-2">
                <input type="text" placeholder="Authorized Person Name" class="w-full border rounded p-2">
                <input type="email" placeholder="Email Address" class="w-full border rounded p-2">
                <input type="text" placeholder="Mobile Number" class="w-full border rounded p-2">
                <input type="text" placeholder="GST Number" class="w-full border rounded p-2">
                <input type="text" placeholder="Registered Office Address" class="w-full border rounded p-2">
            </form>

            <!-- Price Breakdown -->
            <div class="mt-6 border-t pt-4">
                <input type="hidden" id="basePrice" value="0">
                <input type="hidden" id="discountValue" value="0">

                <p class="text-gray-700">Discounted Basic Reserve Price: <span id="discountedBase">₹ 0</span></p>
                <p class="text-gray-700">GST (18%): <span id="gstValue">₹ 0</span></p>
                <p class="text-lg font-bold text-blue-700">Final Net Payment: <span id="finalTotal">₹ 0</span></p>
            </div>

            <!-- Coupon -->
            <div class="mt-4 flex space-x-2">
                <input id="couponCode" type="text" placeholder="Apply Coupon Code" class="flex-1 border rounded p-2">
                <button type="button" onclick="applyCoupon()"
                    class="bg-blue-600 text-white px-4 py-2 rounded">Apply</button>
            </div>

            <!-- Payment Options -->
            <div class="mt-6">
                <h3 class="font-semibold text-gray-700 mb-2">Select Payment Method</h3>
                <select class="w-full border rounded p-2">
                    <option>Credit/Debit Card</option>
                    <option>Net Banking</option>
                    <option>UPI</option>
                    <option>Wallet</option>
                </select>
            </div>

            <!-- CTA -->
            <button type="button" onclick="confirmBooking()"
                class="mt-6 w-full bg-green-600 text-white py-3 rounded-lg font-bold text-lg shadow hover:bg-green-700">
                Reserve & Pay Instantly
            </button>

            <!-- WhatsApp Support -->
            <div class="mt-4 text-center">
                <a href="https://wa.me/919999999999" class="text-blue-600 underline">Need Help? Chat on WhatsApp</a>
            </div>
        </div>
      </div>

    <!-- Confirmation Popup -->
    <div id="popup" class="hidden fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md text-center">
            <h2 class="text-2xl font-bold text-green-600 mb-2">Booking Confirmed!</h2>
            <p class="text-gray-700 mb-2">Your booking has been successfully confirmed, subject to payment realisation &
                Exhibitors Management Committee approval.</p>
            <p class="text-sm text-gray-500">Reference Code: RAZORPAY#123456</p>
            <button onclick="document.getElementById('popup').classList.add('hidden')"
                class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Close</button>
        </div>
    </div>









<!-------------------------------------------- End Hero Section ------------------------------------------------------->
<!--------------------------------------- Footer Section ----------------------------------------------------------->
  <div class="">
    <section class="w-full flex justify-center items-center py-6 px-4 relative">
      <img alt="Background image showing a group of people in a business event or trade show setting"
        class="absolute inset-0 w-full h-full object-cover opacity-90" height="150"
        src="https://storage.googleapis.com/a1aa/image/92cdd8d4-7fb7-48f9-4010-fb79b3ff216a.jpg" width="1920" />
      <h2
          class="relative text-center md:rounded-lg p-2 bg-[#0145f2] text-[#ffff] text-lg sm:text-xl md:text-2xl font-semibold max-w-4xl text-shadow: 1px 1px 2px gray;">
          Join India's Most Comprehensive B2B Trade Show and Propel Your Business to New Heights!
        </h2>
    </section>
    <footer
      class="bg-gradient-to-b bg-[#0145f2] text-white py-10 px-6 sm:px-12 flex flex-col sm:flex-row justify-between max-w-full mx-auto">
      <div class="mb-8 sm:mb-0 sm:w-1/3">
        <h3 class="font-bold text-lg mb-4">
          Quick Links
        </h3>
        <ul class="text-lg leading-5 space-y-1">
          <li><a href="./index.html">
              Home</a>
          </li>
          <li><a href="./event_registration.html" class="hover:text-indigo-400 transition">Event_Registrations</a>
          </li>
          <li><a href="./index.html">
              Stall Booking</a>
          </li>
          <li><a href="./admin_login.php">
              Admin Dashboard</a>
          </li>
          <li><a href="./admin_login.php">
              Admin Dashboard</a>
          </li>
          <li><a href="./Privacy_Policy.html">
              Privacy Policy</a>
          </li>
           <li><a href="./Business_Integrity_&_Compliance_Policy.html">
              Business Integrity & Compliance Policy</a>
          </li>
          <li><a href="./Cancellation_and_Refund_Policy.html">
              Cancellation_and_Refund_Policy</a>
          </li>
          <li><a href="./Shipping_&_Delivery_Policy.html">
              Shipping & Delivery Policy
          </li>
          <li><a href="./Terms_of_Use.html">
              Terms of Use</a>
          </li>
        </ul>
        <div class="flex space-x-4 mt-6">
            <a href="https://wa.me/919999999999" target="_blank" class="text-white text-2xl hover:text-green-400 transition">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://www.linkedin.com/company/infraconnectexpo2025" target="_blank" class="text-white text-2xl hover:text-blue-400 transition">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://www.facebook.com/profile.php?id=61579857385036&sk=about" target="_blank" class="text-white text-2xl hover:text-blue-500 transition">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/infraconnectexpo2025?utm_source=qr&igsh=bTd2aTV4dDJqdXlp" target="_blank" class="text-white text-2xl hover:text-pink-400 transition">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
      </div>
      <div class="mb-8 sm:mb-0 sm:w-1/3">
        <h3 class="font-bold text-lg mb-4">
          Venue:
        </h3>
        <h6><span class="flex items-center justify-start gap-2 mb-1">
            
         ⟟  Hall no. L3, Multipurpose Hall, Bharat Mandapam - Convention Centre, Pragati maidan, New Delhi - 110001 (India)</span></h6></br>
        <h3 class="font-bold text-lg mb-4">
          Date & Time:
        </h3>
        <h6><span class="flex items-center justify-start gap-2 mb-1">
            <i class="fas fa-calendar">
            </i>
           26, 27 & 28 November 2025</span></h6>
        <h6><span class="flex items-center justify-start gap-2 mb-1">
            <i class="fas fa-clock">
            </i>
           10:00 AM - 06:00 PM ( Daily )</span></h6>
      </div>
      <div class="mb-8 sm:mb-0 sm:w-1/3">
        <h3 class="font-bold text-lg mb-4">
          Direction Map
        </h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.3390942178958!2d77.2399441761572!3d28.619597484666954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce328e21150a5%3A0x1db02b6d0ba0702a!2sBharat%20Mandapam!5e0!3m2!1sen!2sin!4v1755777556327!5m2!1sen!2sin" width="200" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="sm:w-1/3 flex flex-col ">
        <h3 class="font-bold text-lg mb-4">
          Contact Us
        </h3>
        <h6><span class="flex items-center justify-start gap-2 mb-1">
            
         🏠 BluMart Global LLP</BR>  32A, JD- Block, Pitampura, New Delhi- 110034</span></h6></br>
        <p class="text-xs leading-5 space-y-1">
          
          <span class="flex items-center justify-start gap-2 mb-1 text-lg">
            <i class="fas fa-envelope">
            </i>
            info@infraconnectindia.com
          </span>
          <span class="flex items-center gap-2 mb-1 text-lg">
                        <i class="fas fa-phone">
                        </i>
                         Phone +91 8448796635
                    </span>
                    <span class="flex items-center gap-2 mb-1 text-lg">
                        <i class="fas fa-phone">
                        </i>
                        WhatsApp +91 8448796635
                    </span>
        </p>
      </div>
    </footer>
    <!-- WhatsApp Floating Button -->
<a href="https://wa.me/919999999999" target="_blank"
   class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 bg-[#0145f2] text-white 
          p-2 sm:p-3 rounded-full z-50 shadow-lg hover:bg-[#0145f2] transition">
  <!-- WhatsApp Icon -->
  <svg xmlns="http://www.w3.org/2000/svg" 
       class="h-5 w-5 sm:h-6 sm:w-6" 
       fill="currentColor" viewBox="0 0 24 24">
    <path d="M12.004 2.003c-5.514 0-9.997 4.483-9.997 9.997 0 1.763.463 3.48 1.34 4.998L2 22l5.142-1.342c1.47.799 3.126 1.215 4.862 1.215h.001c5.514 0 9.997-4.483 9.997-9.997 0-2.67-1.04-5.178-2.927-7.065A9.934 9.934 0 0 0 12.004 2.003zm.002 17.993c-1.52 0-2.998-.404-4.29-1.17l-.308-.183-3.05.796.814-2.973-.196-.306a7.943 7.943 0 0 1-1.234-4.364c0-4.411 3.588-8 8-8 2.14 0 4.148.833 5.656 2.342a7.94 7.94 0 0 1 2.342 5.657c0 4.412-3.588 8-8.034 8zm4.355-5.89c-.237-.118-1.398-.688-1.616-.767-.217-.08-.376-.118-.535.118-.158.237-.615.767-.754.925-.139.158-.277.178-.514.06-.237-.118-1.002-.369-1.91-1.175-.707-.63-1.185-1.409-1.324-1.646-.139-.237-.014-.365.104-.482.107-.106.237-.277.356-.415.119-.138.158-.237.237-.395.079-.158.04-.297-.02-.415-.06-.118-.535-1.289-.733-1.763-.193-.464-.39-.401-.535-.408l-.456-.008c-.158 0-.415.06-.634.297s-.832.813-.832 1.982.853 2.303.971 2.462c.118.158 1.677 2.56 4.063 3.587.568.245 1.01.392 1.354.502.569.181 1.088.155 1.497.094.457-.068 1.398-.571 1.595-1.122.197-.55.197-1.021.139-1.122-.059-.1-.217-.158-.454-.277z"/>
  </svg>
</a>
    <div class="bg-white text-center text-xs text-gray-700 py-2">
      Copyright © 2025 Infra Connect Expo ( ICE 2025 ) | Designed & Developed by BluMart Global LLP
    </div>
    <button aria-label="Scroll to top" class="fixed bottom-2 right-2 bg-black text-white p-1 rounded-sm"
      onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
      <i class="fas fa-angle-up">
      </i>
    </button>
  </div>
  
<!--------------------------------------- End Footer Section ------------------------------------------------------->   
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
<!-- JS for Zoom Image -->
<script>
  function enlargeImage(img) {
    const newTab = window.open(img.src, "_blank");
    newTab.focus();
  }
</script>
<!-- Image Zoom Script -->
<script>
  function enlargeImage(img) {
    // Create modal container
    const modal = document.createElement("div");
    modal.className = "fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50";

    // Create enlarged image
    const enlargedImg = document.createElement("img");
    enlargedImg.src = img.src;
    enlargedImg.className = "max-h-[90%] max-w-[90%] rounded-lg shadow-lg";

    // Close on click
    modal.appendChild(enlargedImg);
    modal.onclick = () => modal.remove();

    document.body.appendChild(modal);
  }
</script>
   <script>
        function enableForm() {
            document.getElementById("reservationForm").classList.remove("opacity-50", "pointer-events-none");
        }

        function calculatePrice() {
            let base = parseFloat(document.getElementById("basePrice").value) || 0;
            let discount = parseFloat(document.getElementById("discountValue").value) || 0;

            let discountedBase = base - (base * (discount / 100));
            let gst = discountedBase * 0.18;
            let total = discountedBase + gst;

            document.getElementById("discountedBase").innerText = "₹ " + discountedBase.toFixed(2);
            document.getElementById("gstValue").innerText = "₹ " + gst.toFixed(2);
            document.getElementById("finalTotal").innerText = "₹ " + total.toFixed(2);
        }

        function applyCoupon() {
            let code = document.getElementById("couponCode").value;
            if (code === "SMART10") {
                document.getElementById("discountValue").value = 10;
            } else {
                document.getElementById("discountValue").value = 0;
            }
            calculatePrice();
        }

        function confirmBooking() {
            document.getElementById("popup").classList.remove("hidden");
        }
    </script>
</body>
</html>