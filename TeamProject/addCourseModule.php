<?php
//Matthew McClean - L00137316
//Team Project 2018
//BSc 5

	//Get ModuleNo
	$ModuleNo = $_GET['ModuleNo'];
	//Post CourseNo
	$CourseNo = $_POST['CourseNo'];

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	if($CourseNo != 0)
	{
		$query = mysqli_query($connection, "INSERT INTO coursemodule VALUES('$CourseNo','$ModuleNo')");
	}

	mysqli_close($connection);
	$done = true;
	if ($done)
	{
		header("Location: manageModules.php");
   		exit;
	}
?>