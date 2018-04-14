<?php
//l00085571___andrew
	include("includes/header.php");

	//Get passed in TopicNo
	$deleteid = $_GET['Comment_id'];

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");



	 mysqli_query("DELETE FROM comment WHERE Comment_id='$deleteid'");

	mysqli_close($connection);
	$done = true;
	if ($done)
{
    header("Location: createComment.php?TopicNo=".$TopicNo);
    exit;
}

?>
