<?php
require("fpdf186/fpdf.php");  // include FPDF library

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    // Create PDF
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 16);

    $pdf->Cell(0, 10, "User Details", 0, 1, "C");
    $pdf->Ln(10);

    $pdf->SetFont("Arial", "", 12);
    $pdf->Cell(0, 10, "Name: " . $name, 0, 1);
    $pdf->Cell(0, 10, "Email: " . $email, 0, 1);
    $pdf->MultiCell(0, 10, "Message: " . $message);

    // Save PDF to server
    $fileName = "ICE_Registered.pdf";
    $pdf->Output("F", $fileName); // Save file
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PDF Generated</title>
</head>
<body>
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
</body>
</html>
