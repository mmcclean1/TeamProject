<?php
//l00085571___andrew
	include("includes/header.php");

	//Get passed in TopicNo
	$TopicNo=$_GET['TopicNo'];

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	$comment=$_POST['Comment'];
	if($comment != "")
	{
		//Get Details, date, creatorNo
		//$comment_id = $_POST['CommentID'];
		$dateCreated=date("Y-m-d");
		$id = $_SESSION['id'];
		$TopicNo = $_SESSION['TopicNo']
		//Insert Into Database
		$query = mysqli_query($connection, "INSERT INTO comment(comment,DateCreated,CreatorNo,TopicNo) VALUES('$comment', '$dateCreated', '$id', '$TopicNo')");
	}

	mysqli_close($connection);
	$done = true;
	if ($done)
{
    header("Location: createComment.php?Comment_id=".$Comment_id);
    exit;
}

?>
