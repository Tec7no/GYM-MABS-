<?php
session_start();
if (!isset($_SESSION['username'])) {
    // Redirect if username is not set
    header("Location: login.php");
    exit();
}
$username = $_SESSION['username'];
?>