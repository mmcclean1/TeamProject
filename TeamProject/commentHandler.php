<?php
//l00085571___andrew
	include("includes/header.php");

	//Get passed in TopicNo
	$TopicNo=$_GET['TopicNo'];

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Get Details, date, creatorNo
	$details=$_POST['Details'];
	$dateCreated=date("Y-m-d");
	$id = $_SESSION['id'];

	//Insert Into Database
	$query = mysqli_query($connection, "INSERT INTO comment(TopicNo,Comment,DateCreated,CreatorNo) VALUES('$TopicNo', '$details','$dateCreated', '$id')");
	print($query);

	mysqli_close($connection);
	$done = true;
	if ($done)
{
    header("Location: createComment.php?TopicNo=".$TopicNo);
    exit;
}

?>
