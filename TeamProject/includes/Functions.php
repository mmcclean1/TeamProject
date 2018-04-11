<?php require 'config/config.php'; ?>

<!--INCLUE THE DB.PHP HERE-->
<?php require_once("Includes/Sessions.php"); ?>
<?php
function Redirect_to($New_Location){

	header("Location:".$New_Location);
	exit;
}

//function Login_Attempt($Username,$Password){
//	$ConnectingDB;
//	$Query="SELECT * FROM registration
//    WHERE username='$Username' AND password='$Password'";
//	$Execute=mysqli_query($con,$Query);
//	if($admin=mysqli_fetch_assoc($Execute)){
//		return $admin;
//	}else{
//		return null;
//	}
//}
//
//function Login(){
//	if(isset($_SESSION["User_Id"])){
//		return true;
//	}
//}
//
//function Confirm_Login(){
//	if(!Login()){
//		$_SESSION["ErrorMessage"]="Login Required ! ";
//		//		 change back to login.php
//		Redirect_to("adminLogin.php");
//	}
//
//}




?>