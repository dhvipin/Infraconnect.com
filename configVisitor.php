<?php
session_start();
require 'db.php';
require 'phpqrcode/qrlib.php';
require("fpdf186/fpdf.php");  // include FPDF library
// Load PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Collect and sanitize inputs
    $firstName            = trim($_POST['firstName'] ?? '');
    $middleName            = trim($_POST['middleName'] ?? '');
    $lastName            = trim($_POST['lastName'] ?? '');
    $companyName         = trim($_POST['companyName'] ?? '');
    $gstin               = trim($_POST['gstin'] ?? '');
    $companyUrl          = trim($_POST['companyUrl'] ?? '');
    $email             = trim($_POST['emailId'] ?? '');
    $location            = trim($_POST['location'] ?? '');
    $state               = trim($_POST['stateText'] ?? ($_POST['state'] ?? ''));
    $pincode             = trim($_POST['pincode'] ?? '');
    $country             = trim($_POST['country'] ?? '');
    $businessDescription = trim($_POST['businessDescription'] ?? '');
    $businessProductsServices = trim($_POST['businessProductsServices'] ?? '');
    $businessCategory    = trim($_POST['businessCategory'] ?? '');
    $otherCategory       = trim($_POST['otherCategory'] ?? '');
    $businessProducts    = trim($_POST['businessProducts'] ?? '');
    $socialEmail         = trim($_POST['socialEmail'] ?? '');
    $socialPhone         = trim($_POST['socialPhone'] ?? '');
    $businessCard       = trim($_POST['businessCard'] ?? '');
    $consent             = isset($_POST['consent']) ? 1 : 0;
    $consent2             = isset($_POST['consent2']) ? 1 : 0;

    // Handle file upload
    $businessCardPath = null;
    if (!empty($_FILES['businessCard']['name']) && $_FILES['businessCard']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . "/uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $fileName = time() . "_" . preg_replace("/[^a-zA-Z0-9\._-]/", "_", $_FILES['businessCard']['name']);
        $businessCardPath = "uploads/" . $fileName;
        move_uploaded_file($_FILES['businessCard']['tmp_name'], $uploadDir . $fileName);
    }

    // Insert into DB
    $stmt = $conn->prepare("INSERT INTO visitors_data (firstName, middleName, lastName, companyName, gstin, companyUrl, emailId, location, state, pincode, country,
        businessDescription, businessProductsServices, businessCategory, otherCategory, businessProducts,
        socialEmail, socialPhone, businessCard, consent, consent2) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param(
        "sssssssssssssssssssii",
        $firstName, $middleName, $lastName, $companyName, $gstin, $companyUrl, $email, $location, $state, $pincode, $country,
        $businessDescription, $businessProductsServices, $businessCategory, $otherCategory, $businessProducts,
        $socialEmail, $socialPhone, $businessCardPath, $consent, $consent2
    );

$stmt->execute();
$userId = $stmt->insert_id;
$stmt->close();

 // Send email
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'registrations@infraconnectindia.com'; // your Hostinger email
        $mail->Password   = '8Infraconnect123@';         // your Hostinger email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 465;

        // OPTIONAL: Send email notification
         $to = "registrations@infraconnectindia.com , $email";
        $subject = "Submitted Infra Connect Expo 2025 Registration  - $companyName";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $emailBody  = "Infra Connect Expo 2025\n\n";
        $emailBody  = "Thank you for registered has been done.\n\n";
        $emailBody .= "Firstame: $firstName\n";
        $emailBody .= "Company Name: $companyName\n";
        $emailBody .= "GSTIN Number: $gstin\n";
        $emailBody .= "Company URL: $companyUrl\n";
        $emailBody .= "Email: $email\n";
        $emailBody .= "Address: $location\n";
        $emailBody .= "State: $state\n";
        $emailBody .= "Pincode: $pincode\n";
        $emailBody .= "Country: $country\n";
        $emailBody .= "Business Description: $businessDescription\n";
        $emailBody .= "Business Products Services: $businessProductsServices\n";
        $emailBody .= "Business Category: $businessCategory\n";
        $emailBody .= "Other Category: $otherCategory\n";
        $emailBody .= "Business Products: $businessProducts\n";
        $emailBody .= "Social Email: $socialEmail\n";
        $emailBody .= "Social Phone: $socialPhone\n";       

        mail($to, $subject, $emailBody, $headers);

// Generate QR
$qrData = "ENTRY|ID:$userId|NAME:$name|PHONE:$phone";
$qrFile = "qrcodes/user_$userId.png";
QRcode::png($qrData, $qrFile, QR_ECLEVEL_H, 5);

// Save session and redirect
$_SESSION['user_id'] = $userId;
header("Location: qr_visitor_page.php");
exit;
?>