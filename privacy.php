<?php 
	include("function/login.php");
	include("function/customer_signup.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>TechShoe</title>
	<link rel="icon" href="img/logo3.png" />
	<link rel="stylesheet" href="stylemainscreen.css">
	<link rel="stylesheet" href="./style1.css">
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="mainscreen">
	<div id="header">
		<img src="img/logo3.png">
		<label>TechShoe</label>
			<ul>
				<li><a href="#signup"   data-toggle="modal">Sign Up</a></li>
				<li><a href="#login"   data-toggle="modal">Login</a></li>
			</ul>
	</div>
	
	<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Login...</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="email" name="email" placeholder="Email" style="width:250px;">
						<input type="password" name="password" placeholder="Password" style="width:250px;">
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="login" value="Login">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>
	
	<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Sign Up Here...</h3>
				</div>
					<div class="modal-body">
						<center>
					<form method="post">
						<input type="text" name="firstname" placeholder="Firstname" required>
						<input type="text" name="mi" placeholder="Middle Initial" maxlength="1" required>
						<input type="text" name="lastname" placeholder="Lastname" required>
						<input type="text" name="address" placeholder="Address" style="width:430px;"required>
						<input type="text" name="country" placeholder="Province" required>
						<input type="text" name="zipcode" placeholder="ZIP Code" required maxlength="4">
						<input type="text" name="mobile" placeholder="Mobile Number" maxlength="11">
						<input type="text" name="telephone" placeholder="Telephone Number" maxlength="8">
						<input type="email" name="email" placeholder="Email" required>
						<input type="password" name="password" placeholder="Password" required>
						</center>
					</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>
	
			<details>
  <summary></summary>
  <nav class="menu">
    <a href="index1.php">Home</a>
    <a href="product.php">Product</a>
    <a href="aboutus.php">About Us</a>
    <a href="contactus.php">Contact Us</a>
    <a href="privacy.php">Privacy Policy</a>
	<a href="faqs.php">FAQs</a>
	<a href="ourteam.php">Our Team</a>
  </nav>
</details>	

<div id="container">
	<div class="nav">	
			 <ul>
				<li><a href=""></i></a></li>
			</ul>
	</div>
	

	
	
		<div id="content">
			<legend><h3>Privacy Policy</h3></legend>
				<p>The Techshoe Incorporated respect the privacy of the visitors
					to the techshoe.com website and the local websites connected with it, and take great care to protect your 
					information.. This privacy policy tells you what information we collect from you, how we may use it and 
					the steps we take to ensure that it is protected.
				</p>
			<hr>
				<h4>Protection of visitors information</h4>
					<p>In order to protect the information you provide to us by visiting our website we have implemented various
						security measures. Your personal information is contained behind secured networks and is only accessible 
						by a limited number of people, who have special access rights and are required to keep the information 
						confidential.Please keep in mind though that whenever you give out personal information online there is a 
						risk that third parties may intercept and use that information. While Alphaware strives to protect its user's 
						personal information and privacy, we cannot guarantee the security of any information you disclose online 
						and you do so at your own risk.</p>
			<hr>
				<h4>Use of cookies</h4>
					<p>A cookie is a small string of information that the website that you visit transfers to your computer for 
						identification purposes. Cookies can be used to follow your activity on the website and that information 
						helps us to understand your preferences and improve your website experience. Cookies are also used to 
						remember for instance your user name and password.</p>
					<p>You can turn off all cookies, in case you prefer not to receive them. You can also have your computer warn
						you whenever cookies are being used. For both options you have to adjust your browser settings 
						(like internet explorer). There are also software products available that can manage cookies for you. 
						Please be aware though that when you have set your computer to reject cookies, it can limit the 
						functionality of the website you visit and it???s possible then that you do not have access to some of the 
						features on the website.</p>
			<hr>
				<h4>Online policy</h4>
					<p>The Privacy Policy does not extend to anything that is inherent in the operation of the internet, and 
						therefore beyond adidas' control, and is not to be applied in any manner contrary to applicable law or 
						governmental regulation. This online privacy policy only applies to information collected through our 
						website and not to information collected offline.</p>
			
		</div>
	<br />
</div>
	<br />
	<div id="footer"> 
		<div class="foot"> 
			<label style="font-size:17px;"> Copyright &copy; </label>
			<p style="font-size:30px;">TechShoe Store Inc. Philippines 2022 All Rights Reserved.                             <a href=""></a></p>
		</div>

			<div id="foot"> 
				<h3>Links</h3> 
					<ul>
						<a href="https://web.facebook.com/profile.php?id=100070703655518"><li>Facebook</li></a>
						<a href="https://pin.it/6WKJ8EU"><li>Pinterest</li></a>
						<a href="https://www.tumblr.com/settings/blog/techshoe"><li>Tumblr</li></a>
					</ul>
			</div>
	</div>
</body>
</html>