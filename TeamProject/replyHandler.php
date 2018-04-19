<?php
//Matthew McClean L00137316
//Team Project 2018
//BSc 5
	include("includes/header.php");

	//Get passed in TopicNo & ReplyTo
	$TopicNo=$_GET['TopicNo'];
	$ReplyTo = $_GET['ReplyTo'];

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Get Details, date, creatorNo
	$details=$_POST['Details'];
	$dateCreated=date("Y-m-d H:m:s");
	$id = $_SESSION['id'];

	//Insert Into Database
	$query = mysqli_query($connection, "INSERT INTO comment(TopicNo,Comment,DateCreated,CreatorNo,ReplyTo) VALUES('$TopicNo', '$details','$dateCreated', '$id','$ReplyTo')");
	print($query);

	mysqli_close($connection);
	$done = true;
	if ($done)
{
    header("Location: createComment.php?TopicNo=".$TopicNo);
    exit;
}

?>