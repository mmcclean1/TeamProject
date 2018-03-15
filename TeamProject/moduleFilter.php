<?php
//Matthew McClean L00137316
//LYIT Team Project 2018
//BSc 5
	//Get year, semester & moduleNo
	$year = $_GET['year'];
	$semester = $_GET['semester'];
	$courseNo = $_GET['courseNo'];

	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	$result;

	//Specific year, specific semester
	if(($year != 0) && ($semester != 0))
	{
		$result = mysqli_query($connection, "SELECT * FROM module INNER JOIN coursemodule ON coursemodule.ModuleNo=module.ModuleNo WHERE CourseNo=$courseNo AND Year=$year AND Semester=$semester");
	}
	//All years, specific semester
	elseif(($year == 0) && ($semester != 0))
	{
		$result = mysqli_query($connection, "SELECT * FROM module INNER JOIN coursemodule ON coursemodule.ModuleNo=module.ModuleNo WHERE CourseNo=$courseNo AND Semester=$semester");
	}
	//Specific year, both semesters
	elseif(($year != 0) && ($semester == 0))
	{
		$result = mysqli_query($connection, "SELECT * FROM module INNER JOIN coursemodule ON coursemodule.ModuleNo=module.ModuleNo WHERE CourseNo=$courseNo AND Year=$year");
	}
	//All years, both semesters
	else
	{
		$result = mysqli_query($connection, "SELECT * FROM module INNER JOIN coursemodule ON coursemodule.ModuleNo=module.ModuleNo WHERE CourseNo=$courseNo");
	}

	$rs = array();
	$i=0;
	while($rs[] = mysqli_fetch_assoc($result)) {
		// do nothing ;-)
	}

	mysqli_close($connection);

	unset($rs[count($rs)-1]);  //removes a null value
	// print("{ \"modules\":" . json_encode($rs) . "}");
	print("{ \"modules\":" . json_encode($rs) ."}");

//L00137316
?>
