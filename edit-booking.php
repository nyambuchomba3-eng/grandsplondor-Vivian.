<?php
require_once "../admin/auth_check.php";

/* ============================================
   DATABASE CONNECTION
   ============================================ */
require_once "db_connect.php";

/* ============================================
   GET BOOKING ID FROM URL
   ============================================ */
if (!isset($_GET['id'])) {
    die("Booking ID not provided.");
}

$booking_id = $_GET['id'];

/* ============================================
   FETCH BOOKING RECORD
   SQL: SELECT WHERE id
   ============================================ */
$sql = "SELECT * FROM bookings WHERE id = $booking_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) != 1) {
    die("Booking record not found.");
}

$booking = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Booking | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>

<!-- ================= ADMIN HEADER ================= -->
<header class="admin-header">
    <div class="header-left">
        <h2>GrandSplendor Admin</h2>
    </div>
    <div class="header-right">
        <div class="admin-header">
         <span>Welcome, <?php echo $_SESSION['admin_username']; ?></span>&nbsp;
         <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>
</header>

<div class="admin-container">

    <!-- ================= SIDEBAR ================= -->
    <aside class="sidebar">
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li class="active"><a href="bookings.php">View Bookings</a></li>
            <li><a href="reports.php">Reports</a></li>
        </ul>
    </aside>

    <!-- ================= MAIN CONTENT ================= -->
    <main class="main-content">

        <h1>Edit Booking</h1>

        <!-- ================= EDIT FORM ================= -->
        <form action="update-booking.php" method="POST" class="edit-form">

            <!-- Hidden ID (used for UPDATE query) -->
            <input type="hidden" name="id" value="<?php echo $booking['id']; ?>">

            <label>Full Name</label>
            <input type="text" name="full_name"
                   value="<?php echo htmlspecialchars($booking['full_name']); ?>" required>

            <label>Phone</label>
            <input type="text" name="phone"
                   value="<?php echo $booking['phone']; ?>" required>

            <label>Email</label>
            <input type="email" name="email"
                   value="<?php echo $booking['email']; ?>" required>

            <label>Event Category</label>
            <input type="text" value="<?php echo $booking['event_category']; ?>" readonly>

            <label>Event Type</label>
            <input type="text" name="event_type"
                   value="<?php echo $booking['event_type']; ?>" required>

            <label>Capacity</label>
            <input type="number" name="capacity"
                   value="<?php echo $booking['capacity']; ?>" required>
        <label>Color Theme</label>
<input type="text" name="color_theme"
       value="<?php echo htmlspecialchars($booking['color_theme']); ?>">
<label>Venue Type</label>
<select name="venue_type" required>
    <option value="Indoor" <?php if ($booking['venue_type'] == 'Indoor') echo 'selected'; ?>>Indoor</option>
    <option value="Outdoor" <?php if ($booking['venue_type'] == 'Outdoor') echo 'selected'; ?>>Outdoor</option>
</select>
<label>Venue</label>
<input type="text" name="venue"
       value="<?php
       echo htmlspecialchars(
           $booking['indoor_venue'] ?: $booking['outdoor_venue']
       );
       ?>">
<label>Furniture</label>
<textarea name="furniture"><?php echo htmlspecialchars($booking['furniture']); ?></textarea>
<label>Refreshments</label>
<textarea name="refreshments_details"><?php echo htmlspecialchars($booking['refreshments_details']); ?></textarea>
<label>Catering Required?</label><br>

<input  type="radio"  name="catering_required" value="Yes" 
<?php if ($booking['catering_required'] == 'Yes') echo 'checked'; ?>> Yes

<input type="radio" name="catering_required" value="No"
<?php if ($booking['catering_required'] == 'No') echo 'checked'; ?>> No

            <label>Booking Status</label>
            <select name="booking_status">
                <option value="Pending" <?= $booking['booking_status'] == 'Pending' ? 'selected' : ''; ?>>Pending</option>
                <option value="Quoted" <?= $booking['booking_status'] == 'Quoted' ? 'selected' : ''; ?>>Quoted</option>
                <option value="Cancelled" <?= $booking['booking_status'] == 'Cancelled' ? 'selected' : ''; ?>>Cancelled</option>
            </select>

            <button type="submit" class="btn-save">Update Booking</button>
        </form>

    </main>
</div>

</body>
</html>
