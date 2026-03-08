<?php
session_start();
require_once "../admin/db_connect.php";

$error = "";

/* =====================
   HANDLE LOGIN SUBMISSION
   ===================== */
if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admins
            WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        // Login success
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;

        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="admin.css">
<style>
.login-box {
    width: 350px;
    margin: 120px auto;
    background: #fff;
    padding: 30px;
    border-radius: 6px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
}
.login-box h2 {
    text-align: center;
}
.login-box input {
    width: 100%;
    padding: 10px;
    margin: 12px 0;
}
.login-box button {
    width: 100%;
    padding: 10px;
    background: #2c3e50;
    color: #fff;
    border: none;
    cursor: pointer;
}
.error {
    color: red;
    text-align: center;
}
</style>
</head>

<body>

<div class="login-box">
    <h2>Admin Login</h2>

    <?php if ($error): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>
</div>

</body>
</html>
