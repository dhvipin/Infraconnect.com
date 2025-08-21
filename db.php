<?php
$conn = new mysqli("localhost", "u380474831_infraconnect", "8DURGA@123a", "u380474831_infraconnect");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>