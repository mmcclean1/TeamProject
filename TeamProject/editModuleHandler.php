<?php
//Matthew McClean - L00137316
//LYIT Team Project 2018
//BSc 5

	//Get ModuleNo, ModuleName, Lecturer, Year & Semester
	$ModuleNo = $_GET['ModuleNo'];
	$ModuleName = $_POST['ModuleName'];
	$Lecturer = $_POST['Lecturer'];
	$Year = $_POST['Year'];
	$Semester = $_POST['Semester'];

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Update module table
	$query = mysqli_query($connection, "UPDATE module SET ModuleName='$ModuleName',Lecturer='$Lecturer',Year='$Year',Semester='$Semester' WHERE ModuleNo='$ModuleNo'");

	mysqli_close($connection);
	$done=true;
	if($done)
	{
		header("Location: manageModules.php");
   		exit;
	}
?>