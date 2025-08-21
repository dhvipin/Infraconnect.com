<?php
require 'db.php';

if (!isset($_POST['qr'])) {
    echo "No QR code data received.";
    exit;
}

$qr = $_POST['qr'];
preg_match('/ID:(\d+)/', $qr, $matches);

if (!isset($matches[1])) {
    echo "Invalid QR code format.";
    exit;
}

$userId = (int)$matches[1];

// Function to check and verify in a specific table
function verifyUser($conn, $userId, $tableName) {
    $sql = "SELECT name, is_verified FROM $tableName WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) return false;

    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) return false;

    $row = $result->fetch_assoc();

    if ($row['is_verified']) {
        echo "<span style='color:orange;'>Already Verified: <strong>" . htmlspecialchars($row['name']) . "</strong> ($tableName)</span>";
    } else {
        $update = $conn->prepare("UPDATE $tableName SET is_verified = 1, verified_at = NOW() WHERE id = ?");
        $update->bind_param("i", $userId);
        $update->execute();
        echo "<span style='color:green;'>Access Granted: <strong>" . htmlspecialchars($row['name']) . "</strong> ($tableName)</span>";
    }
    return true;
}

// Try verifying from exhibitordata
if (!verifyUser($conn, $userId, 'exhibitordata')) {
    // Try verifying from visitordata
    if (!verifyUser($conn, $userId, 'visitordata')) {
        echo "<span style='color:red;'>User not found in either table.</span>";
    }
}
?>
