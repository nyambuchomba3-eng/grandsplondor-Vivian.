<?php
/* ============================================
   DATABASE CONNECTION
   ============================================ */
require_once "../admin/db_connect.php";

/* ============================================
   ENSURE FORM IS SUBMITTED
   ============================================ */
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Invalid request.");
}

/* ============================================
   COLLECT FORM DATA
   ============================================ */
$id = $_POST['id'];
$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
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
$booking_status = $_POST['booking_status'];

/* ============================================
   SQL UPDATE QUERY
   ============================================ */
$sql = "UPDATE bookings SET
            full_name = '$full_name',
            phone = '$phone',
            email = '$email',
            event_type = '$event_type',
            capacity = '$capacity',
			color_theme = '$color_theme',
			venue = '$venue',
			venue_type = '$venue_type',
			indoor_venue = '$indoor_venue ',
			outdoor_venue = '$outdoor_venue',
            furniture = '$furniture ',
            refreshments_details = '$refreshments_details',
            catering_required = '$catering_required',
            booking_status = '$booking_status'
        WHERE id = $id";

/* ============================================
   EXECUTE QUERY
   ============================================ */
if (mysqli_query($conn, $sql)) {
    header("Location: bookings.php?updated=success");
    exit();
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>
