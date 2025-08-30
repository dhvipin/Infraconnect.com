<?php
require("fpdf186/fpdf.php");  // include FPDF library

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'];
    $address  = $_POST['address'];
    $location = $_POST['location'];
    $aadhar   = $_POST['aadhar'];
    $pan      = $_POST['pan'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $type     = $_POST['Corporate'];

    // Create PDF
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 16);

    $pdf->Cell(0, 10, "User Details", 0, 1, "C");
    $pdf->Ln(10);

    $pdf->SetFont("Arial", "", 12);
    $pdf->Cell(0, 10, "Name: " . $name, 0, 1);
    $pdf->Cell(0, 10, "address: " . $address, 0, 1);
    $pdf->Cell(0, 10, "location: " . $location, 0, 1);
    $pdf->Cell(0, 10, "aadhar: " . $aadhar, 0, 1);
    $pdf->Cell(0, 10, "pan: " . $pan, 0, 1);
    $pdf->Cell(0, 10, "Phone: " . $phone, 0, 1);
    $pdf->MultiCell(0, 10, "type: " . $message);

    // Save PDF to server
    $fileName = "user_details.pdf";
    $pdf->Output("F", $fileName); // Save file
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICE Expo-2025 Exhibitor</title>
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
  .icons-slider-left img,
  .icons-slider-right img {
    height: 30px;
    margin: 0 10px;
  }
}
/* ------------------------------------------------------------------------- */
 .form-wrapper {
            width: 100%;
            max-width: 900px;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

         .form-wrapper h1 {
            text-align: center;
            color: #222;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
        }

        .tab-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 20px;
            gap: 8px;
        }

        .tab {
            padding: 10px 16px;
            background: #e0e0e0;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .tab:hover {
            background: #d0d0d0;
        }

        .tab.active {
            /* background: #007bff; */
            color: white;

            background-color: #002366;
        }

        .forms {
            position: relative;
        }

        .form-box {
            display: none;
            flex-direction: column;
            gap: 15px;
            animation: fadeIn 0.4s ease-in-out;
        }

        .form-box.active-form {
            display: flex;
        }

        .form-box h2 {
            margin-bottom: 10px;
            color: #333;
            font-size: 24px;
            font-weight: 600;
        }

        .form-box input,
        .form-box textarea {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
            resize: none;
        }

        .form-box button {
            margin-top: 10px;

            /* background-color: #008080; */
            /* background: #28a745; */
            color: white;
            padding: 5px;
            font-size: 1rem;
            border: solid black 1px;
            cursor: pointer;
            transition: 0.3s;
        }

        .form-box button:hover {
            /* background: #218838; */
        }



        /* From Uiverse.io by Gaurav-WebDev */
        .button {
            height: 50px;
            width: 150px;
            border: 12px;
            /* border: none; */
            border-radius: 10px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.5s ease-in-out;
        }

        .button:hover {
            box-shadow: .5px .5px 150px #252525;
        }

        .type1::after {
            content: "Thanks";
            height: 50px;
            width: 150px;
            background-color: #002366;
            color: #fff;
            position: absolute;
            top: 0%;
            left: 0%;
            transform: translateY(50px);
            font-size: 1.2rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.5s ease-in-out;
        }

        .type1::before {
            content: "Submit";
            height: 50px;
            width: 150px;
            /* border: 12px; */
            background-color: #fff;
            color: #002366;
            position: absolute;
            top: 0%;
            left: 0%;
            transform: translateY(0px) scale(1.2);
            font-size: 1.2rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.5s ease-in-out;
        }

        /* .type1:hover::after {
            transform: translateY(0) scale(1.2);
        }

        .type1:hover::before {
            transform: translateY(-50px) scale(0) rotate(120deg);
        } */

        .type1.clicked::after {
            transform: translateY(0) scale(1.2);
        }

        .type1.clicked::before {
            transform: translateY(-50px) scale(0) rotate(120deg);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
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
      <li class="transform rotate-90 origin-center">
        <a href="./Visitor.html" class="hover:text-indigo-400 transition">Visitor</a>
      </li>
      <li class="transform rotate-90 origin-center">
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
      <!-- <li class="transform -rotate-90 origin-center"><a href="./index.php" class="hover:text-indigo-400 transition">Home</a></li>
      <li class="transform -rotate-90 origin-center"><a href="./Exhibitor.html" class="hover:text-indigo-400 transition">Exhibitor</a></li>
      <li class="transform -rotate-90 origin-center"><a href="./Visitor.html" class="hover:text-indigo-400 transition">Visitor</a></li> -->

      <li class="transform -rotate-90 origin-center">
        <a href="./index.php" class="hover:text-indigo-400 transition p-10">Home</a>
      </li>
      <li class="transform -rotate-90 origin-center">
        <a href="./event_registration.php" class="hover:text-indigo-400 transition">Event_Registrations</a>
      </li>
      <li class="transform -rotate-90 origin-center">
        <a href="./Visitor.html" class="hover:text-indigo-400 transition">Visitor</a>
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
      <li><a href="./Visitor.html" class="hover:text-indigo-400 transition">Visitor</a></li>
    </ul>
  </div>
<!------------------------------------------------------- end new navbar ------------------------------------------------------>
<!-------------------------------------------- Hero Section ------------------------------------------------------->
<div class="form-wrapper mt-16 mb-10 p-16 bg-[#e0e5ec]">
       <h2>Thank you for registered has been done.</h2>
    <h3>Your reference ID is :- 1224</h3>
    <p> Your Approval will be send to your email within 24 hours.</p>
    <p>Your Approval for registration is subject to the Approval by the Management Committee.</p>
    <iframe src="user_details.pdf" width="50%" height="500px"></iframe>
    <br><br>
    <a href="user_details.pdf" download>
        <button>Download PDF</button>
    </a>
    <a href="index.php">
        <button>Back to Home</button>
    </a>
</div>

<!-------------------------------------------- End Hero Section ------------------------------------------------------->
<!--------------------------------------- Footer Section ----------------------------------------------------------->
<div class="">
  <section class="w-full flex justify-center items-center py-6 px-4 relative">
   <img alt="Background image showing a group of people in a business event or trade show setting" class="absolute inset-0 w-full h-full object-cover opacity-90" height="150" src="https://storage.googleapis.com/a1aa/image/92cdd8d4-7fb7-48f9-4010-fb79b3ff216a.jpg" width="1920"/>
   <h2 class="relative text-center text-[#ffff] text-lg sm:text-xl md:text-2xl font-semibold max-w-4xl text-shadow: 1px 1px 2px gray;">
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
     <li><a href="./event_registration.php" class="hover:text-indigo-400 transition">Event_Registrations</a>
     </li>
     <li><a href="./Visitor.html">
      Visitors</a>
     </li>
     <li><a href="./Stall_Booking.php">
      Stall Booking</a>
     </li>
     <li><a href="./admin_login.php">
      Admin Dashboard</a>
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
  L-3, MULTIPURPOSE HALL BHARAT MANDAPAM <br>
            CONVENTION CENTRE PRAGATI MAIDAN NEW DELHI 110001<br>
            26-27-28 NOVEMBER 2025 10:00AM TO 6:00PM
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
   Copyright © 2025 Infra Connect Expo ( ICE 2025 ) | Designed & Developed by BluMart Global LLP
  </div>
  <button aria-label="Scroll to top" class="fixed bottom-2 right-2 bg-black text-white p-1 rounded-sm" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
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
    <script>
        function showForm(formId) {
            // Hide all forms
            document.querySelectorAll('.form-box').forEach(form => {
                form.classList.remove('active-form');
            });

            // Remove active class from all tabs
            document.querySelectorAll('.tab').forEach(tab => {
                tab.classList.remove('active');
            });

            // Show selected form
            document.getElementById(formId).classList.add('active-form');

            // Activate corresponding tab
            const tabIndex = {
                visitor: 0,
                exhibition: 1,
                b2b: 2,
                panel: 3,
                presentation: 4,
                sponsor: 5,
                GalaDinner: 6
            }[formId];

            document.querySelectorAll('.tab')[tabIndex].classList.add('active');
        }



        function animateClick(button) {
            button.classList.add("clicked");

            // Optional: reset after 2 seconds
            setTimeout(() => {
                button.classList.remove("clicked");
            }, 2000);
        }
// ------------------------- new form cust --------------------------------//
 function animateClick(button) {
            button.classList.add("clicked");

            // Optional: reset after 2 seconds
            setTimeout(() => {
                button.classList.remove("clicked");
            }, 2000);
        }
        const countrySelect = document.getElementById('country');
        const stateSelect = document.getElementById('state');
        const stateText = document.getElementById('stateText');
        const stateRequiredMark = document.getElementById('stateRequiredMark');

        const indiaStates = [
            "Andhra Pradesh",
            "Arunachal Pradesh",
            "Assam",
            "Bihar",
            "Chhattisgarh",
            "Goa",
            "Gujarat",
            "Haryana",
            "Himachal Pradesh",
            "Jharkhand",
            "Karnataka",
            "Kerala",
            "Madhya Pradesh",
            "Maharashtra",
            "Manipur",
            "Meghalaya",
            "Mizoram",
            "Nagaland",
            "Odisha",
            "Punjab",
            "Rajasthan",
            "Sikkim",
            "Tamil Nadu",
            "Telangana",
            "Tripura",
            "Uttar Pradesh",
            "Uttarakhand",
            "West Bengal",
            "Delhi",
            "Jammu and Kashmir",
            "Ladakh",
            "Puducherry",
            "Chandigarh",
            "Andaman and Nicobar Islands",
            "Dadra and Nagar Haveli and Daman and Diu",
            "Lakshadweep"
        ];

        countrySelect.addEventListener('change', () => {
            if (countrySelect.value === 'India') {
                // Enable select dropdown for states with India states
                stateSelect.disabled = false;
                stateSelect.required = false;
                stateSelect.classList.remove('bg-gray-100', 'cursor-not-allowed');
                stateSelect.classList.add('bg-white', 'cursor-pointer');
                stateSelect.innerHTML = '<option value="">Select State</option>';
                indiaStates.forEach(state => {
                    const option = document.createElement('option');
                    option.value = state;
                    option.textContent = state;
                    stateSelect.appendChild(option);
                });
                // Hide and disable text input for state
                stateText.classList.add('hidden');
                stateText.required = false;
                stateText.value = '';
                // Show required mark for select
                stateRequiredMark.classList.add('hidden');
                stateSelect.required = true;
            } else if (countrySelect.value === '') {
                // No country selected, disable both inputs
                stateSelect.disabled = true;
                stateSelect.required = false;
                stateSelect.classList.add('bg-gray-100', 'cursor-not-allowed');
                stateSelect.classList.remove('bg-white', 'cursor-pointer');
                stateSelect.innerHTML = '<option value="">Select State</option>';

                stateText.classList.add('hidden');
                stateText.required = false;
                stateText.value = '';

                stateRequiredMark.classList.add('hidden');
                stateSelect.required = false;
            } else {
                // Other country selected, enable text input for state
                stateSelect.disabled = true;
                stateSelect.required = false;
                stateSelect.classList.add('bg-gray-100', 'cursor-not-allowed');
                stateSelect.classList.remove('bg-white', 'cursor-pointer');
                stateSelect.innerHTML = '<option value="">Select State</option>';

                stateText.classList.remove('hidden');
                stateText.required = true;
                // Show required mark for text input
                stateRequiredMark.classList.remove('hidden');
            }
        });

        const businessCategorySelect = document.getElementById('businessCategory');
        const otherCategoryWrapper = document.getElementById('otherCategoryWrapper');
        const otherCategoryInput = document.getElementById('otherCategory');

        businessCategorySelect.addEventListener('change', () => {
            if (businessCategorySelect.value === 'Other') {
                otherCategoryWrapper.classList.remove('hidden');
                otherCategoryInput.setAttribute('required', 'required');
            } else {
                otherCategoryWrapper.classList.add('hidden');
                otherCategoryInput.removeAttribute('required');
                otherCategoryInput.value = '';
            }
        });

        function animateClick(button) {
            button.classList.add("clicked");
            setTimeout(() => {
                button.classList.remove("clicked");
            }, 2000);
        }

        // Optional: form submission handler to prevent default and show alert
        document.getElementById('visitorForm').addEventListener('submit', function (e) {
            e.preventDefault();
            if (!this.checkValidity()) {
                this.reportValidity();
                return;
            }
            alert('Form submitted successfully!');
            this.reset();
            // Reset state select and text input
            stateSelect.disabled = true;
            stateSelect.classList.add('bg-gray-100', 'cursor-not-allowed');
            stateSelect.classList.remove('bg-white', 'cursor-pointer');
            stateSelect.innerHTML = '<option value="">Select State</option>';

            stateText.classList.add('hidden');
            stateText.required = false;
            stateText.value = '';

            stateRequiredMark.classList.add('hidden');

            otherCategoryWrapper.classList.add('hidden');
            otherCategoryInput.removeAttribute('required');
        });
    </script>
</body>
</html>