
<?php include 'session.php';?>
<?php include("includes/Functions.php");?>
<?php require 'config/config.php';?>


<?php
//Matthew McClean - L00137316
//LYIT Team Project 2018
//BSc 5

//Connect to database
$connection = mysqli_connect("localhost:3307","root","");
mysqli_select_db($connection,"studentsupport");

//Get Admin No
$AdminNo = $_GET['AdminNo'];

//Delete Admin from database
$query = mysqli_query($connection, "DELETE FROM admin WHERE AdminNo='$AdminNo'");

mysqli_close($connection);
$done = true;
if ($done)
{
	//PRINT MESSAGE TO SCREEN WHEN SUCCESS DELETE ADMIN
	$_SESSION["SuccessMessage"]="Admin deleted successfully";
	Redirect_to("manageAdmins.php");
	
	header("Location: manageAdmins.php");
	exit;
}

else{
	//PRINT MESSAGE TO SCREEN WHEN ERROR DELETE ADMIN
	$_SESSION["ErrorMessage"]="Something went wrong. Try again!";
	Redirect_to("manageAdmins.php");

}

?>