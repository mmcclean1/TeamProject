<?php
//Matthew McClean - L00137316
//LYIT Team Project 2018
//BSc 5
	
	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Post admin name & password
	$AdminName=$_POST['AdminName'];
	$Password=$_POST['Password'];

	//Check admin doesn't already exist
	$check = mysqli_query($connection, "SELECT * FROM admin");
	while($row=mysqli_fetch_array($check))
	{
		if($row['AdminName']==$AdminName)
		{
			$ok=false;
			print("<script type=text/javascript>alert('Admin already exists!');</script>");
			break;
		}
		else
			$ok=true;
	}
	if($ok==true)
	{
		//Encrypt password
		$Password=md5($Password);

		//Insert into database
		$query = mysqli_query($connection, "INSERT INTO admin(AdminName,Password) VALUES('$AdminName','$Password')");
	}
	mysqli_close($connection);
	$done = true;
	if ($done)
	{
		header("Location: manageAdmins.php");
   		exit;
	}
?>