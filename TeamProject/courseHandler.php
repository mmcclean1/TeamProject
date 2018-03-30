<?php
//Matthew McClean - L00137316
//LYIT Team Project 2018
//BSc 5
	
	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Get Course name & length of course
	$CourseName = $_POST['CourseName'];
	print($CourseName);
	$Length = $_POST['Length'];
	print($Length);

	//Insert into database
	$query = mysqli_query($connection, "INSERT INTO course(CourseName,Length) VALUES('$CourseName','$Length')");
	print($query);

	mysqli_close($connection);
	$done = true;
	if ($done)
	{
		header("Location: manageCourses.php");
   		exit;
	}
?>