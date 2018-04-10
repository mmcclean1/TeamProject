<?php
require '../../config/config.php';
//Declaring variables to prevent errors
$ReportType = ""; //
$ReportContent = ""; 




	
	//Details
	$ReportType = $_POST['ReportType'];
	print($ReportType);
	$ReportContent = $_POST['ReportContent'];
	print($ReportContent);

	
	
	if($ReportType != '');
	{
		print('ok');
	

		$query = mysqli_query($con, "INSERT INTO meeting(ReportNo,ReportContent,ReportType) VALUES(''$ReportType','$ReportContent')");
		print($query);
	}
	mysqli_close($con);

	$done = true;
	if ($done)
	{
		header("Location: ../../Report.php");
    	exit;
	}
		
?>