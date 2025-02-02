<?php
require("session/session.php");
require("session/install.php");
require("session/data.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = :id";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['ordernow'])) {
    if (isset($username)) {
        $sql = "SELECT id FROM users WHERE username = :username";
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $user_id = $user['id'];

            if (isset($product['id'])) {
                $sql2 = "INSERT INTO cart (product_id, user_id) VALUES (:product_id, :user_id)";
                $stmt2 = $connection->prepare($sql2);
                $stmt2->bindParam(':product_id', $product['id'], PDO::PARAM_INT);
                $stmt2->bindParam(':user_id', $user_id, PDO::PARAM_INT);
                $stmt2->execute();

                echo"<script>window.location.href=window.location.href;</script>";
                exit();
            } else {
                echo "Product not found.";
            }
        } else {
            echo "User not found.";
        }
    } else {
        echo "Username not set.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="js/scroll.js"></script>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropbtn {
            display: flex;
            align-items: center;
        }

        .dropbtn i {
            margin-right: 5px;
        }
    </style>
</head>
<body>

<header>
    <a href="index.php">MABS</a>
    <div> 
    <ul id="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="shop.php">Shop</a></li>
        <li><a href="about.php">About</a></li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">
                <i class="fa-solid fa-user"></i> <?php echo htmlspecialchars($username); ?>
            </a>
            <div class="dropdown-content">
                <a href="logout.php">Logout</a>
            </div>
        </li>
        <li><a href="cart.php"><i class="fa-solid fa-cart-shopping">(<?php echo $p; ?>)</i></a></li>
    </ul>
    </div>
</header>

<section class="about-us">
    <div class="about">
        <img src="<?php echo htmlspecialchars($product['img_url']); ?>" class="pic" alt="err" />
        <div class="text">
            <h1><?php echo htmlspecialchars($product['title']); ?></h1>
            <br><br>
            <h5><?php echo htmlspecialchars($product['category']); ?></h5>
            <h5><?php echo htmlspecialchars($product['price']); ?> E.G</h5>
            <p><?php echo htmlspecialchars($product['description']); ?></p>
            <div class="data">
                <form method="POST" action="">
                    <button type="submit" name="ordernow" class="hire">Order Now</button>
                </form>
            </div>
        </div>
    </div>
</section>

</body>
<footer>
    <div class="footerContainer">
        <div class="socialIcons">
            <a href="https://www.facebook.com/profile.php?id=100077691227068"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/abdelaziz.derbala/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/abd-el-aziz-ayman-derbala-a3281621b/"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://github.com/Tec7no"><i class="fa-brands fa-github"></i></a>
        </div>
        <div class="footerNav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">News</a></li>
                <li><a href="index.php">About</a></li>
                <li><a href="index.php">Contact Us</a></li>
                <li><a href="index.php">our Team</a></li>
            </ul>
        </div>
    </div>
    <div class="footerBottom">
        <p>Copyright &copy;2024; Designed by <span class="designer">Te父cno</span></p>
    </div>
</footer>
</html>
