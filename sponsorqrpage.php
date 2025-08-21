<?php
session_start();
require 'db.php';

// Check if session variable exists and is numeric
if (!isset($_SESSION['exhibition_user_id']) || !is_numeric($_SESSION['exhibition_user_id'])) {
    echo "No QR code found. Please register first.";
    exit;
}

$userId = intval($_SESSION['exhibition_user_id']); // Convert to integer for safety

// Use prepared statement to avoid SQL errors and injection
$stmt = $conn->prepare("SELECT firstName, socialPhone FROM sponsors WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "No record found. Please register first.";
    exit;
}

$user = $result->fetch_assoc();
$stmt->close();

$qrFile = "qrcodes/user_$userId.png";

// Clear session
unset($_SESSION['exhibition_user_id']);
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICE Expo-2025 QR Code</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com">  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
      <style>
      
      
      #pdf-content {
  page-break-inside: avoid;
}
      
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
        <a href="./index.php" class="hover:text-indigo-400 transition">Home</a>
      </li>
      <li class="transform rotate-90 origin-center">
        <a href="./event_registration.php" class="hover:text-indigo-400 transition">Event_Registrations</a>
      </li>
      <li class="transform rotate-90 py-12 origin-center">
        <a href="./Stall_Booking.php" class="hover:text-indigo-400 transition">Stall Booking</a>
      </li>

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

      <li class="transform -rotate-90 origin-center">
        <a href="./index.php" class="hover:text-indigo-400 transition p-10">Home</a>
      </li>
      <li class="transform -rotate-90 origin-center">
        <a href="./event_registration.php" class="hover:text-indigo-400 transition">Event_Registrations</a>
      </li>
      <li class="transform -rotate-90 origin-center">
        <a href="./Stall_Booking.php" class="hover:text-indigo-400 transition">Stall Booking</a>
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
      <li><a href="./index.php" class="hover:text-indigo-400 transition">Home</a></li>
      <li><a href="./event_registration.php" class="hover:text-indigo-400 transition">Event_Registrations</a></li>
      <li><a href="./Stall_Booking.php" class="hover:text-indigo-400 transition">Stall Booking</a></li>
    </ul>
  </div>
<!------------------------------------------------------- end new navbar ------------------------------------------------------>
        <!-------------------------------------------- Hero Section ------------------------------------------------------->
  <div aria-hidden="true" class="background-images">
   <img alt="Modern abstract art with vibrant colors and geometric shapes covering top left background" loading="lazy" src="./images/build.jpg"/>
   <img alt="Minimalist nature landscape featuring mountains and a calm lake at sunset covering top right background" loading="lazy" src="./images/vande bharat train.jpeg"/>
   <img alt="Futuristic cityscape at night with neon lights and skyscrapers covering bottom left background" loading="lazy" src="./images/India-Briefing-Ports.jpg"/>
   <img alt="Creative workspace with modern tech gadgets, laptop, and coffee cup on desk covering bottom right background" loading="lazy" src="./images/airport1.jpg"/>
  </div>

  <section class="relative max-w-full mx-auto px-6 py-16 flex flex-col items-center justify-center min-h-screen text-center text-white">
   <div class="max-w-full mx-auto"  >
    
    <div class="bg-white rounded-xl mt-4 max-w-8xl flex flex-col sm:flex-row overflow-hidden shadow-lg transition-shadow duration-300 ease-in-out hover:shadow-2xl">
     <div class="flex flex-col items-center justify-center sm:flex-row w-full  p-6 sm:p-8 space-y-6">
      <!-- <div class="flex flex-col sm:w-1/2 p-6 sm:p-8 space-y-6"> -->
       
       


       <div class="text-2xl text-gray-700 leading-tight flex flex-col items-center justify-center"  id="pdf-content">
        <h2>Thank you for registered has been done.</h2><br>
    <h3>Your reference ID is :- 1224</h3><br>
    <p>Your Approval for registration is subject to the Approval by the Management Committee.</p>
    <p> You shall be intimated shortly, as soon as possible, as it is approved.</p><br>
    <p>Thanks for your understanding.</p>
    <p>Team</p>
    <p>Rudra Events</p>
        <p class="font-semibold text-orange-600 mb-1">
         Showcase Your Innovations at 
         <span class="font-bold">
          ICE Expo 2025 – InfraConnect India
         </span>
        </p>
  <p>Thank you</p>
  <p>Registered QR code:</p>
  <img src="<?php echo $qrFile; ?>" alt="QR Code" />
  <p class="text-xs">for any further Queries, Please Connect Below.<br>Mobile : +91 9XXXX 9XXXX<br>Email Address: info.registrations@rudraevents.com</p>
   <button onclick="downloadPDF()" class="mt-6 bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700 transition">
    Print Out
  </button>
  <p class="text-xs">Please take print / Screenshot of this page for further reference.</p>
        </div>
    </div>
   </div>
</div>
  </section>
<!--------------------------------------- Footer Section ----------------------------------------------------------->
<div class="">
  <section class="w-full flex justify-center items-center py-6 px-4 relative">
   <img alt="Background image showing a group of people in a business event or trade show setting" class="absolute inset-0 w-full h-full object-cover opacity-70" height="150" src="https://storage.googleapis.com/a1aa/image/92cdd8d4-7fb7-48f9-4010-fb79b3ff216a.jpg" width="1920"/>
   <h2 class="relative text-center text-[#5194c8] text-lg sm:text-xl md:text-2xl font-semibold max-w-4xl text-shadow: 1px 1px 2px gray;">
    Join India's Most Comprehensive B2B Trade Show and Propel Your Business to New Heights!
   </h2>
  </section>
  <footer class="bg-gradient-to-b from-[#5194c8] to-[#002366] text-white py-10 px-6 sm:px-12 flex flex-col sm:flex-row justify-between max-w-full mx-auto">
   <div class="mb-8 sm:mb-0 sm:w-1/3">
    <h3 class="font-bold text-lg mb-4">
     Quick Links
    </h3>
    <ul class="text-xs leading-5 space-y-1">
     <li><a href="./index.php">
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
     <li><a href="./index.php">
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
function downloadPDF() {
  const element = document.getElementById('pdf-content'); // 👈 target only content div
  const opt = {
    margin: 0.2,
    filename: 'ICE_Expo_Registration.pdf',
    image: { type: 'jpeg', quality: 0.98 },
    html2canvas: { scale: 2, useCORS: true, scrollY: 0 },
    jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' },
    pagebreak: { mode: ['css', 'legacy'] }
  };

  html2pdf().set(opt).from(element).save();
}
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
