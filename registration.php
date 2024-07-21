<?php 
require ("functions.php");

if(isset($_POST['submit'])){
    $username = check($_POST['username']);
    $email = check($_POST['email']);
    $password = check($_POST['password']);

    $username_err = null; // Initialize error variables
    $password_err = null; 
    $email_err = null;

    // Username validation
    if (!$username || !ctype_alnum($username) || strlen($username) < 15) {
        $username_err = "invalid username";
    }

    // Password validation
    if (!$password || !ctype_alnum($password) || strlen($password) <= 8 || strlen($password) >= 20) {
        $password_err = "invalid password";
    }

    // Hash the password if there's no password error
    if (!$password_err) {
        $password = password_hash($password, PASSWORD_BCRYPT);
    }

    // Email validation
    if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "invalid email";
    }

    // Further processing if there are no errors
    if (!$username_err && !$password_err && !$email_err) {
        // Proceed with saving data or other operations
    }
}



?>

<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
<link rel="stylesheet" href="style.css"/>
<style>
.about-section {
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

.user-box {
    position: relative;
    margin-bottom: 20px;
}

.user-box input {
    width: 100%;
    padding: 10px;
    margin-bottom: 5px;
}

.user-box label {
    position: absolute;
    top: 10px;
    left: 10px;
}
        
.toggle-password {
    position: absolute;
    right: 10px;
    top: 10px;
	cursor: pointer;
}

</style>


<title>MABS - Sign Up</title>
<script src="js/scroll.js"></script>
<script src="js/signup.js"></script>
</head>
<body>

<header>
	<a href="index.php" >MABS</a>
	<div> 
	<ul id="navbar">
	<li ><a href="index.php">Home</a></li>
	<li><a href="shop.php">shop</a></li>
	<li><a href="aboutus.php">About</a></li>
	<li><a class="active" href="#"><i class="fa-solid fa-user"></i></a></li>
	<li><a href="cart.php"><i class="fa-solid fa-cart-shopping">(0)</i></a></li>
	</ul>
	</div>
</header>

	<div class="about-section"></div>

	<div class="login-box">
        <h2>Sign Up</h2>
        <form onsubmit="return validatePasswords()" method="post" >
            <div class="user-box">
                <input type="text" name="username" required>
                <label for="username">Username</label>
            </div>
            
            <div class="user-box">
                <input type="email" name="email" required>
                <label for="email">E-mail</label>
            </div>
            
            <div class="user-box">
                <input type="password" id="passwordField1" name="password" required autocomplete="new-password">
                <label for="password">Password</label>
                <span class="toggle-password" onclick="togglePassword('passwordField1', this)"><i class="fa-solid fa-eye-slash"></i></span>
            </div>
            
            <div class="user-box">
                <input type="password" id="passwordField2" name="re-password" required autocomplete="new-password">
                <label for="re-password">Re-Password</label>
                <span class="toggle-password" onclick="togglePassword('passwordField2', this)"><i class="fa-solid fa-eye-slash"></i></span>
            </div>
            
            <div class="button-form">
                <button type="submit" id="submit">Signup</button>
                <div id="register">
                    Already have an account?
                    <a href="login.php">Login</a>
                </div>
            </div>
        </form>
    </div>
	
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
