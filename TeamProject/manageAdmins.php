<?php include 'session.php';?>
<?php include 'adminHeader.php';?>
<?php include 'adminSidebar.php';?>

<?php require 'config/config.php';?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<!--INCLUDE LIBRATIES FOR STYLING BOOTSTRAP AND JQUERY-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src='assets/js/courseHandler.js'></script>
		<link rel="stylesheet" href="css/adminstyles.css">
		<style>
			th{
				color:black;
				background-color: #ede9ed;
				border: 1px solid black;

			}

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

			/*set color for every even(ever second row) row*/
			tr:nth-child(even) {
				background-color:  #8dc38d;  
				color:black;
			}
			hr{
				height: 1px;
				/*				color: #123455;*/
				background-color: #123455;
				border: none;
			}

			th{
				font-size: 25px;
				font-family: sans-serif;
				background-color: grey;
				color: white; 
			}
			#button{
				margin-left: 1%;
			}
		</style>
		<meta charset="UTF-8">
		<title>Manage Courses</title>
	</head>
	<body>
		<div class="Line" style="height: 10px; background: #27aae1;"></div>
		<div class="container-fluid">
			<div class="row">
				<!--MAIN AREA-->
				<div class="col-sm-10">
				
					<h1>&nbsp;Manage Admins</h1>
					
					<style>
						#button{
							margin-left: 1%;
						}
					</style>
					
					<div id="button">
					<button id='newAdmin'>Add new Admin</button>
						</div>
	
						
					<!--CREATE TABLE CONTENTS-->	
					<div class="manageAdmin" >
					<div class="col-md-4 col-md-offset-0" >
						<form method='POST' action='adminHandler.php'><br><br>
							<table class="table table-sm">
								<thead>
									<tr bgcolor="magenta"><td ><strong>Create Admin</strong></td></tr>
									<tr ><td bgcolor="white"><strong>Admin Name </strong><input name='AdminName' type='text' size='30' REQUIRED /></td></tr><strong> 
									<tr><td ><strong>Password </strong><input name='Password' type='password' size='33' REQUIRED /></td></tr><strong> 
									<tr><td bgcolor="white"><input type='submit' name='Submit'></input></td></tr> </thead>
							</table>
						</form>
					</div>
					</div>
					<br><br><br><br><br><br><br><br><br><br><br><br>

					<!--CREATE TABLE CONTENTS-->
					<div class="col-md-8 col-md-offset-0" >
						<table class="table table-bordered" >			
							<tr><th>AdminNo</th><th>AdminName</th><th>Delete</th></tr>
							<tr><?php
								$adminResult = mysqli_query($con, "SELECT * FROM admin");
								while($row=mysqli_fetch_array($adminResult))
								{
									print('<tr><td>'.$row['AdminNo'].'</td><td><a href=editAdmin.php?AdminNo='.$row['AdminNo'].'>'.$row['AdminName'].'</a></td>');
									print('<td><a href=deleteAdmin.php?AdminNo='.$row['AdminNo'].'>Delete</a></td></tr>');
								}
								?></tr>
						</table>
					</div>
					<!--END TABLE-->
				</div>
				<!--END MAIN AREA-->
			</div>
			<!--END ROW-->
		</div>
		<!--	END CONTAINER-->
		<?php include 'adminFooter.php';?>
	</body>
</html>

