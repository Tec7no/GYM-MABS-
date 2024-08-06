<?php
require("session/session.php");
require("session/install.php");
require("session/data.php");

if (isset($_POST['remove'])) {
    $id = $_POST['remove'];
    $sql = "DELETE FROM cart WHERE id = :id";
    $stmt = $connection->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background: url(img/3.jpg);
  height: 90vh;
  width: 90%;
  background-position: top 40% right 0;
  background-size: cover;
  display: block;
  flex-direction: column;
  justify-content: center;
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
  width: 60%; /* زيادة العرض هنا */
  max-width: 800px; /* تعيين أقصى عرض */
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
.product-box {
  display: flex;
  align-items: center;
  border: 1px solid #ccc;
  padding: 10px;
  margin-bottom: 10px;
  position: relative;
  border-radius: 5px;
  background: #f9f9f9;
}
.product-img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  margin-right: 15px;
}
.product-details {
  flex: 1;
}
.product-details p {
  margin: 5px 0;
}
.remove-btn {
  position: absolute;
  top: 10px;
  right: 10px;
  background: red;
  color: white;
  border: none;
  cursor: pointer;
  font-size: 16px;
  border-radius: 50%;
  width: 25px;
  height: 25px;
  text-align: center;
  line-height: 25px;
}
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
<script>
function removeProduct(productId) {
    if (confirm("Are you sure you want to remove this item from your cart?")) {
        var form = document.createElement("form");
        form.method = "POST";
        form.action = "";

        var input = document.createElement("input");
        input.type = "hidden";
        input.name = "remove";
        input.value = productId;

        form.appendChild(input);
        document.body.appendChild(form);
        form.submit();
    }
}
</script>
</head>
<body>
<header>
  <a href="index.php">MABS</a>
  <div> 
    <ul id="navbar">
      <li><a href="index.php">Home</a></li>
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
      <li><a class="active" href="cart.php"><i class="fa-solid fa-cart-shopping">(<?php echo $p ?>)</i></a></li>
    </ul>
  </div>
</header>

<div class="col-25">
  <div class="container">
    <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo $p ?></b></span></h4>
    <?php
    $total = 0;
    foreach ($cart_items as $x) {
        $sql = "SELECT * FROM products WHERE id = :product_id";
        $stmt = $connection->prepare($sql);
        $stmt->bindValue(':product_id', $x['product_id'], PDO::PARAM_INT);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($product) {
            echo '<div class="product-box" data-id="' . htmlspecialchars($x['id']) . '">
                    <button class="remove-btn" onclick="removeProduct(' . htmlspecialchars($x['id']) . ')">x</button>
                    <img src="' . htmlspecialchars($product['img_url']) . '" alt="' . htmlspecialchars($product['title']) . '" class="product-img">
                    <div class="product-details">
                        <p><a href="#" style="text-decoration:none">' . htmlspecialchars($product['title']) . '</a></p>
                        <p class="price">E.G ' . htmlspecialchars($product['price']) . '</p>
                    </div>
                  </div>';
            $total += $product['price'];
        }
    }
    ?>
    <hr>
    <p>Total <span class="price" style="color:black"><b><?php echo $total . " E.G" ?></b></span></p>
    <a href="checkout.php" style="text-decoration:none">
      <input type="submit" value="Continue to checkout" class="btn">
    </a>
  </div>
</div>
</body>
</html>
