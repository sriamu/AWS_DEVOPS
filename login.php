<?php
session_start();

// Hardcoded username and password for demonstration purposes
$valid_username = "user";
$valid_password = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful, redirect to dashboard or home page
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        // Authentication failed, redirect back to login page with error message
        header("Location: index.php?error=1");
        exit;
    }
}
?>

