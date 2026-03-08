<?php
// Include database connection
require_once "../php/db_connect.php";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect and sanitize form inputs
    $full_name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email     = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone     = mysqli_real_escape_string($conn, $_POST["phone"]);
    $subject   = mysqli_real_escape_string($conn, $_POST["subject"]);
    $message   = mysqli_real_escape_string($conn, $_POST["message"]);

    // Insert data into database
    $sql = "INSERT INTO contact_messages 
            (full_name, email, phone, subject, message)
            VALUES 
            ('$full_name', '$email', '$phone', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) {
        // Success → redirect or show confirmation
        header("Location: ../contact-us.html?status=success");		
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
