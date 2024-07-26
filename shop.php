<?php
require("session.php");
?>
<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>MABS Supplement</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
<link rel="stylesheet" href="style.css">
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
        <li><a class="active" href="#">Shop</a></li>
        <li><a href="about.php">About</a></li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">
                <i class="fa-solid fa-user"></i> <?php echo htmlspecialchars($username); ?>
            </a>
            <div class="dropdown-content">
                <a href="logout.php">Logout</a>
            </div>
        </li>
        <li><a href="cart.php"><i class="fa-solid fa-cart-shopping">(0)</i></a></li>
    </ul>
    </div>
</header>

<section class="services">
<h2 class="content"><span class="span2">Our </span>services</h2> 
<div class="mc_amazon_card_box">
<a href="sports_wear.php" class="mc_amazon_card">                             <!-- clothes tag -->
  <img src="img/main/05.jpg" alt="Avatar" style="width:100%">
  <div class="mc_amazon_card_container" style="background-color: black;">
    <span style="color: #fff;">The hottest fashion show!</span> 
    <p style="color: #fff;">See more</p> 
  </div>
</a>


<a href="sports_supp.php" class="mc_amazon_card"> <!-- clothes tag -->
  <img src="img/main/01.jpg" alt="Avatar" style="width:100%">
  <div class="mc_amazon_card_container" style="background-color: black;">
    <span style="color: #fff;">Safe product & best sallary</span> 
    <p style="color: #fff;">See more</p> 
  </div>
</a>

<a href="Vitamins.php" class="mc_amazon_card">  <!-- vitamins tag -->
  <img src="img/main/04.jpg" alt="Avatar" style="width:100%">
  <div class="mc_amazon_card_container" style="background-color: black;">
    <span style="color: #fff;">Vitamins</span> 
    <p style="color: #fff;">See more</p> 
  </div>
</a>
</div>

<div class="mc_amazon_card_box">  <!-- healthy food tag -->
  <a href="healthy_food.php" class="mc_amazon_card">
    <img src="img/main/03.jpg" alt="Avatar" style="width:100%">
    <div class="mc_amazon_card_container" style="background-color: black;">
      <span style="color: #fff;">Keep healthy :D</span> 
      <p style="color: #fff;">See more</p> 
    </div>
  </a>
  
  <a href="protain_bar.php" class="mc_amazon_card"> <!-- protain bar tag -->
    <img src="img/main/02.jpg" alt="Avatar" style="width:100%">
    <div class="mc_amazon_card_container" style="background-color: black;">
      <span style="color: #fff;">Protain bar bro ♥</span> 
      <p style="color: #fff;">See more</p> 
    </div>
  </a>
  
  <a href="fat_burners.php" class="mc_amazon_card">  <!-- fat burners tag -->
    <img src="img/main/06.jpg" alt="Avatar" style="width:100%">
    <div class="mc_amazon_card_container" style="background-color: black;">
      <span style="color: #fff;">Fat burners</span> 
      <p style="color: #fff;">See more</p> 
    </div>
  </a>
  </div>
</section>

<footer>
  <div class="footerContainer">
      <div class="socialIcons">
          <a href="https://www.facebook.com/profile.php?id=100077691227068"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://www.instagram.com/abdelaziz.derbala/"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.linkedin.com/in/abd-el-aziz-ayman-derbala-a3281621b/"><i class="fa-brands fa-linkedin"></i></a>
          <a href="https://github.com/Tec7no"><i class="fa-brands fa-github"></i></a>
      </div>
      <div class="footerNav">
          <ul><li><a href="index.php">Home</a></li>
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
</body>

</html>

