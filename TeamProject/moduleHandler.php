<?php
//Matthew McClean - L00137316
//LYIT Team Project 2018
//BSc 5
	
	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Get Module name, lecturer, year & semsester
	$ModuleName = $_POST['ModuleName'];
	print($ModuleName);
	$Lecturer = $_POST['Lecturer'];
	print($Lecturer);
	$Year = $_POST['Year'];
	print($Year);
	$Semester = $_POST['Semester'];
	print($Semester);

	//Insert into database
	$query = mysqli_query($connection, "INSERT INTO module(ModuleName,Lecturer,Year,Semester) VALUES('$ModuleName','$Lecturer','$Year','$Semester')");
	print($query);

	mysqli_close($connection);
	$done = true;
	if ($done)
	{
		header("Location: manageModules.php");
   		exit;
	}
?>