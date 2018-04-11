<?php
//Matthew McClean - L00137316
//LYIT Team Project 2018
//BSc 5

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Get Module No
	$ModuleNo = $_GET['ModuleNo'];

	//Delete module from database
	$query = mysqli_query($connection, "DELETE FROM module WHERE ModuleNo='$ModuleNo'");

	mysqli_close($connection);
	$done = true;
	if ($done)
	{
		header("Location: manageModules.php");
   		exit;
	}
?>