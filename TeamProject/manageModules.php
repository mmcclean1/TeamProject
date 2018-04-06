<?php include 'session.php';?>
<?php include 'adminHeader.php';?>
<?php include 'adminSidebar.php';?>

<?php require 'config/config.php';?>


<!DOCTYPE html>
<html lang="en">
	<head>

		<!--INCLUDE LIBRATIES FOR STYLING BOOTSTRAP AND JQUERY-->
		<title>Manage Modules</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src='assets/js/manageModules.js'></script>
		<link rel="stylesheet" href="css/adminstyles.css">
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
		<div class="Line" style="height: 10px; background: #27aae1;"></div>
		<div class="container-fluid">
			<div class="row">
				<!--		MAIN AREA-->
				<div class="col-sm-10">
				<h1>&nbsp;Manage Modules</h1>

				<div class="col-md-11 col-md-offset-0" >
					<table class="table table-bordered">
					
					<tr><th>Module No</th><th>Module Name</th><th>Lecturer</th><th>Year</th><th>Semester</th><th>Information</th></tr>
					<?php
						//Connect to database
						$connection = mysqli_connect("localhost:3307","root","");
						mysqli_select_db($connection,"studentsupport");

						//Get all module information from database
						$moduleResult = mysqli_query($connection,"SELECT * FROM module");

						//Print modules to table
						while($row=mysqli_fetch_array($moduleResult))
						{
							print('<tr><td>'.$row['ModuleNo'].'</td><td>'.$row['ModuleName'].'</td><td>'.$row['Lecturer'].'</td>');
							print('<td>'.$row['Year'].'</td><td>'.$row['Semester'].'</td><td><a onmouseover=displayInfo(this) value='.$row['ModuleNo'].'>Info</a></td></tr>');
						}
					?>
				</table>

				</div>
			
					<!--END TABLE-->
				</div>
				<!--END MAIN AREA-->
			</div>
			<!--END ROW-->
		</div>
	
		<!--	END CONTAINER-->

<?php include 'adminFooter.php';?>

	</body>
</html>