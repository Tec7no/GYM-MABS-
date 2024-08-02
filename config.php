<?php

$hostname = "localhost";
$dbname = "mabs";
$dbuser = "Tecno";
$dbuserpassword = "2890887Ate chno";

$dsn = "mysql:host=$hostname;dbname=$dbname";

try {
    $conn = new PDO($dsn, $dbuser, $dbuserpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>
