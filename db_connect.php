<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "hotel_booking_system";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>