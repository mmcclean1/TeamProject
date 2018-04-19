<?php include 'session.php';?>
<?php include("includes/Functions.php");?>
<?php require 'config/config.php';?>
<?php
	if(isset($_GET["id"])){

	$idFromURL=$_GET["id"];
	$connectingDB;
	
	$Query="UPDATE comment SET comment='[deleted]', DELETED=TRUE WHERE CommentNo='$idFromURL'";
	$Execute=mysqli_query($con,$Query);
	
	if($Execute){
		//PRINT MESSAGE TO SCREEN WHEN SUCCESS DELETE COMMENT
		$_SESSION["SuccessMessage"]="Comment deleted successfully";
		Redirect_to("comments.php");
	}else{
		//PRINT MESSAGE TO SCREEN WHEN ERROR DELETE COMMENT
		$_SESSION["ErrorMessage"]="Something went wrong. Try again!";
		Redirect_to("comments.php");

	}

}

?>