<?php include('includes/adminHeader.php') ?>
<h1>Edit Module</h1>
<?php
//Matthew McClean L00137316
//Team Project 2018
//BSc 5

	//Get Module No
	$ModuleNo = $_GET['ModuleNo'];

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Generate table
	print('<form method=POST action=editModuleHandler.php?ModuleNo='.$ModuleNo.'><table width=400 border=1 cellpadding=3 cellspacing=1 bgcolor=#FFFFFF>');
		print('<tr><td colspan=3 align=left bgcolor=#CBEAF8><strong>Edit Module</strong> </td></tr>');
		print('<tr><td><strong>Module Name</strong><input name=ModuleName type=text size=20 REQUIRED /><strong> </td></tr>');
		print('<tr><td><strong>Lecturer</strong><input name=Lecturer type=text size=20 REQUIRED /><strong> </td></tr>');
		print('<tr><td><strong>Year</strong><input name=Year type=text size=10 REQUIRED /></td></tr>');
		print('<tr><td><strong>Semester</strong><input name=Semester type=text size=10 REQUIRED /></td></tr>');
		print('<tr><td><input type=submit name=Submit></input><input type=button name=Cancel value=Cancel onclick=history.back()></button></td></tr>');
	print('</table></form>');
	
	mysqli_close($connection);
?>
<?php include('includes/adminFooter.php') ?>