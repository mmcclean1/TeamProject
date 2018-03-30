<?php require_once("Includes/Sessions.php"); ?>

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

			}

		</style>

		<meta charset="UTF-8">
		<title>Manage Courses</title>
	</head>
	<div style="height: 10px; background: #27aae1;"></div>
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<!--NAVBAR-->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="Blog.php">
					<!--SITE LOGO-->
					<img style="margin-top: -16px;" src="assets/images/backgrounds/logo.jpg" width=200; height="52">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="collapse">
				<ul class="nav navbar-nav">
					<!--			<li class="active"><a href="Blog.php" target="_blank">Admin</a></li>-->
					<li><a href="#">Admin</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="Line" style="height: 10px; background: #27aae1;"></div>
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-2">
				<br><br>
				<ul id="Side_Menu" class="nav nav-pills nav-stacked">
					<li class="active">
						<a href="adminHome.php">
							<span class="glyphicon glyphicon-th"></span>
							&nbsp;Dashboard</a></li>
					<li><a href="Categories.php">
						<span class="glyphicon glyphicon-tags"></span>
						&nbsp;Categories</a></li>
					<li><a href="Admins.php">
						<span class="glyphicon glyphicon-user"></span>
						&nbsp;Manage Admins</a></li>
					<li><a href="manageCourses.php">
						<span class="glyphicon glyphicon-user"></span>
						&nbsp;Manage Courses</a></li>
					<li><a href="manageModules.php">
						<span class="glyphicon glyphicon-user"></span>
						&nbsp;Manage Modules</a></li>
					<li><a href="Comments.php">
						<span class="glyphicon glyphicon-comment"></span>
						&nbsp;Comments
						<?php
						$ConnectingDB;
						//							$QueryTotal="SELECT FROM member";
						$QueryTotal="SELECT * FROM comment WHERE comment_status='OFF'";
						$ExecuteTotal=mysqli_query($con,$QueryTotal);
						$RowsTotal=mysqli_fetch_array($ExecuteTotal);
						$Total=array_shift($RowsTotal);

						if($Total>0){
						?>
						<span class="label pull-right label-warning">
							<?php echo $Total;?>
						</span>

						<?php } ?>
						</a></li>

					<li><a href="Logout.php">
						<span class="glyphicon glyphicon-log-out"></span>
						&nbsp;Logout</a></li>	

					</ul>
					</div> <!-- Ending of Side area -->
			<div class="col-sm-10"> <!--Main Area-->
				<h1>Manage Courses</h1>
				<button id='newCourse'>Add New Course</button>
				
					<div id='newCourseDiv' style=display:none>
						<br><br>
						<form method='POST' action='courseHandler.php'>
							<table width='400' border='1' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
								<tr><td colspan='3' align='left' bgcolor='#CBEAF8'><strong>Create Course</strong> </td></tr>
								<tr><td><strong>Course Name</strong><input name='CourseName' type='text' size='20' REQUIRED /><strong> </td></tr>
								<tr><td><strong>Length of Course</strong><input name='Length' type='text' size='10' REQUIRED /></td></tr>
								<tr><td><input type='submit' name='Submit'></input></td></tr>
							</table>
						</form>
					</div>
				<br><br>
				<table border=1>
					<tr><th>CourseNo</th><th>CourseName</th><th>Length</th></tr>
				<?php
					$courseResult = mysqli_query($con,'SELECT * FROM course');
					while($row=mysqli_fetch_array($courseResult))
					{
						print('<tr><td>'.$row['CourseNo'].'</td><td><a href=editCourse.php?CourseNo='.$row['CourseNo'].'>'.$row['CourseName'].'</td><td>'.$row['Length'].' years</td><td><a href=deleteCourse.php?CourseNo='.$row['CourseNo'].'>Delete</a></td></tr>');
					}
				?>
				</table>

			</div>
			</div> <!-- Ending of Row-->
		</div> <!-- Ending of Container-->
		<div id="Footer">
			<?php
				echo "<p>Copyright &copy; " . date("Y") . " Logos.com</p>";
			?>
		</div>
	<div style="height: 10px; background: #27AAE1;"></div>
	<body>


	</body>
</html>




