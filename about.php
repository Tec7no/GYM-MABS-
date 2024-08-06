<?php
require("session/session.php");
require("session/install.php");
require("session/data.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>About Us</title>
    <link rel="stylesheet" href="css/about.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
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
          <li><a href="shop.php">Shop</a></li>
          <li><a class="active" href="about.php">About</a></li>
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

    <section class="about-us">
      <div class="about">
        <img src="img/x.jpeg" class="pic" alt="err" />
        <div class="text">
          <h2>About Us</h2>
          <h5>Full stack <span class="span">developer</span></h5>
          <p>Welcome to our website! I'm Abd El-Aziz Ayman Derbala, a recent Computer Science graduate from Al-Ahram Canadian University. I specialize in web development using PHP and Laravel. I've worked on various projects, including e-commerce platforms and APIs, showcasing my skills in web development and database management. We're here to provide top-notch web solutions. Contact us to achieve your digital goals!</p>
          <div class="data">
            <a href="https://www.linkedin.com/in/abd-el-aziz-ayman-derbala-a3281621b/" class="hire">Hire Me</a>
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
</html>