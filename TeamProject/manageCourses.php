
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
		<style>
			.FieldInfo{
				color: rgb(251, 174, 44);
				font-family: Bitter, Georgia, "Times New Roman",Times, serif;
				font-size: 1.2em;
			}
			th{
				color:black;
				background-color: #ede9ed;
				border: 1px solid black;

			}
			.wrapper {
				margin-left: 0px;
				padding-left: 0px;
			}
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
		<div class="container-fluid">
		
			<!--MAIN AREA-->
			<div class="col-sm-10">

				<!--Matthew McClean - L00137316 -->
				<!--Team Project 2018-->
				<!--BSc 5 -->
				<script type="text/javascript" src="assets/js/courseHandler.js"></script>
				<h1>Manage Courses</h1>
				<button id='newCourse'>Add New Course</button><br><br>

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
					<br><br><br><br><br><br><br><br><br><br><br><br>
				</div>
				
		
			<!--CREATE TABLE CONTENTS-->
					<div class="col-md-8 col-md-offset-0" >
						<table class="table table-bordered" >	
			<tr><th>CourseNo</th><th>CourseName</th><th>Length</th></tr>
			<?php
			$courseResult = mysqli_query($con,'SELECT * FROM course');
			while($row=mysqli_fetch_array($courseResult))
			{
				print('<tr><td>'.$row['CourseNo'].'</td><td><a href=editCourse.php?CourseNo='.$row['CourseNo'].'>'.$row['CourseName'].'</td><td>'.$row['Length'].' years</td><td><a href=deleteCourse.php?CourseNo='.$row['CourseNo'].'>Delete</a></td></tr>');
			}
			?>
		</table>

		<!--END MAIN AREA-->
		</div>
		</div>

			</div>
			<!--END TABLE-->
		</div>
		<!--END MAIN AREA-->
		</div>
	<!--	END CONTAINER-->

	<?php include 'adminFooter.php';?>
	</body>
</html>
