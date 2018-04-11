<?php
//Matthew McClean - L00137316
//LYIT Team Project 2018
//BSc 5

	//Get CourseNo, CourseName, Length
	$CourseNo = $_GET['CourseNo'];
	$CourseName = $_POST['CourseName'];
	$Length = $_POST['Length'];

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Update course table
	$query = mysqli_query($connection, "UPDATE course SET CourseName='$CourseName',Length='$Length' WHERE CourseNo='$CourseNo'");

	mysqli_close($connection);
	$done=true;
	if($done)
	{
		header("Location: manageCourses.php");
   		exit;
	}
?>