<?php
require("config.php");
session_start();

if (!isset($_SESSION['username']) && isset($_COOKIE['session_token'])) {
    // Restore random num from cookie
    $token = $_COOKIE['session_token'];

    // Check random num in DB
    $stmt = $conn->prepare("SELECT username FROM users WHERE session_token = ?");
    $stmt->execute([$token]);
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['username'] = $user['username'];
    }
}

if (!isset($_SESSION['username'])) {
    
    header("Location: login.php");
    exit();
}
$username = $_SESSION['username'];
?>