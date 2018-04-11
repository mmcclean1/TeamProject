<?php
//Matthew McClean - L00137316
//LYIT Team Project 2018
//BSc 5

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Get Admin No
	$AdminNo = $_GET['AdminNo'];

	//Delete Admin from database
	$query = mysqli_query($connection, "DELETE FROM admin WHERE AdminNo='$AdminNo'");

	mysqli_close($connection);
	$done = true;
	if ($done)
	{
		header("Location: manageAdmins.php");
   		exit;
	}
?>