<?php require 'config/config.php'; ?>

<?php

function Redirect_to($New_Location){
	header("Location:".$New_Location);
	exit;	
}

function Login_Attemp($Username, $Password){
	$ConnectingDB;
	$Query="SELECT * FROM admin WHERE AdminName = '$Username' AND password = '$Password' ";
	$Execute = mysqli_query($con, $Query);
	if($admin=mysqli_fetch_assoc($Execute)){
		return $admin;
	}
	else{
		return null;
	}

}


function Login(){

	if(isset($_SESSION["User_Id"])){
		return true;
	}

}

function Confirm_Login(){

	if(!Login()){
		$_SESSION["ErrorMessage"]="Login Required !";

		Redirect_to("adminLogin.php");
	}
}

?>