<?php  
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>


<html>
	<head>
		<title>Welcome to Lyit!</title>
		<link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="assets/js/register.js"></script>
		<style>
			.course{
				margin-right: 32%;
			}
			.findCourse{
				/*				margin-right: 53%;*/
				color: #0029ff;
			}

			.imageTwo{
				/*				margin-right: 48%;*/
				color:  #0029ff;
			}
			.image{
				margin-right: 15%;
				color: #0029ff;
			}
			.register{
				margin-right: 54%;
			}
			.signin{
				margin-right: 20%;
			}
		</style>

	</head>
	<body>

		<?php  

		if(isset($_POST['register_button'])) {
			echo '
		<script>

		$(document).ready(function() {
			$("#first").hide();
			$("#second").show();
		});

		</script>

		';
		}


		?>

		<div class="wrapper">
			<div class="login_box">
				<div class="login_header">
					<h1>Logos</h1>
					Login or sign up below!
				</div>
				<br>

				<div id="first">

					<!--			LOGIN IN FORM-->
					<form action="register.php" method="POST">
						<input type="email" name="log_email" placeholder="Email Address" value="<?php 
																														if(isset($_SESSION['log_email'])) {
																															echo $_SESSION['log_email'];
																														} 
																														?>" required>
						<br>
						<input type="password" name="log_password" placeholder="Password">
						<br>
						<?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "Email or password was incorrect<br>"; ?>
						<input type="submit" name="login_button" value="Login">
						<br>
						<a href="#" id="signup" class="signup"  style="color: #0029ff;">Need an account? Register here!</a>

					</form>

				</div>

				<!--		REGISTER FORM-->
				<div id="second">
					<!--NEED END BIT OF CODE TO UPLOAD PIC-->
					<form action="register.php" method="POST" enctype="multipart/form-data">
						<input type="text" name="reg_fname" placeholder="First Name" value="<?php 
																												  if(isset($_SESSION['reg_fname'])) {
																													  echo $_SESSION['reg_fname'];
																												  } 
																												  ?>" required>
						<br>
						<?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>

						<input type="text" name="reg_lname" placeholder="Last Name" value="<?php 
																												 if(isset($_SESSION['reg_lname'])) {
																													 echo $_SESSION['reg_lname'];
																												 } 
																												 ?>" required>
						<br>
						<?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>

						<input type="email" name="reg_email" placeholder="Email" value="<?php 
																											 if(isset($_SESSION['reg_email'])) {
																												 echo $_SESSION['reg_email'];
																											 } 
																											 ?>" required>
						<br>

						<input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php 
																														 if(isset($_SESSION['reg_email2'])) {
																															 echo $_SESSION['reg_email2'];
																														 } 
																														 ?>" required>
						<br>
						<?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; 
						else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
						else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>"; ?>


						<input type="password" name="reg_password" placeholder="Password" required>
						<br>
						<input type="password" name="reg_password2" placeholder="Confirm Password" required>
						<br>
						<?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>"; 
						else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
						else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "Your password must be betwen 5 and 30 characters<br>"; ?>

<!--
						<div class="image">
							PROFILE IMAGE

							<b class="imageTwo">Image:</b>  <input type="file" name="profile_pic"/></div>
-->
						<!--					<input type="file" name="profile_pic"/>-->
						<br>

						<!--SELECT COURSE FROM DROPDOWN-->


						<div class="course">

							<b class="findCourse">Find Course:</b>  <select name ='courseNo'>	
							<option >All</option>

							<?php
							//RUN QUERY TO GET COURSE NUMBER 
							$result = mysqli_query($con,"SELECT * from course");
							while($row = mysqli_fetch_array($result))   {

								echo "<option value=".$row["CourseNo"].">".$row["CourseName"]."</option>";

							}

							?>

							</select><br><br>
						</div>

						<!--USE DIVS TO BE ABLE TO STYLE SECTIONS OF CODE-->
						<div class="register">
							<!--REGISTER BUTTON-->
							<input type="submit" name="register_button" value="Register">
						</div>
						<br>

						<!--STYLES THE TEXT FOR WHEN A REGISTER USER SIGNS UP NOTIFYING THEM-->
						<?php if(in_array("<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>
						<a href="#" id="signin" class="signin" style="color: #0029ff;">Already have an account? Sign in here!</a>
					</form>
				</div>

			</div>

		</div>


	</body>
</html>