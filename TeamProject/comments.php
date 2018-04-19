
<?php include 'adminHeader.php';?>
<?php include 'adminSidebar.php';?>
<?php require 'config/config.php';?>
<?php include 'session.php';?>
<?php include("includes/Functions.php");?>

<!--John Lee Heaney-->
<!--Bsc Computing Year 3-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<!--INCLUDE LIBRATIES FOR STYLING BOOTSTRAP AND JQUERY-->
		<title>Admin</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/adminstyles.css">
	
			<style>
				<style>
			.wrapper {
				margin-left: 0px;
				padding-left: 0px;
			}
			
		</style>

		<meta charset="UTF-8">
	</head>

	<body>
	
		<div class="container-fluid">
			<!--MAIN AREA-->
			<div class="col-sm-10">
				<h1>Manage Comments</h1>
		
			<!--PRINT MESSAGE TO SAY COMMENT DELETED SUCCESSFULLYS-->
					<?php echo Message();
					echo SuccessMessage();
					?>

				<!--CREATE TABLE CONTENTS-->
				<div class ="table-responsive">
					<table class="table table-striped table-hover">
						<tr>
							<th>No</th>
							<th>Topic</th>
							<th>Comment</th>
							<th>Creator Name</th>
							<th>Likes</th>
							<th>Action</th>
						</tr>
						<!--EXECUTE QUERIES-->
						<?php
						$con;
						$ViewQuery="SELECT * FROM comment ORDER BY CommentNo desc;";
						$Execute=mysqli_query($con,$ViewQuery);
						$No=0;//START NO AT ZERO

						while($DataRows =mysqli_fetch_array($Execute)){
							$Id = $DataRows["CommentNo"];
							$DateTime = $DataRows["DateCreated"];
							$Comment = $DataRows["Comment"];
							$CreatorNo = $DataRows["CreatorNo"];
							$query=mysqli_query($con,"SELECT * FROM member WHERE id='$CreatorNo'");
							while($row=mysqli_fetch_array($query))
							{
								$FirstName = $row['first_name'];
								$LastName = $row['last_name'];
							}
							$No++;//INCREMENT NUMBER FOR EACH MEMBER ADDED
							$Likes = $DataRows['Likes'];
						?>
						<tr>
							<!--VALIDATION-->
							<td><?php echo $No; ?></td>
							<td><?php echo $DateTime; ?></td>
							<td><?php echo $Comment; ?></td>
							<td><?php echo ($FirstName.'<br>'.$LastName); ?></td>
							<td><?php echo $Likes; ?></td>
							<td><a href="adminDeleteComment.php?id=<?php echo $Id; ?>">
							<span class="btn btn-danger">Delete</span>
							</a>
							</td>
						</tr>
						<?php }?>
						<!--END WHILE LOOP-->
					</table>
				</div>
				<!--END TABLE-->
			</div>
			<!--END MAIN AREA-->
		</div>
		<!--	END CONTAINER-->

		<?php include 'adminFooter.php';?>
	</body>
</html>

