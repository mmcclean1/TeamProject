<?php require_once("Includes/Sessions.php"); ?>

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
			th{
				color:black;
				background-color: #ede9ed;

			}

		</style>

		<meta charset="UTF-8">
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
						&nbsp;Comments</a></li>
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
						</a>	
					<li><a href="Logout.php">
						<span class="glyphicon glyphicon-log-out"></span>
						&nbsp;Logout</a></li>	
					</ul>
					</div> <!-- Ending of Side area -->
			<div class="col-sm-10"> <!--Main Area-->


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


			</div> <!-- Ending of Main Area-->
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