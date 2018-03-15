<?php
	//Matthew McClean - L00137316
	//LYIT Team Project 2018
	//BSc 5
	include("includes/header.php");

	//Get passed in ModuleNo
	$moduleNo=$_GET['ModNo'];

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	$title=$_POST['TopicName'];
	if($title != "")
	{
		//Get Details, date, creatorNo
		$details = $_POST['Details'];
		$date=date("Y-m-d");
		$id = $_SESSION['id'];
		//Insert Into Database
		$query = mysqli_query($connection, "INSERT INTO topic(TopicName,Details,DateCreated,CreatorNo,ModuleNo) VALUES('$title', '$details','$date', '$id', '$moduleNo')");
	}

	mysqli_close($connection);
	$done = true;
	if ($done)
{
    header("Location: module.php?ModuleNo=".$moduleNo);
    exit;
}
//L00137316
?>