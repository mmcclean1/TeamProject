
<?php include 'session.php';?>
<?php include("includes/Functions.php");?>
<?php require 'config/config.php';?>


<?php
//John Lee Heaney
//LYIT Team Project 2018
//BSc computing

//Connect to database
$connection = mysqli_connect("localhost:3307","root","");
mysqli_select_db($connection,"studentsupport");

//Get member No
$id= $_GET['id'];

//Delete member from database ASK WHY IS MEMEBER NOT DELETING??????????
$query = mysqli_query($connection, "DELETE FROM member WHERE id='$id'");

mysqli_close($connection);
$done = true;
if ($done)
{
	//PRINT MESSAGE TO SCREEN WHEN SUCCESS DELETE ADMIN
	$_SESSION["SuccessMessage"]="Student deleted successfully";
	Redirect_to("adminHome.php");
	
	header("Location: adminHome.php");
	exit;
}

else{
	//PRINT MESSAGE TO SCREEN WHEN ERROR DELETE ADMIN
	$_SESSION["ErrorMessage"]="Something went wrong. Try again!";
	Redirect_to("adminHome.php");

}

?>