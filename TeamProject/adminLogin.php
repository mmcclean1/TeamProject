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
		<!------ Include the above in your HEAD tag ---------->
	</head>
	<body>


		<div class="container">

			<div class="row" id="pwd-container">
				<div class="col-md-4"></div>

				<div class="col-md-4">
					<section class="login-form">
						<form method="POST" action="adminLogin.php" role="login"><br><br>

							<!--PUT COMPANY LOGO HERE-->
<!--							<div class = logos><img src="assets/images/backgrounds/logo.jpg" alt="logo" width="200" height="90">-->
							<img src="assets/images/backgrounds/logo.jpg" class="img-responsive" alt="" />


							<input type="adminName" name="admin_log_name" placeholder="Admin Name" 

									 value="<?php 
											  if(isset($_SESSION['admin_log_name'])) {
												  echo $_SESSION['admin_log_name'];
											  } 
											  ?>" 
									 required class="form-control input-lg" value="admin username"/>



							<input type="password" name="admin_log_password" class="form-control input-lg" id="password" placeholder="Password" required="" />

							<?php if(in_array("Username or password was incorrect<br>", $error_array)) echo  "Username or password was incorrect<br>"; ?>

							<div class="pwstrength_viewport_progress"></div>


							<button type="submit" name="login_button" value="Login" class="btn btn-lg btn-primary btn-block">Sign in</button>
							<div>
								<!--								<a href="#">Create account</a> or <a href="#">reset password</a>-->
							</div>

						</form>

						<div class="form-links">
							<!--ADD IN WEBSITE LINK-->
							<a href="../index.php">logos wesbite</a>
						</div>
					</section>  
				</div>

				<div class="col-md-4"></div>
			</div>


			<p>
				<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2FW00op" target="_blank">
					<br>
					<br>

					</p>     



			</body>
		</html>