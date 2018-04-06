<?php  
//Matthew McClean L00137316, John Lee Heaney L00063777
//LYIT Team Project 2018
//BSc 5
require 'config/config.php';
//require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/admin_login_handler.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="assets/js/register.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

		<!--INCLUDE BOOTSTRAP IN ALL PAGES-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/adminstyles.css">
	</head>
	<body>

		<style>

			* {
				margin: 0;
				padding: 0;

			}
			#form{
				margin: 0px;
				background-color: #bfe0ac;
				padding: 30px;
				height: 500px;
			}
			

			#img{
				border-radius: 20px;
				display: block;
				margin-left: auto;
				margin-right: auto;
			}

		</style>
		<div class="container">
			<div class="row" id="pwd-container">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<section class="login-form">
						<form id="form" method="POST" action="adminLogin.php" role="login"><br><br>
							<!--PUT COMPANY LOGO HERE-->
							<!--							<div class = logos><img src="assets/images/backgrounds/logo.jpg" alt="logo" width="200" 
height="90">-->
							<img id="img" src="assets/images/backgrounds/logo.jpg" class="img-responsive" alt="" /><br>
							<input type="adminName" name="admin_log_name" placeholder="Admin Name" 

									 value="<?php 
											  if(isset($_SESSION['admin_log_name'])) {
												  echo $_SESSION['admin_log_name'];
											  } 
											  ?>" 
									 required class="form-control input-lg" value="admin username"/><br>
							<input type="password" name="admin_log_password" class="form-control input-lg" id="password" placeholder="Password" required="" /><br>

							<?php if(in_array("Username or password was incorrect<br>", $error_array)) echo  "Username or password was incorrect<br>"; ?>

							<div class="pwstrength_viewport_progress"></div>
							<button type="submit" name="login_button" value="Login" class="btn btn-lg btn-primary btn-block">Sign in</button>
							<div>
								<!--<a href="#">Create account</a> or <a href="#">reset password</a>-->
							</div>
							<div class="form-links" ><br>
								<!--ADD IN WEBSITE LINK-->
								<a href="index.php" >Logos Wesbite</a></div>
						</form>
					</section>  
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
		<p>
			<!--<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2FW00op" target="_blank">-->
			<br>
			<br>
		</p>     
	</body>
</html>