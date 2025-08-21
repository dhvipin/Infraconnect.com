<?php
session_start();
require 'db.php';
require 'phpqrcode/qrlib.php';

// Get form values
$name     = $_POST['name'];
$address  = $_POST['address'];
$location = $_POST['location'];
$aadhar   = $_POST['aadhar'];
$pan      = $_POST['pan'];
$email    = $_POST['email'];
$phone    = $_POST['phone'];
$type     = $_POST['Corporate']; // radio button name

// Handle file uploads
$socialScreenshotPath = '';
$idPhotoPath = '';

if (isset($_FILES['social_screenshot']) && $_FILES['social_screenshot']['error'] == 0) {
    $socialScreenshotPath = 'uploads/' . basename($_FILES['social_screenshot']['name']);
    move_uploaded_file($_FILES['social_screenshot']['tmp_name'], $socialScreenshotPath);
}

if (isset($_FILES['id_photo']) && $_FILES['id_photo']['error'] == 0) {
    $idPhotoPath = 'uploads/' . basename($_FILES['id_photo']['name']);
    move_uploaded_file($_FILES['id_photo']['tmp_name'], $idPhotoPath);
}

// Insert into DB
$stmt = $conn->prepare("
    INSERT INTO visitors
    (name, address, location, aadhar, pan, email, phone, type, social_screenshot, id_photo) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "ssssssssss",
    $name, $address, $location, $aadhar, $pan, $email, $phone, $type, $socialScreenshotPath, $idPhotoPath
);

$stmt->execute();
$userId = $stmt->insert_id;
$stmt->close();

// Generate QR
$qrData = "ENTRY|ID:$userId|NAME:$name|PHONE:$phone";
$qrFile = "qrcodes/user_$userId.png";
QRcode::png($qrData, $qrFile, QR_ECLEVEL_H, 5);

// Save session and redirect
$_SESSION['user_id'] = $userId;
header("Location: qr_visitor_page.php");
exit;
?>