<?php
//Matthew McClean - L00137316
//LYIT Team Project 2018
//BSc 5

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Get Course No
	$CourseNo = $_GET['CourseNo'];

	//Delete Course from database
	$query = mysqli_query($connection, "DELETE FROM course WHERE CourseNo='$CourseNo'");

	mysqli_close($connection);
	$done = true;
	if ($done)
	{
		header("Location: manageCourses.php");
   		exit;
	}
?>