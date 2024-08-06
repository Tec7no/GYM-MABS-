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
<h2 class="content" style="font-size : 40px;"><span class="span2">Healthy&nbsp;</span>food</h2> 

<div class="mc_amazon_card_box">

    <a href="product.php?id=26" class="mc_amazon_card">                             <!-- clothes tag -->
      <img src="img/healthy_food/h1.jpg" alt="Avatar" style="width:100%">
      <div class="mc_amazon_card_container" style="background-color: black;">
        <span style="color: #fff;">Organic Nation Moringa Powder-100G <span style="color:black;">aykalam hena don't care</span></span> 
        <p style="color: #fff;">See more</p> 
      </div>
    </a>


    <a href="product.php?id=27" class="mc_amazon_card"> <!-- clothes tag -->
      <img src="img/healthy_food/h2.jpg" alt="Avatar" style="width:100%">
      <div class="mc_amazon_card_container" style="background-color: black;">
        <span style="color: #fff;">Organic Nation Premium Matcha Powder-125Serv.-125G</span> 
        <p style="color: #fff;">See more</p> 
      </div>
    </a>

    <a href="product.php?id=28" class="mc_amazon_card">                             <!-- clothes tag -->
      <img src="img/healthy_food/h3.jpg" alt="Avatar" style="width:100%">
      <div class="mc_amazon_card_container" style="background-color: black;">
        <span style="color: #fff;">rganic Nation Honey Marjoram-400G <span style="color:black;">aykalam hena don't care</span></span> 
        <p style="color: #fff;">See more</p> 
      </div>
    </a>

      <a href="product.php?id=29" class="mc_amazon_card">
        <img src="img/healthy_food/h4.jpg" alt="Avatar" style="width:100%">
        <div class="mc_amazon_card_container" style="background-color: black;">
          <span style="color: #fff;">Organic Nation Black Seed Oil-250Ml <span style="color:black;">aykalam hena don't care</span></span> 
          <p style="color: #fff;">See more</p> 
        </div>
      </a>
  </div>

  <div class="mc_amazon_card_box">  
    <a href="product.php?id=29" class="mc_amazon_card"> 
      <img src="img/healthy_food/h5.jpg" alt="Avatar" style="width:100%">
      <div class="mc_amazon_card_container" style="background-color: black;">
        <span style="color: #fff;">Organic Nation Spirulina Powder-200G</span> 
        <p style="color: #fff;">See more</p> 
      </div>
    </a>
    
    <a href="product.php?id=30" class="mc_amazon_card">  <!-- fat burners tag -->
      <img src="img/healthy_food/h6.jpg" alt="Avatar" style="width:100%">
      <div class="mc_amazon_card_container" style="background-color: black;">
        <span style="color: #fff;">Organic Nation Hazelnut butter 350G</span> 
        <p style="color: #fff;">See more</p> 
      </div>
    </a>
    

    <a href="product.php?id=31" class="mc_amazon_card">  <!-- fat burners tag -->
      <img src="img/healthy_food/h7.jpg" alt="Avatar" style="width:100%">
      <div class="mc_amazon_card_container" style="background-color: black;">
        <span style="color: #fff;">Organic Nation Hazelnut butter with dark chocolate</span> 
        <p style="color: #fff;">See more</p> 
      </div>
    </a>


  <a href="product.php?id=32" class="mc_amazon_card"> 
    <img src="img/healthy_food/h8.jpg" alt="Avatar" style="width:100%">
    <div class="mc_amazon_card_container">
      <span style="color: #fff;">Organic Nation Guilt Free Chocolate Spread-370G</span> 
      <p style="color: #fff;">See more</p> 
    </div>
  </a>
</div>
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

