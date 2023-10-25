<?php
session_start();

// Check username and password (replace with your authentication logic)
if ($_POST['username'] === 'admin' && $_POST['password'] === 'adminpassword') {
    $_SESSION['role'] = 'admin';
    header('Location: adminHome.php');
    exit();
} else {
    // Perform regular user login authentication
    // If the user is authenticated, set $_SESSION['role'] = 'user' and redirect to home.php
}
?>
