<?php include('includes/adminHeader.php') ?>
<title>Edit Course</title>
<h1>Edit Course</h1>
<?php
//Matthew McClean L00137316
//Team Project 2018
//BSc 5

	//Get Course No
	$CourseNo = $_GET['CourseNo'];

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Generate table
	print('<form method=POST action=editCourseHandler.php?CourseNo='.$CourseNo.'><table width=400 border=1 cellpadding=3 cellspacing=1 bgcolor=#FFFFFF>');
		print('<tr><td colspan=3 align=left bgcolor=#CBEAF8><strong>Edit Course</strong> </td></tr>');
		print('<tr><td><strong>Course Name</strong><input name=CourseName type=text size=20 REQUIRED /><strong> </td></tr>');
		print('<tr><td><strong>Length of Course</strong><input name=Length type=text size=10 REQUIRED /></td></tr>');
		print('<tr><td><input type=submit name=Submit></input><input type=button name=Cancel value=Cancel onclick=history.back()></button></td></tr>');
	print('</table></form>');
	
	mysqli_close($connection);
?>
<?php include('includes/adminFooter.php') ?>