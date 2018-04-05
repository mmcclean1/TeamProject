<?php include('includes/adminHeader.php') ?>
<!--Matthew McClean - L00137316 -->
<!--Team Project 2018-->
<!--BSc 5 -->
<script type="text/javascript" src="assets/js/manageModules.js"></script>
<h1>Manage Modules</h1>
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
<br><br>
<table border=1>
	<tr><th>Module No</th><th>Module Name</th><th>Lecturer</th><th>Year</th><th>Semester</th></tr>
	<?php
		//Connect to database
		$connection = mysqli_connect("localhost","root","");
		mysqli_select_db($connection,"studentsupport");

		//Get all module information from database
		$moduleResult = mysqli_query($connection,"SELECT * FROM module");

		//Print modules to table
		while($row=mysqli_fetch_array($moduleResult))
		{
			print('<tr><td>'.$row['ModuleNo'].'</td><td><a href=moduleEdit.php?ModuleNo='.$row['ModuleNo'].'>'.$row['ModuleName'].'</a></td><td>'.$row['Lecturer'].'</td>');
			print('<td>'.$row['Year'].'</td><td>'.$row['Semester'].'</td><td>');
			print('<a href=deleteModule.php?ModuleNo='.$row['ModuleNo'].'>Delete</a></td>');
			print('<td><a href=moduleCourse.php?ModuleNo='.$row['ModuleNo'].'>Edit/View Course Relations</a></td></tr>');
		}
		mysqli_close($connection);
	?>
</table>
<?php include('includes/adminFooter.php') ?>