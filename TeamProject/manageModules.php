

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
				color:white
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

		</style>

		<meta charset="UTF-8">
	</head>

	<body>
	
		<div class="container-fluid">
			<!--MAIN AREA-->
			<div class="col-sm-10">
					<h1>&nbsp;Manage Modules</h1><br>

					<button id='newModule'>Add New Module</button>

					<div id='newModuleDiv' style=display:none>
						<br><br>
						<form method='POST' action='moduleHandler.php'>
							<table width='400' border='1' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
								<tr><td colspan='3' align='left' bgcolor='#CBEAF8'><strong>Create Course</strong> </td></tr>
								<tr><td><strong>Module Name</strong><input name='ModuleName' type='text' size='20' REQUIRED /><strong> </td></tr>
								<tr><td><strong>Lecturer</strong><input name='Lecturer' type='text' size='20' REQUIRED /><strong> </td></tr>
								<tr><td><strong>Year</strong><input name='Year' type='text' size='10' REQUIRED /></td></tr>
								<tr><td><strong>Semester</strong><input name='Semester' type='text' size='10' REQUIRED /></td></tr>
								<tr><td><input id='submit' type='submit' name='Submit'></input></td></tr>
							</table>
						</form>
					</div>

				<div class="col-md-8 col-md-offset-0" >
					<table class="table table-bordered">
					
					<tr><th>Module No</th><th>Module Name</th><th>Lecturer</th><th>Year</th><th>Semester</th><th>Information</th></tr>
					<?php
						//Connect to database
						$connection = mysqli_connect("localhost","root","");
						mysqli_select_db($connection,"studentsupport");

						//Get all module information from database
						$moduleResult = mysqli_query($connection,"SELECT * FROM module");

						//Print modules to table
						while($row=mysqli_fetch_array($moduleResult))
						{
							print('<tr><td>'.$row['ModuleNo'].'</td><td>'.$row['ModuleName'].'</td><td>'.$row['Lecturer'].'</td>');
							print('<td>'.$row['Year'].'</td><td>'.$row['Semester'].'</td><td><a onmouseover=displayInfo(this) value='.$row['ModuleNo'].'>Info</a></td>');
							print('<td><a href=deleteModule.php?ModuleNo='.$row['ModuleNo'].'>Delete</a></td></tr>');
						}
					?>
				</table>

				</div>
				<!--END TABLE-->
			</div>
			<!--END MAIN AREA-->
		</div>
		<!--	END CONTAINER-->

		<?php include 'adminFooter.php';?>
	</body>
</html>

