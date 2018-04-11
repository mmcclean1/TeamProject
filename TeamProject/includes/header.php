<?php  
require 'config/config.php';


//QUERY TO PRINT THE USERNAME TO SCREEN
if (isset($_SESSION['username'])) {
	
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM member WHERE username='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
}

else {
	header("Location: register.php");
}

?>
<!--JOHN LEE HEANEY FULL PAGE-->
<html>
	<head>
		<title>Welcome to Lyit</title>

		<!-- Javascript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


		<!-- CSS -->
		<!--	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">


		<!--ADD FONT AMESOME FOR ICONS-->
		<link rel="stylesheet" href="csss/fontawesome-all.min.css">	


		<style>

			/*	STYLE SITE LOGO*/
			.logos{
				float: left;
				margin-right: 615px;
			}
		</style>


	</head>
	<body>

		<div class="logo">
			<!--LOGO-->
			
			<div id="header">

			</div>

			<!--NAVIGATION FOR TOP BAR-->
			<div class="topnav">
				<div class="menu">
					<li><a href="includes/handlers/logout.php">Logout
						<i class="fas fa-sign-out-alt"></i></a></li>
					<li><a href="">News</a></li>
					<li><a href="">Gallery</a></li>
					<li><a href="">About Us</a></li>
					<li><a href="index.php">Home</a></li>

					<!--SITE LOGO-->
					<div class = logos><img src="assets/images/backgrounds/logo.jpg" alt="logo" width="200" height="90">
					</div>

				</div>
			</div>
		</div>

		<div class="wrapper">
	

