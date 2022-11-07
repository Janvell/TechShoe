<?php 
	include("function/login.php");
	include("function/customer_signup.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>TechShoe</title>
	<link rel="icon" href="img/logo.jpg" />
	<link rel="stylesheet" href="stylemainscreen.css">
    <link rel="stylesheet" href="./styles2.css">
	<link rel="stylesheet" href="./style3.css">
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

	<div id="header">
		<img src="img/logo.jpg">
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

<div class="mainscreen">

	<div class="ourteam" id="ourteam">
		<h1 class="title">our team</h1>
		<div class="ourteam_wrapper">
			<div class="team-1 team">
				<div class="team_members" data-name="nathan john"><img src="images/team11.jpg" alt="Team_Images"></div>
				<div class="team_members" data-name="Alyssa Healy"><img src="images/team12.jpg" alt="Team_Images"></div>
				<div class="team_members" data-name="Alec Stewart"><img src="images/team13.jpg" alt="Team_Images"></div>
			</div>
			<div class="team-2 team">
				<div class="team_members" data-name="Michael Rippon"><img src="images/team14.jpg" alt="Team_Images"></div>
				<div class="team_members" data-name="Meg Lanning"><img src="images/team15.jpg" alt="Team_Images"></div>
				<div class="team_members" data-name="Sophie Devine"><img src="images/team16.jpg" alt="Team_Images"></div>
                <div class="team_members" data-name="Sophie Devine"><img src="images/team17.jpg" alt="Team_Images"></div>
			</div>
		</div>
	</div>	


	<div class="footer">
		<a href="#">© TechShoe Philippines</a>
	</div>


	<div class="arrow">
		<a href="#home"><img src="images/arrow.png" alt="up_arrow"></a>
	</div>
</div>	

            















</body>
</html>