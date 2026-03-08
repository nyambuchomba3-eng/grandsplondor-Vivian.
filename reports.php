<?php
require_once "../admin/auth_check.php";
require_once "db_connect.php";

/* =====================
   REPORT QUERIES
   ===================== */

$categoryReport = mysqli_query(
    $conn,
    "SELECT event_category, COUNT(*) AS total
     FROM bookings
     GROUP BY event_category"
);

$statusReport = mysqli_query(
    $conn,
    "SELECT booking_status, COUNT(*) AS total
     FROM bookings
     GROUP BY booking_status"
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Reports</title>

<!-- Reuse admin global stylesheet -->
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

<main class="main-content">
    <h1>Reports</h1>
    <p class="page-desc">Predefined analytical reports generated from booking data.</p>

    <section class="report-section">
        <h2>Bookings by Event Category</h2></br>
        <table class="admin-table">
            <tr>
                <th align="left">Event Category</th>
                <th align="left">Total Bookings</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($categoryReport)): ?>
            <tr>
                <td><?php echo $row['event_category']; ?></td>
                <td><?php echo $row['total']; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </section>

    <section class="report-section">
        <h2>Bookings by Status</h2></br>
        <table class="admin-table">
            <tr>
                <th align="left">Status</th>
                <th align="left">Total Bookings</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($statusReport)): ?>
            <tr>
                <td><?php echo $row['booking_status']; ?></td>
                <td><?php echo $row['total']; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </section>
</main>
</div>

</body>
</html>
