<?php
	include("function/session.php");
	include("db/dbconn.php");
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
			
			<?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
					$fetch = mysqli_fetch_array ($query);
			?>
	
			<ul>
				<li><a href="function/logout.php"><i class="icon-off icon-white"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<a href="#profile" href  data-toggle="modal"><i class="icon-user icon-white"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a></li>
			</ul>
	</div>
	
	<div id="profile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">My Account</h3>
				</div>
					<div class="modal-body">
						<?php
							$id = (int) $_SESSION['id'];
			
								$query = mysqli_query ($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
								$fetch = mysqli_fetch_array ($query);
						?>
						<center>
					<form method="post">
						<center>
							<table>
								<tr>
									<td class="profile">Name:</td><td class="profile"><?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['mi'];?>&nbsp;<?php echo $fetch['lastname'];?></td>
								</tr>
								<tr>
									<td class="profile">Address:</td><td class="profile"><?php echo $fetch['address'];?></td>
								</tr>
								<tr>
									<td class="profile">Country:</td><td class="profile"><?php echo $fetch['country'];?></td>
								</tr>
								<tr>
									<td class="profile">ZIP Code:</td><td class="profile"><?php echo $fetch['zipcode'];?></td>
								</tr>
								<tr>
									<td class="profile">Mobile Number:</td><td class="profile"><?php echo $fetch['mobile'];?></td>
								</tr>
								<tr>
									<td class="profile">Telephone Number:</td><td class="profile"><?php echo $fetch['telephone'];?></td>
								</tr>
								<tr>
									<td class="profile">Email:</td><td class="profile"><?php echo $fetch['email'];?></td>
								</tr>
							</table>
						</center>
					</div>
				<div class="modal-footer">
					<a href="account.php?id=<?php echo $fetch['customerid']; ?>"><input type="button" class="btn btn-success" name="edit" value="Edit Account"></a>
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>
	
			<details>
  <summary></summary>
  <nav class="menu">
    <a href="home.php">Home</a>
    <a href="product1.php">Product</a>
    <a href="aboutus1.php">About Us</a>
    <a href="contactus1.php">Contact Us</a>
    <a href="privacy1.php">Privacy Policy</a>
	<a href="faqs1.php">FAQs</a>
	<a href="ourteam1.php">Our Team</a>
  </nav>
</details>		
	

<div id="container">
	<div class="nav">	
			 <ul>
				<li><a href=""> </i></a></li>
			</ul>
	</div>
	
	
		<img src="img/contactus.jpg" style="width:1150px; height:250px; border:1px solid #000; ">
	<br />
	<br />
	
		<div id="content">
			<form method="post">
				<table style="position:relative; left:25%;">
					<tr>
						<td style="font-size:20px;">Email:</td><td><input type="email" name="email" value="<?php echo $fetch['email']; ?>" style="width:400px;" disabled></td>
					</tr>
					<tr>
						<td style="font-size:20px;">Message:</td><td><textarea name="message" style="width:400px; height:300px;" required></textarea></td>
					</tr>
					<tr>
						<td></td><td><button class="btn btn-info" name="send" style="width:300px;"><i class="icon icon-ok icon-white"></i>Submit</button>&nbsp;<a href="index.php"><button class="btn btn-danger" style="width:110px;"><i class="icon icon-remove icon-white"></i>Cancel</button></a></td>
					</tr>
				</table> 
			</form> 
		</div>
		<?php
			
			
			if(isset($POST['send']));
			{
				@$email = $_POST['email'];
				@$message = $_POST['message'];
				
				mysqli_query ($conn, "INSERT INTO `contact` (email, message) VALUES ('$email', '$message')") or die (mysqli_error());
			}
		?>
		
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