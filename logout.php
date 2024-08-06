<?php
session_start();

if (isset($_SESSION['username'])) {
    
    if (isset($_COOKIE['session_token'])) {
        setcookie('session_token', '', time() - 3600, '/'); 
    }

    session_unset();
    session_destroy();
}

header("Location: login.php");
exit();
?>
