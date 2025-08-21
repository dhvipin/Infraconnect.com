<?php
require 'db.php';
header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=verified_users.csv');

$output = fopen("php://output", "w");
fputcsv($output, ['ID', 'Name', 'Email', 'Phone', 'Company', 'Verified At']);

$result = $conn->query("SELECT id, name, email, phone, company, verified_at FROM exhibitordata WHERE is_verified = 1");
while ($row = $result->fetch_assoc()) {
  fputcsv($output, $row);
}
fclose($output);
?>