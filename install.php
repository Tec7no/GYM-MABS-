<?php require_once('config.php') ?>
<?php

$connection = new PDO($dsn ,$dbuser, $dbuserpassword, $options);
//Php DataBase Object (PDO)

$sql = "CREATE TABLE IF NOT EXISTS users (

    id INT UNSIGNED AUTO_INCREMENT,
    email VARCHAR(20) NOT NULL,
    username VARCHAR(40) NOT NULL,
    password VARCHAR(40) NOT NULL,
    fullname VARCHAR(40) NOT NULL,
    email VARCHAR(20) NOT NULL,
    address VARCHAR(20) NOT NULL,
    city VARCHAR(20) NOT NULL,
    state VARCHAR(10) NOT NULL,
    zip int(10) NOT NULL,
    name_on_card VARCHAR(25) NOT NULL,
    credit_card_number int(20) NOT NULL,
    cvv int(40) NOT NULL,
    exp_month int(5) NOT NULL,
    exp_year int(5) NOT NULL,
    PRIMARY KEY(id)
);";

$connection -> exec($sql);

echo "You are connected to the database successfully";

?>