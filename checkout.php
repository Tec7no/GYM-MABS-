<?php
require("session/session.php");
require("session/install.php");
require("session/data.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">


<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background: url(img/3.jpg);
	height: 100vh;
	width: 100%;
	background-position: top 40% right 0;
	/*background-attachment:fixed;*/
	background-size:cover;
	display:flex;
	flex-direction:column;
	align-items: flex-start;
	justify-content:center;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  
   position: absolute;
			top: 55%;
            left: 50%;
            width: 900px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: #fff;
            box-shadow: 0 15px 25px rgba(143, 124, 236, 0.7);
            border-radius: 10px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;

}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: blue;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: black;
}

a {
  color:black;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
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
          <li><a href="#">Shop</a></li>
          <li><a href="about.php">About</a></li>
          <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">
                  <i class="fa-solid fa-user"></i> <?php echo htmlspecialchars($username); ?>
              </a>
              <div class="dropdown-content">
                  <a href="logout.php">Logout</a>
              </div>
          </li>
          <li><a class="active" href="cart.php"><i class="fa-solid fa-cart-shopping">(<?php echo $p?>)</i></a></li>
      </ul>
      </div>
  </header>


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="submit" class="btn">
      </form>
    </div>
  </div>
</div>

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
