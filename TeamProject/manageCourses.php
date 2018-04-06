<?php include 'session.php';?>
<?php include 'adminHeader.php';?>
<?php include 'adminSidebar.php';?>

<?php require 'config/config.php';?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<!--INCLUDE LIBRATIES FOR STYLING BOOTSTRAP AND JQUERY-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src='assets/js/courseHandler.js'></script>
		<link rel="stylesheet" href="css/adminstyles.css">
		<style>
			th{
				color:black;
				background-color: #ede9ed;
				border: 1px solid black;

			}

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
; 
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
		<title>Manage Courses</title>
	</head>
	<body>
	
		<div class="Line" style="height: 10px; background: #27aae1;"></div>
		<div class="container-fluid">
			<div class="row">
				<!--MAIN AREA-->
				<div class="col-sm-10">
								
					<h1>&nbsp;Manage Courses</h1>
					<div id="button">
						<button id='newCourse'>Add New Course</button>
					</div>

					<div id='newCourseDiv' style=display:none>
						<br><br>

						<!--CREATE TABLE CONTENTS-->	
						<div class="col-md-4 col-md-offset-0" >
							<form method='POST' action='courseHandler.php'>
								<table class="table table-sm">
									<thead>
										<tr><td ><strong>Create Course</strong> </td></tr>
										<tr><td><strong>Course Name </strong><input name='CourseName' type='text' size='29' REQUIRED /></td></tr><strong> 
										<tr><td><strong>Length of Course </strong><input name='Length' type='text' size='25' REQUIRED /></td></tr>
										<tr><td><input type='submit' name='Submit'></input></td></tr></thead>
								</table>
							</form>
					</div>
				</div>
				<br><br><br><br><br><br><br><br><br><br>

				<div class="col-md-8 col-md-offset-0" >
					<table class="table table-bordered">
						<tr ><th>CourseNo</th><th>CourseName</th><th>Length</th><th>Delete</th></tr>
						<tr><?php
							$courseResult = mysqli_query($con,'SELECT * FROM course');
							while($row=mysqli_fetch_array($courseResult))
							{
								print('<tr><td>'.$row['CourseNo'].'</td><td><a href=editCourse.php?CourseNo='.$row['CourseNo'].'>'.$row['CourseName'].'</td><td>'.$row['Length'].' years</td><td><a href=deleteCourse.php?CourseNo='.$row['CourseNo'].'>Delete</a></td></tr>');
							}
							?></tr>
					</table>
				</div>
				<!--END TABLE-->
			</div>
			<!--END MAIN AREA-->
		</div>
		<!--END ROW-->
		</div>

		<?php include 'adminFooter.php';?>
	</body>
</html>



