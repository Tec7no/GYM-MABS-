<!Doctype html>
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
	height: 90vh;
	width: 90%;
	background-position: top 40% right 0;
	/*background-attachment:fixed;*/
	background-size:cover;
	display:block;
	flex-direction:column;
	justify-content:center; 
}

* {
  box-sizing: border-box;
}


.col-25 {
  -ms-flex: 70%;
  flex: 70%;
}


.col-25 {
  padding: 100px 100px;
}

.container {
   position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
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
  margin-bottom: 50px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: black;
  color: white;
  padding: 12px;
  border: none; 
  width: 88%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  margin: auto;
  display: block;
}

.btn:hover {
  background-color: gray;
}

		</style>
	</head>
<body>


<header>
	<a href="index.php" >MABS</a>
	<div> 
	<ul id="navbar">
	<li><a href="index.php">Home</a></li>
	<li><a href="shop.php">Shop</a></li>
	<li><a href="about.php">About</a></li>
	<li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>
	<li><a class="active" href="#"><i class="fa-solid fa-cart-shopping"></i>(0)</a></li>
	</ul>
	</div>
</header>






<div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#" style="text-decoration:none">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#" style="text-decoration:none">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#" style="text-decoration:none">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#" style="text-decoration:none">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
       <a href="checkout.php" style="text-decoration:none">
        <input type="submit" value="Continue to checkout" class="btn" >
    </div>
  </div>  
      </form>
</body>
</html>
