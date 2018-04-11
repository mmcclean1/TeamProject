
<?php 
include("includes/header.php");

//if(isset($_POST['post'])){
//	$post = new Post($con, $userLoggedIn);
//	$post->submitPost($_POST['post_text'], 'none');
//}

?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<!--ADD BOOTSTRAP FOR BETTER STYLING AND LAYOUT-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/adminstyles.css">

		<!--LINK FOR RESPONSIVENESS-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>

		<!-- !--STYLES THE PROFILE BAR JOHN LEE HEANEY STYLES-->
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


			tr {
				width: 90%;
			}


			/*set color for every even(ever second row) row*/
			tr:nth-child(even) {
				background-color: #63b0de; 
				color:white
			}

			th{
				font-size: 25px;
				font-family: fantasy;
			}

		</style>

		<script type="text/javascript" src="assets/js/moduleFilter.js"></script>

	</head>
	<body>

		<!--INCLUDE SIDEBAR-->
		<?php include("includes/sidebar.php");?>

		<!--MAIN CONTENT COLUMN-->
		<div class="index_main_column column" >

			<?php
			//Matthew McClean - L00137316
			//LYIT Team Project 2018
			//BSc 5
			//Get MemNo of user
			$user = $_SESSION['id'];

			//Connect to database
			$connection = mysqli_connect("localhost","root","");
			mysqli_select_db($connection,"studentsupport");

			//Get CourseNo of user
			$memberResult = mysqli_query($connection,"SELECT CourseNo FROM member WHERE id='$user'");
			$rs=mysqli_fetch_array($memberResult);
			for($i=0;$i<1;$i++)
			{
				$courseNo=$rs[$i];
			}

			//Get Course Name
			$courseResult=mysqli_query($connection,"SELECT * FROM course WHERE CourseNo='$courseNo'");
			while($row=mysqli_fetch_array($courseResult))
			{
				print("<h1>".$row['CourseName']."</h1>");


				//Create drop-down menu to filter year, semester
				//Year drop-down
				print("Year: <select name=year id=year>");
				print("<option value=0>All</option>");
				for($i=1;$i<=$row['Length'];$i++)
				{
					print("<option value=".$i.">".$i."</option>");
				}
				print("</select>");
			}

			//Semester drop down
			print(" Semester: <select name=semester id=semester>");
			print("<option value=0>Both</option>");
			print("<option value=1>Winter</option>");
			print("<option value=2>Summer</option>");
			print("</select> ");

			//Filter button
			print("<input type=submit value=Filter id=filter>");
			print("<br>"."<br>"."<br>");

			//Dummy select for courseNo
			print("<select name=course id=course DISABLED style=display:none>");
			print("<option value=".$courseNo."></option>");
			print("</select>");

			?>


				<div id='modulesDiv' class="col-md-8 col-md-offset-2">
					<table class="table table-striped">
						<thead>
							<tr class="text-success">
								<th>Modules</th>
								<th>Lectures</th>
								<th>Year</th>
							</tr>
						</thead>
						<tbody>
							<?php

							$result = mysqli_query($connection,"SELECT * FROM module INNER JOIN coursemodule ON coursemodule.ModuleNo=module.ModuleNo WHERE coursemodule.CourseNo='$courseNo'");

							while($row=mysqli_fetch_array($result))
							{
								print("<tr><td><a href=module.php?ModuleNo=".$row['ModuleNo'].">".$row['ModuleName']."</a></td>");
								print("<td>".$row['Lecturer']."</td>");
								print("<td>".$row['Year']."</td></tr>");

							}
							?>
					</tbody>
				</table>
		</div>

	<footer><?php include("includes/footer.php");?>

		<p>	<li class="active" style="list-style-type:none"><a href="adminLogin.php" target="_blank">Admin</a></li></p>
	</footer>


	</body>


</html>