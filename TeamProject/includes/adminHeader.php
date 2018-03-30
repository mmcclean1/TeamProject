<?php  
require 'config/config.php';


if (isset($_SESSION['adminId'])) {
	$userLoggedIn = $_SESSION['adminId'];
	$user_details_query = mysqli_query($con, "SELECT * FROM admin WHERE AdminNo='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
}

else {
	header("Location: admin/adminLogin.php");
}

?>

<html>
<head>
	<title>Logos - Administration</title>

	<!-- Javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- CSS -->
<!--	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
	<!--<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">-->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
	
		<!--ADD FONT AMESOME-->
		<link rel="stylesheet" href="css/fontawesome-all.min.css">	
	
		
</head>
<body>

	<div class="top_bar"> 

		<div class="logo">
			<!--LOGO-->
			<img src="assets/images/backgrounds/logo.jpg" class="logos" alt="logo" width="200" height="95">
			
<!--			<a href="index.php">Discussion Board!</a>-->
			
		</div>

		<nav>
			<a href="adminHome.php">
					<i class="fa fa-home fa-lg"></i></a>

			<a href="includes/handlers/adminLogout.php">
						<i class="fas fa-sign-out-alt"></i>
					</a>
		</nav>

	</div>


	<div class="wrapper">