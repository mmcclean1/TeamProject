<?php include 'session.php';?>
<?php include("includes/Functions.php");?>
<?php require 'config/config.php';?>

<?php

//IF ID BUTTONG PRESSED TO THE FOLLOWING
if(isset($_GET["id"])){

	$idFromURL=$_GET["id"];
	$connectingDB;
	
	$Query="DELETE FROM topic WHERE TopicNo = '$idFromURL' ";
	$Execute=mysqli_query($con,$Query);
	
	if($Execute){
		//PRINT MESSAGE TO SCREEN WHEN SUCCESS DELETE TOPIC
		$_SESSION["SuccessMessage"]="Topic deleted successfully";
		Redirect_to("topics.php");
	}else{
		//PRINT MESSAGE TO SCREEN WHEN ERROR DELETE TOPIC
		$_SESSION["ErrorMessage"]="Something went wrong. Try again!";
		Redirect_to("topics.php");

	}

}

?>