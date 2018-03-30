<?php
require '../../config/config.php';
//Declaring variables to prevent errors
$mId = ""; //
$room = ""; //room
$details = ""; //details
$date = ""; //date 
$time = ""; //time


	
	//Details
	$details = $_POST['details'];
	print($details);
	$date = $_POST['date'];
	print($date);
	$time = $_POST['time'];
	print($time);
	$mId = $_SESSION['id'];
	print($mId);
	$room = $_POST['room'];
	print($room);
	
	
	if($details != '');
	{
		print('ok');
	

		$query = mysqli_query($con, "INSERT INTO meeting(CreatorNo,Date,time,room,details) VALUES('$mId','$date','$time','$room','$details')");
		print($query);
	}
	mysqli_close($con);

	$done = true;
	if ($done)
	{
		header("Location: ../../meetings.php");
    	exit;
	}
		
?>