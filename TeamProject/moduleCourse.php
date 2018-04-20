<?php include 'adminHeader.php';?>
<?php include 'adminSidebar.php';?>
<?php require 'config/config.php';?>
<?php include 'session.php';?>
<?php include("includes/Functions.php");?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<!--INCLUDE LIBRATIES FOR STYLING BOOTSTRAP AND JQUERY-->
		<title>Admin</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/adminstyles.css">
		<script type="text/javascript" src="assets/js/manageModules.js"></script>
	
			<style>
				<style>
			.wrapper {
				margin-left: 0px;
				padding-left: 0px;
			}
			
			/*TABLE LAYOUT*/
			/*    The border-collapse property sets whether the table borders are collapsed into a single border or detached as in standard HTML.*/
			table,tr,td {
				margin-left: 0px;
				border:solid thin #34495e;
				width:30%;
				height: 15%;
				border-collapse: collapse;
			}

			/*set color for every even(ever second row) row*/
			tr:nth-child(even) {
				background-color: #8dc38d; 
				color:black;
			}
			hr{
				height: 1px;
				/*				color: #123455;*/
				background-color: #123455;
				border: none;
			}

			th{
				font-size: 25px;
				font-family: sans-serif;
				background-color: grey;
				color: white; 
			}
					#button{
				margin-left: 1%;
			}

		</style>

		<meta charset="UTF-8">
	</head>

	<body>
	
		<div class="container-fluid">
			<!--MAIN AREA-->
			<div class="col-sm-10">
<!--Matthew McClean - L00137316 -->
<!--Team Project 2018-->
<!--BSc 5 -->
<?php
	$ModuleNo = $_GET['ModuleNo'];

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Get Module Details
	$moduleResult = mysqli_query($connection,"SELECT * FROM module WHERE ModuleNo='$ModuleNo'");

	//Get Course Details
	$courseResult = mysqli_query($connection, "SELECT * FROM course");

	//Print header
	while($row=mysqli_fetch_array($moduleResult))
		print('<h1>Module/Course details: '.$row['ModuleName'].'</h1>');

	//Add new course to list
	print('<form method=POST action=addCourseModule.php?ModuleNo='.$ModuleNo.'>');
		print('<select name=CourseNo>');
			print('<option value=0 DISABLED SELECTED>---</option>');
			while($row1=mysqli_fetch_array($courseResult))
				print('<option value='.$row1['CourseNo'].'>'.$row1['CourseName'].'</option>');
		print('</select>');
		print('<input type=submit value=Add></input>');
	print('</form>');

	print('Displayed is the list of all courses that have this module');

	//Get Course/Module details
	$courseModuleResult = mysqli_query($connection, "SELECT * FROM coursemodule WHERE ModuleNo='$ModuleNo'");

	//Generate table of all courses associated with the selected module
	print('<table border=1');
	print('<tr><th>CourseNo</th><th>CourseName</th></tr>');
	while($row=mysqli_fetch_array($courseModuleResult))
	{
		$CourseNo = $row['CourseNo'];
		print('<tr><td>'.$CourseNo.'</td>');
		//Get course details filtered by CourseNo
		$courseResultFilter = mysqli_query($connection, "SELECT * FROM course WHERE CourseNo='$CourseNo'");
		while($row2=mysqli_fetch_array($courseResultFilter))
			print('<td>'.$row2['CourseName'].'</td>');
		print('<td><a href=removeCourseModule.php?ModuleNo='.$ModuleNo.'&CourseNo='.$CourseNo.'>Remove</a></td></tr>');
	}
	print('</table>');
	mysqli_close($connection);
?>
<?php include('includes/adminFooter.php') ?>