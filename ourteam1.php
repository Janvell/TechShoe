<?php 
	include("function/session.php");
	include("db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>TechShoe</title>
	<link rel="icon" href="img/logo3.png" />
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
		<img src="img/logo3.png">
		<label>TechShoe</label>
		<?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
					$fetch = mysqli_fetch_array ($query);
			?>
	
			<ul>
				<li><a href="index1.php"><i class="icon-off icon-white"></i>logout</a></li>
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