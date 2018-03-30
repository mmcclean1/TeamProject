<?php  

//UPDATE USER DETAILS
if(isset($_POST['update_details'])) {

	//STORE USER INFO
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];

	//FIND USER EMAIL MATCH
	$email_check = mysqli_query($con, "SELECT * FROM member WHERE email='$email'");
	$row = mysqli_fetch_array($email_check);
	$matched_user = $row['username'];

	
	//IF ELSE CONDITION
	if($matched_user == "" || $matched_user == $userLoggedIn) {
		$message = "Details updated!<br><br>";

		//UPDATE USER INFORMATION
		$query = mysqli_query($con, "UPDATE member SET first_name='$first_name', last_name='$last_name', email='$email' WHERE username='$userLoggedIn'");
	}
	
	//IF EMAIL ALREADY EXISTS
	else 
		$message = "That email is already in use!<br><br>";
}
else 
	$message = "";


//**************************************************

//UPDATE PASSWORD
if(isset($_POST['update_password'])) {

	//STORE OLD AND NEW PASSWORD
	$old_password = strip_tags($_POST['old_password']);
	$new_password_1 = strip_tags($_POST['new_password_1']);
	$new_password_2 = strip_tags($_POST['new_password_2']);

	//RUN QUERY
	$password_query = mysqli_query($con, "SELECT password FROM member WHERE username='$userLoggedIn'");
	
	$row = mysqli_fetch_array($password_query);
	$db_password = $row['password'];

	if(md5($old_password) == $db_password) {

		if($new_password_1 == $new_password_2) {


			if(strlen($new_password_1) <= 4) {
				$password_message = "Sorry, your password must be greater than 4 characters<br><br>";
			}	
			else {
				$new_password_md5 = md5($new_password_1);
				$password_query = mysqli_query($con, "UPDATE member SET password='$new_password_md5' WHERE username='$userLoggedIn'");
				$password_message = "Password has been changed!<br><br>";
			}


		}
		else {
			$password_message = "Your two new passwords need to match!<br><br>";
		}

	}
	else {
			$password_message = "The old password is incorrect! <br><br>";
	}

}
else {
	$password_message = "";
}




?>