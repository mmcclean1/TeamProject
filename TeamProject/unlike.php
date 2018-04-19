<?php
//Matthew McClean - L00137316
//LYIT Team Project 2018
//BSc 5
	include("includes/header.php");
	
	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Get CommentNo, TopicNo & User id
	$CommentNo = $_GET['CommentNo'];
	$TopicNo=$_GET['TopicNo'];
	$id=$_SESSION['id'];

	//Delete from database
	$query = mysqli_query($connection, "DELETE FROM likes WHERE CommentNo='$CommentNo' AND MemberNo='$id'");

	//Decrement likes by 1
	$minusOne = mysqli_query($connection, "UPDATE comment SET likes=likes-1 WHERE CommentNo='$CommentNo'");

	mysqli_close($connection);
	$done = true;
	if ($done)
	{
		header("Location: createComment.php?TopicNo=".$TopicNo);
   		exit;
	}
?>