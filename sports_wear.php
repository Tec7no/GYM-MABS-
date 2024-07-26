<?php
require("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="style.css"/>    
<script src="js/scroll.js"></script>
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
        <li><a href="cart.php"><i class="fa-solid fa-cart-shopping">(0)</i></a></li>
    </ul>
    </div>
</header>

<section class="services">
  <div class="box" style="padding-top: 100px">

    <div class="card">
      <div class="image"><span class="text">This is a chair.</span></div>
        <span class="title">Cool Chair</span>
        <span class="price">$100</span>
      </div>
    
      <div class="card">
        <div class="image"><span class="text">This is a chair.</span></div>
          <span class="title">Cool Chair</span>
          <span class="price">$100</span>
        </div>
    
        <div class="card">
          <div class="image"><span class="text">This is a chair.</span></div>
            <span class="title">Cool Chair</span>
            <span class="price">$100</span>
          </div>

          <div class="card">
              <div class="image"><span class="text">This is a chair.</span></div>
                <span class="title">Cool Chair</span>
                <span class="price">$100</span>
              </div>
  </div>
  <div class="box" style="padding-top: 5px">
          <div class="card">
            <div class="image"><span class="text">This is a chair.</span></div>
              <span class="title">Cool Chair</span>
              <span class="price">$100</span>
            </div>
    
            <div class="card">
              <div class="image"><span class="text">This is a chair.</span></div>
                <span class="title">Cool Chair</span>
                <span class="price">$100</span>
              </div>
    
              <div class="card">
                <div class="image"><span class="text">This is a chair.</span></div>
                  <span class="title">Cool Chair</span>
                  <span class="price">$100</span>
                </div>
            
            <div class="card">
              <div class="image"><span class="text">This is a chair.</span></div>
                <span class="title">Cool Chair</span>
                <span class="price">$100</span>
              </div>
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