<?php include('includes/adminHeader.php') ?>
<!--Matthew McClean - L00137316 -->
<!--Team Project 2018-->
<!--BSc 5 -->
<script type="text/javascript" src="assets/js/manageAdmins.js"></script>
<h1>Manage Admins</h1>
<button id='newAdmin'>Add new Admin</button>

<div id='newAdminDiv' style=display:none>
	<br><br>
	<form method='POST' action='adminHandler.php'>
		<table width='400' border='1' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
			<tr><td colspan='3' align='left' bgcolor='#CBEAF8'><strong>Create Admin</strong> </td></tr>
			<tr><td><strong>Admin Name</strong><input name='AdminName' type='text' size='20' REQUIRED /><strong> </td></tr>
			<tr><td><strong>Password</strong><input name='Password' type='password' size='20' REQUIRED /><strong> </td></tr>
			<tr><td><input type='submit' name='Submit'></input></td></tr>
		</table>
	</form>
</div>

<br><br>
<table border=1>
	<tr><th>AdminNo</th><th>AdminName</th></tr>
	<?php
		$adminResult = mysqli_query($con, "SELECT * FROM admin");
		while($row=mysqli_fetch_array($adminResult))
		{
			print('<tr><td>'.$row['AdminNo'].'</td><td><a href=editAdmin.php?AdminNo'.$row['AdminNo'].'>'.$row['AdminName'].'</a></td></tr>');
		}
	?>
</table>

<?php include('includes/adminFooter.php') ?>