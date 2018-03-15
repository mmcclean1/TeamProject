<?php  
//Matthew McClean L00137316, John Lee Heaney L00063777
//LYIT Team Project 2018
//BSc 5
$error_array = array(); //Holds error messages

if(isset($_POST['login_button'])) {

	$adminName = $_POST['admin_log_name'];//Get username

	$_SESSION['admin_log_name'] = $adminName; //Store username into session variable 
	$password = $_POST['admin_log_password']; //Get password

	$check_database_query = mysqli_query($con, "SELECT * FROM admin WHERE AdminName='$adminName' AND Password='$password'");
	$check_login_query = mysqli_num_rows($check_database_query);

	if($check_login_query == 1) {
		$row = mysqli_fetch_array($check_database_query);
		//$username = $row['username'];
		$id = $row['AdminNo'];

		$user_closed_query = mysqli_query($con, "SELECT * FROM member WHERE email='$email' AND user_closed='yes'");
		if(mysqli_num_rows($user_closed_query) == 1) {
			$reopen_account = mysqli_query($con, "UPDATE users SET user_closed='no' WHERE email='$email'");
		}

		//$_SESSION['username'] = $username;
		$_SESSION['adminId'] = $id;
		header("Location: adminHome.php");
		exit();
	}
	else {
		array_push($error_array, "Username or password was incorrect<br>");
	}


}
//L00137316, L00063777
?>