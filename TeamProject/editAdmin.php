<?php include('includes/adminHeader.php') ?>
<title>Edit Admin</title>
<h1>Edit Admin</h1>
<?php
//Matthew McClean L00137316
//Team Project 2018
//BSc 5

	//Get AdminNo
	$AdminNo = $_GET['AdminNo'];

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Generate table
	print('<form method=POST action=editAdminHandler.php?AdminNo='.$AdminNo.'><table width=400 border=1 cellpadding=3 cellspacing=1 bgcolor=#FFFFFF>');
		print('<tr><td colspan=3 align=left bgcolor=#CBEAF8><strong>Edit Admin</strong> </td></tr>');
		print('<tr><td><strong>Admin Name</strong><input name=AdminName type=text size=20 REQUIRED /><strong> </td></tr>');
		print('<tr><td><strong>Password</strong><input name=Password type=password size=20 REQUIRED /><strong> </td></tr>');
		print('<tr><td><input type=submit name=Submit></input><input type=button name=Cancel value=Cancel onclick=history.back()></button></td></tr>');
	print('</table></form>');

	mysqli_close($connection);
?>
<?php include('includes/adminFooter.php') ?>