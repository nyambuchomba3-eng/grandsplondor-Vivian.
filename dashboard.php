<?php
require_once "../admin/auth_check.php";
require_once "db_connect.php";

/* =====================
   DASHBOARD STATISTICS
   ===================== */

// Total bookings
$totalBookings = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM bookings")
)['total'];

// By category
$romantic = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM bookings WHERE event_category='Romantic'")
)['total'];

$corporate = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM bookings WHERE event_category='Corporate'")
)['total'];

$entertainment = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM bookings WHERE event_category='Entertainment'")
)['total'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | Hotel Event Booking System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Admin stylesheet -->
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

<!-- ================= ADMIN LAYOUT ================= -->
<div class="admin-container">

    <!-- ===== SIDEBAR ===== -->
    <aside class="sidebar">
        <ul>
            <li class="active"><a href="dashboard.php">Dashboard</a></li>
            <li><a href="bookings.php">View Bookings</a></li>
            <li><a href="reports.php">Reports</a></li>
        </ul>
    </aside>

    <!-- ===== MAIN CONTENT ===== -->
    <main class="main-content">

        <h1>Dashboard Overview</h1>
        <p class="subtitle">
            Summary of event booking requests submitted by customers.
        </p>

        <!-- ===== DASHBOARD CARDS ===== -->
   <div class="main">
    <h1>Dashboard</h1>
    <p>System overview and booking statistics.</p><br>

    <div class="cards">
        <div class="card">
            <h3>Total Bookings</h3>
            <p><?php echo $totalBookings; ?></p>
        </div>

        <div class="card">
            <h3>Romantic Events</h3>
            <p><?php echo $romantic; ?></p>
        </div>

        <div class="card">
            <h3>Corporate Events</h3>
            <p><?php echo $corporate; ?></p>
        </div>

        <div class="card">
            <h3>Entertainment Events</h3>
            <p><?php echo $entertainment; ?></p>
        </div>
    </div>
   </div>

        <!-- ===== INFO SECTION ===== -->
        <section class="info-box">
            <h2>System Description</h2>
            <p>
                This administrative dashboard allows hotel management to view,
                manage, and analyze event quotation requests submitted through the
                online booking system.
            </p>
            <p>
                All bookings are handled manually after review, and quotations are
                communicated directly to customers via email.
            </p>
        </section>

    </main>
</div>

</body>
</html>
