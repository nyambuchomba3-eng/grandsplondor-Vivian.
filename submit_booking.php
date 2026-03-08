<?php
// Database connection
$host = "localhost";
$user = "root";
$password = "";
$dbname = "hotel_booking_system";

$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Collect form data safely
$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$event_category = $_POST['event_category'];
$event_type = $_POST['event_type'];

$capacity = $_POST['capacity'];
$color_theme = $_POST['color_theme'];
$venue= $_POST['venue'];
$venue_type = $_POST['venue_type'];
$indoor_venue = $_POST['indoor_venue'];
$outdoor_venue = $_POST['outdoor_venue'];
$furniture = $_POST['furniture'];
$refreshments_details = $_POST['refreshments_details'];
$catering_required = $_POST['catering_required'];

$pa_system = $_POST['pa_system'];

$accommodation_requirements = $_POST['accommodation_requirements'] ?? NULL;
$lingual_services = $_POST['lingual_services'] ?? NULL;
$additional_notes = $_POST['additional_notes'] ?? NULL;

// SQL INSERT
$sql = "INSERT INTO bookings 
(
    full_name, phone, email,
    event_category, event_type,
    capacity, color_theme,venue,venue_type,indoor_venue,outdoor_venue,
furniture,refreshments_details,catering_required, pa_system,
    accommodation_requirements, lingual_services, additional_notes
)
VALUES
(
    '$full_name', '$phone', '$email',
    '$event_category', '$event_type',
    '$capacity', '$color_theme', '$venue','$venue_type','$indoor_venue',
	'$outdoor_venue','$furniture','$refreshments_details','$catering_required','$pa_system',
    '$accommodation_requirements', '$lingual_services', '$additional_notes'
)";

// Execute query
if (mysqli_query($conn, $sql)) {
        // Success → redirect or show confirmation
        header("Location: ../events.php?status=success");		
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
?>
