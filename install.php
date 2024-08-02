<?php require_once('config.php'); ?>

<?php

try {
    $connection = new PDO($dsn, $dbuser, $dbuserpassword);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql1 = "CREATE TABLE IF NOT EXISTS users (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(50) NOT NULL,
        username VARCHAR(40) NOT NULL,
        password VARCHAR(255) NOT NULL,
        fullname VARCHAR(40) NOT NULL,
        address VARCHAR(50) NOT NULL,
        city VARCHAR(20) NOT NULL,
        state VARCHAR(10) NOT NULL,
        zip INT(10) NOT NULL,
        name_on_card VARCHAR(25) NOT NULL,
        credit_card_number VARCHAR(20) NOT NULL,
        cvv VARCHAR(4) NOT NULL,
        exp_month INT(2) NOT NULL,
        exp_year INT(4) NOT NULL
    );";
    $connection->exec($sql1);

    $sql2 = "CREATE TABLE IF NOT EXISTS products (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(50) NOT NULL,
        description TEXT NOT NULL,
        price DECIMAL(10, 2) NOT NULL,
        category VARCHAR(255) NOT NULL,
        img_url VARCHAR(255) NOT NULL
    );";
    $connection->exec($sql2);

    $sql3 = "CREATE TABLE IF NOT EXISTS cart (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        product_id INT UNSIGNED NOT NULL,
        user_id INT UNSIGNED NOT NULL,
        FOREIGN KEY (product_id) REFERENCES products(id),
        FOREIGN KEY (user_id) REFERENCES users(id)
    );";
    $connection->exec($sql3);

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>
