<?php include('includes/adminHeader.php') ?>
<!--Matthew McClean - L00137316 -->
<!--Team Project 2018-->
<!--BSc 5 -->
<script type="text/javascript" src="assets/js/courseHandler.js"></script>
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
<?php include('includes/adminFooter.php') ?>