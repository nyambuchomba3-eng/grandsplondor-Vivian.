<?php
/* ============================================
   DATABASE CONNECTION
   ============================================ */
require_once "../admin/db_connect.php";

/* ============================================
   CHECK IF ID IS PROVIDED
   ============================================ */
if (!isset($_GET['id'])) {
    die("Booking ID not specified.");
}

/* ============================================
   GET BOOKING ID
   ============================================ */
$booking_id = $_GET['id'];

/* ============================================
   SQL DELETE QUERY
   ============================================ */
$sql = "DELETE FROM bookings WHERE id = $booking_id";

/* ============================================
   EXECUTE QUERY
   ============================================ */
if (mysqli_query($conn, $sql)) {
    // Redirect back to bookings page after deletion
    header("Location: bookings.php?deleted=success");
    exit();
} else {
    echo "Error deleting booking: " . mysqli_error($conn);
}
?>
