<?php
require("session/session.php");
require("session/install.php");
require("session/data.php");
?>
<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>MABS Supplement</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
<link rel="stylesheet" href="css/style.css">
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
        <li><a href="cart.php"><i class="fa-solid fa-cart-shopping">(<?php echo $p?>)</i></a></li>
    </ul>
    </div>
</header>

<section class="services">
<h2 class="content" style="font-size : 40px;"><span class="span2">Sports&nbsp; </span>Supplements</h2> 

<div class="mc_amazon_card_box">

    <a href="sports_supp.php" class="mc_amazon_card">                             <!-- clothes tag -->
      <img src="img/sports_supp/001.jpg" alt="Avatar" style="width:100%">
      <div class="mc_amazon_card_container" style="background-color: black;">
        <span style="color: #fff;">Max muscle Iso Complex Triple Sourced Isolate Prot</span> 
        <p style="color: #fff;">See more</p> 
      </div>
    </a>


    <a href="sports_supp.php" class="mc_amazon_card"> <!-- clothes tag -->
      <img src="img/sports_supp/002.jpg" alt="Avatar" style="width:100%">
      <div class="mc_amazon_card_container" style="background-color: black;">
        <span style="color: #fff;">Gold Standard solate blah protain</span> 
        <p style="color: #fff;">See more</p> 
      </div>
    </a>

    <a href="sports_supp.php" class="mc_amazon_card">                             <!-- clothes tag -->
      <img src="img/sports_supp/003.jpg" alt="Avatar" style="width:100%">
      <div class="mc_amazon_card_container" style="background-color: black;">
        <span style="color: #fff;">Whey Protein Shadowhey Hydrolyzed</span> 
        <p style="color: #fff;">See more</p> 
      </div>
    </a>

      <a href="healthy_food.php" class="mc_amazon_card">
        <img src="img/sports_supp/004.jpg" alt="Avatar" style="width:100%">
        <div class="mc_amazon_card_container" style="background-color: black;">
          <span style="color: #fff;">Muscle Add Whey Add-60Serv.-2100G-French-Vanilla </span> 
          <p style="color: #fff;">See more</p> 
        </div>
      </a>
  </div>

  <div class="mc_amazon_card_box" >  
    <a href="protain_bar.php" class="mc_amazon_card"> 
      <img src="img/sports_supp/005.jpg" alt="Avatar" style="width:100%">
      <div class="mc_amazon_card_container" style="background-color: black;">
        <span style="color: #fff;">Muscle Add Whey Add-60Serv.-2100G-Strawberry Milks</span> 
        <p style="color: #fff;">See more</p> 
      </div>
    </a>
    
    <a href="fat_burners.php" class="mc_amazon_card">  <!-- fat burners tag -->
      <img src="img/sports_supp/006.jpg" alt="Avatar" style="width:100%">
      <div class="mc_amazon_card_container" style="background-color: black;">
        <span style="color: #fff;">Muscle Add Iso Add-30Serv.-1080G.-Chocolate</span> 
        <p style="color: #fff;">See more</p> 
      </div>
    </a>
    

    <a href="fat_burners.php" class="mc_amazon_card">  <!-- fat burners tag -->
      <img src="img/sports_supp/007.jpg" alt="Avatar" style="width:100%">
      <div class="mc_amazon_card_container" style="background-color: black;">
        <span style="color: #fff;">Muscle Add Whey Add-60Serv.-2100G-Chocolate Ice Cream</span> 
        <p style="color: #fff;">See more</p> 
      </div>
    </a>


  <a href="fat_burners.php" class="mc_amazon_card"> 
    <img src="img/sports_supp/008.jpg" alt="Avatar" style="width:100%">
    <div class="mc_amazon_card_container">
      <span style="color: #fff;">Muscle Add Whey Add-60Serv.-2100G-Vanilla Ice Cream</span> 
      <p style="color: #fff;">See more</p> 
    </div>
  </a>
</div>
<br><br>
</section>
<div style="background-color:black;">
<br><br><br><br><br><br>
</div>
<footer>
  <div class="footerContainer" style="padding-top:100px;">
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

