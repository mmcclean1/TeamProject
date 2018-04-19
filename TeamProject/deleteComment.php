<?php
//l00085571___andrew
	include("includes/header.php");

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Get passed in CommentNo & TopicNo
	$CommentNo = $_GET['CommentNo'];
	$TopicNo = $_GET['TopicNo'];

	//Update comment in database to 'deleted'
	$query = mysqli_query($connection, "UPDATE comment SET comment='[deleted]', DELETED=TRUE WHERE CommentNo='$CommentNo'");

	mysqli_close($connection);
	$done = true;
	if ($done)
{
    header("Location: createComment.php?TopicNo=".$TopicNo);
    exit;
}

?>
