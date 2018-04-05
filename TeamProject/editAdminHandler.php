<?php
//Matthew McClean - L00137316
//LYIT Team Project 2018
//BSc 5

	//Get AdminNo, AdminName, Password
	$AdminNo = $_GET['AdminNo'];
	print($AdminNo);
	$AdminName = $_POST['AdminName'];
	print($AdminName);
	$Password = $_POST['Password'];
	print($Password);

	//Encrypt password
	$Password = md5($Password);

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Update admin table
	$query = mysqli_query($connection, "UPDATE admin SET AdminName='$AdminName',Password='$Password' WHERE AdminNo='$AdminNo'");
	print($query);

	mysqli_close($connection);
	$done=true;
	if($done)
	{
		header("Location: manageAdmins.php");
   		exit;
	}
?>