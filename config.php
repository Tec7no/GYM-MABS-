<?php

 $hostname = "localhost";
 $dbname = "mabs";
 $dbuser= "Tecno";
 $dbuserpassword= "2890887Ate chno";
 
 $dsn = "mysql:host=$hostname;dbname=$dbname";
 
 if ($dsn->connect_error) {
    die("Connection failed: " . $dsn->connect_error);
}

 $options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
 );

 ?>