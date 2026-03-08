<?php
// Database connection settings
$host = "localhost";
$user = "root";        // default XAMPP user
$password = "";        // default XAMPP password
$database = "hotel_booking_system";

// Create connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
