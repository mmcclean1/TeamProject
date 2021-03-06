<?php 
include("includes/header.php");
require 'includes/form_handlers/settings_handler.php';

?>
<!--ADD BOOTSTRAP FOR BETTER STYLING AND LAYOUT-->
<link rel="stylesheet" href="css/bootstrap.min.css">


<style>
	.wrapper {
		margin-left: 0px;
		padding-left: 0px;

	}

	.left{
		text-align: left;
	}
</style>

<!--INCLUDE SIDEBAR-->
<?php include("includes/sidebar.php");?>
<div class="index_main_column column" >

	<div class="main_columnTwo column">

		<div id='color1'>
			<h1 align="center">Account Settings</h1>
		</div>

		<!--PRINT USER PICTURE-->
		<?php
		echo "<img src='". $user['profile_pic']."'class='small_profile_pic'>";

		?>
		<br><br><br>

		<p class="left"><b>Modify the values and click 'Update Details'</b></p><br>

		<?php
		$user_data_query = mysqli_query($con, "SELECT first_name, last_name, email FROM member WHERE username='$userLoggedIn'");
		$row = mysqli_fetch_array($user_data_query);

		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
		$email = $row['email'];
		
		?>

		<form action="settings.php" method="POST">
			First Name: <input type="text" name="first_name" value="<?php echo $first_name; ?>" id="settings_input"><br>
			Last Name: <input type="text" name="last_name" value="<?php echo $last_name; ?>" id="settings_input"><br>
			Email: <input type="text" name="email" value="<?php echo $email; ?>" id="settings_input"><br>
			<?php echo $message; ?>

			<input type="submit" name="update_details" id="save_details" value="Update Details" class="info settings_submit"><br>
		</form>



		<h4>Change Password</h4>
		<form action="settings.php" method="POST">
			Old Password: <input type="password" name="old_password" id="settings_input"><br>
			New Password: <input type="password" name="new_password_1" id="settings_input"><br>
			New Password Again: <input type="password" name="new_password_2" id="settings_input"><br>

			<?php echo $password_message; ?> 

			<input type="submit" name="update_password" id="save_details" value="Update Password" class="info settings_submit"><br>
		</form>
	</div>

</div>

<footer><?php include("includes/footer.php");?></footer>