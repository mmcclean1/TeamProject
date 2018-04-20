
<?php include 'adminHeader.php';?>
<?php include 'adminSidebar.php';?>
<?php require 'config/config.php';?>
<?php include 'session.php';?>
<?php include("includes/Functions.php");?>

<!--John Lee Heaney-->
<!--Bsc Computing Year 3-->

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
<h1>Edit Module</h1>
<?php
//Matthew McClean L00137316
//Team Project 2018
//BSc 5

	//Get Module No
	$ModuleNo = $_GET['ModuleNo'];

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Generate table
	print('<form method=POST action=editModuleHandler.php?ModuleNo='.$ModuleNo.'><table width=400 border=1 cellpadding=3 cellspacing=1 bgcolor=#FFFFFF>');
		print('<tr><td colspan=3 align=left bgcolor=#CBEAF8><strong>Edit Module</strong> </td></tr>');
		print('<tr><td><strong>Module Name</strong><input name=ModuleName type=text size=20 REQUIRED /><strong> </td></tr>');
		print('<tr><td><strong>Lecturer</strong><input name=Lecturer type=text size=20 REQUIRED /><strong> </td></tr>');
		print('<tr><td><strong>Year</strong><input name=Year type=text size=10 REQUIRED /></td></tr>');
		print('<tr><td><strong>Semester</strong><input name=Semester type=text size=10 REQUIRED /></td></tr>');
		print('<tr><td><input type=submit name=Submit></input><input type=button name=Cancel value=Cancel onclick=history.back()></button></td></tr>');
	print('</table></form>');
	
	mysqli_close($connection);
?>
<?php include('includes/adminFooter.php') ?>