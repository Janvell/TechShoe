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
	
	<div id="carousel">
		<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<div class="active item" style="padding:0; border-bottom:0 solid #111;"><img src="img/banner1.jpg" class="carousel"></div>
				<div class="item" style="padding:0; border-bottom:0 solid #111;"><img src="img/banner2.jpg" class="carousel"></div>
				<div class="item" style="padding:0; border-bottom:0 solid #111;"><img src="img/banner3.jpg" class="carousel"></div>
			</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div>
	

	<div id="video">
		<video controls autoplay width="445px" height="300px">
			<source src="video/video1.mp4" type="video/mp4">
		</video>
	</div>

	
	<div id="content">
		<div id="product" style="position:relative; margin-top:30%;">
			<center><h2><legend>Feature Items</legend></h2></center>
			<br />
			
			<div class='float'><center><a href='index1.php'><img class='img-polaroid' src='photo/367527167Rabatt_Prezzo_Ridotto_Adidas_Bounce_Titan_Herren_White_Schwarz_Running_Sho_Online.jpg' height = '300px' width = '300px'></a> Adidas Bounce Titan<br />₱9,000<br /><h3 class='text-info' style='position:absolute; margin-top:-90px; text-indent:15px;'></h3></center></div><div class='float'><center><a href='index1.php'><img class='img-polaroid' src='photo/852236910hypervenom.png' height = '300px' width = '300px'></a> Nike Hypervenom Neymar Jr.<br />₱12,000<br /><h3 class='text-info' style='position:absolute; margin-top:-90px; text-indent:15px;'></h3></center></div><div class='float'><center><a href='index1.php'><img class='img-polaroid' src='photo/40329068flyknit.jpg' height = '300px' width = '300px'></a> Flyknit 360<br />₱8,000<br /><h3 class='text-info' style='position:absolute; margin-top:-90px; text-indent:15px;'></h3></center></div><div class='float'><center><a href='index1.php'><img class='img-polaroid' src='photo/1272267959adizero-F50-FG.jpg' height = '300px' width = '300px'></a> Adidas Adizero F50<br />₱10,000<br /><h3 class='text-info' style='position:absolute; margin-top:-90px; text-indent:15px;'></h3></center></div><div class='float'><center><a href='index1.php'><img class='img-polaroid' src='photo/1125171488heat-lebron-11-17.jpg' height = '300px' width = '300px'></a> Lebron 11 <br />₱15,000<br /><h3 class='text-info' style='position:absolute; margin-top:-90px; text-indent:15px;'></h3></center></div><div class='float'><center><a href='index1.php'><img class='img-polaroid' src='photo/547866585reebok-blast-profile.jpg' height = '300px' width = '300px'></a> Reebok Blast<br />₱10,000<br /><h3 class='text-info' style='position:absolute; margin-top:-90px; text-indent:15px;'></h3></center></div>		</div>
		
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
	</div>
</body>
</html>

