<?php
require_once "../admin/auth_check.php";
/* ============================================
   DATABASE CONNECTION
   ============================================ */
require_once "db_connect.php";

/* ============================================
   FETCH ALL BOOKINGS FROM DATABASE
   SQL: SELECT operation
   ============================================ */
$sql = "SELECT * FROM bookings ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GrandSplendor | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Reuse admin styles -->
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
        <h1>Booking Requests</h1>
        <p class="subtitle">
            List of all submitted event booking quotations.
        </p>

        <!-- ================= BOOKINGS TABLE ================= -->
        <table class="admin-table">
            <thead>
                <tr>
                    <th align="left">ID</th>
                    <th align="left">Customer</th>
                    <th align="left">Category</th>
                    <th align="left">Event Type</th>
                    <th align="left">Capacity</th>
					<th>color theme</th>
					<th>venue type</th>
                    <th>venue</th>
                    <th>Furniture</th>
                    <th>Refreshments</th>
                    <th>Catering</th>
                    <th align="left">Status</th>
                    <th align="left">Date Submitted</th>
                    <th align="left">Actions</th>
                </tr>
            </thead>
            <tbody>

            <?php
            /* ============================================
               LOOP THROUGH DATABASE RESULTS
               ============================================ */
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                    <td><?php echo $row['event_category']; ?></td>
                    <td><?php echo $row['event_type']; ?></td>
                    <td><?php echo $row['capacity']; ?></td>
					<td><?php echo $row['color_theme']; ?></td>
<td>
<?php
if (!empty($row['indoor_venue'])) {
    echo $row['indoor_venue'];
} elseif (!empty($row['outdoor_venue'])) {
    echo $row['outdoor_venue'];
} else {
    echo $row['venue_type'];
}
?>
</td>

</td>

					<td><?php echo $row['venue']; ?></td>
					<td><?php echo $row['furniture']; ?></td>
					<td><?php echo $row['refreshments_details']; ?></td>
	                <td><?php echo $row['catering_required']; ?></td>
                    <td><?php echo $row['booking_status']; ?></td>
                    <td><?php echo date("Y-m-d", strtotime($row['created_at'])); ?></td>
                    <td>
                        <!-- Edit booking -->
                        <a href="edit-booking.php?id=<?php echo $row['id']; ?>" class="btn-edit">
                            Edit
                        </a>

                        <!-- Delete booking -->
                        <a href="delete-booking.php?id=<?php echo $row['id']; ?>"
                           class="btn-delete"
                           onclick="return confirm('Are you sure you want to delete this booking?');">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php
                }
            } else {
                /* If no bookings exist */
                echo "<tr><td colspan='8'>No booking records found.</td></tr>";
            }
            ?>

            </tbody>
        </table>
    </main>
</div>

</body>
</html>
