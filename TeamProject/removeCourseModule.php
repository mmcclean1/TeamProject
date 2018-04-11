<?php
//Matthew McClean - L00137316
//Team Project 2018
//BSc 5

	//Get ModuleNo, CourseNo
	$ModuleNo = $_GET['ModuleNo'];
	$CourseNo = $_GET['CourseNo'];

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Remove Course/Module from coursemodule table
	$query = mysqli_query($connection, "DELETE FROM coursemodule WHERE CourseNo='$CourseNo' AND ModuleNo='$ModuleNo'");

	mysqli_close($connection);
	$done = true;
	if ($done)
	{
		header("Location: manageModules.php");
   		exit;
	}
?>