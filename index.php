<?php
include("session.php");
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
<script type="text/javascript" src="js/scroll.js"></script>
<script>
function redirect() {
  window.location.href = "shop.php";
}

document.addEventListener("DOMContentLoaded", function() {
    var video = document.getElementById("myVideo");
    video.volume = 0.5;  // Set volume to 50%
});
</script>
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
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="shop.php">Shop</a></li>
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


<section id="hero"> 
    <div id="mid">
        <div>
            <h4 class="h4">Trade-in-offer</h4>
            <h2 class="h2">Super value deals</h2>
            <h1 class="h1">On all products</h1>
            <p class="p">Save more with coupons & up to 70% off!</p>
            <button id="shop" onclick="redirect()">Shop now</button>
        </div>
        <video width="50%" height="440" controls autoplay id="myVideo">
            <source src="img/5.mp4" type="video/mp4">
        </video>
    </div>
</section>



<section class="normal-sec">
<h2 class="content" style="font-size : 50px;"><span class="span2">Best&nbsp;</span> sells</h2>
<div class="mc_amazon_card_box">
<a href="shop.php" class="mc_amazon_card">
  <img src="img/main/05.jpg" alt="Avatar" style="width:100%">
  <div class="mc_amazon_card_container">
    <span>The hottest fashion show!</span> 
    <p>See more</p> 
  </div>
</a>

<a href="shop.php" class="mc_amazon_card">
  <img src="img/main/01.jpg" alt="Avatar" style="width:100%">
  <div class="mc_amazon_card_container">
    <span>Safe product & best sallary</span> 
    <p>See more</p> 
  </div>
</a>

<a href="shop.php" class="mc_amazon_card">
  <img src="img/main/04.jpg" alt="Avatar" style="width:100%">
  <div class="mc_amazon_card_container">
    <span>Vitamins</span> 
    <p>See more</p> 
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