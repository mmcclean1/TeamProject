<<<<<<< HEAD
<<<<<<< HEAD
<?php include 'session.php';?>
<?php include 'adminHeader.php';?>
<?php include 'adminSidebar.php';?>
<?php require 'config/config.php';?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!--INCLUDE LIBRATIES FOR STYLING BOOTSTRAP AND JQUERY-->
		<title>Admin</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/adminstyles.css">
		<style>
			th{
				color:black;
				background-color: #ede9ed;
			}
		</style>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
		<div class="Line" style="height: 10px; background: #27aae1;"></div>
		<div class="container-fluid">
			<div class="row">

				<!--		MAIN AREA-->
				<div class="col-sm-10">
					<h1>Admin Homepage</h1>
					<!--PRINT SUCCESS MESSAGE-->
					<div><?php echo Message();
						echo SuccessMessage();
						?></div>
					<!--CREATE TABLE CONTENTS-->
					<div class ="table-responsive">
						<table class="table table-striped table-hover">
							<tr>
								<th>No</th>
								<th>Post Title</th>
								<th>Date & Time</th>
								<th>First name</th>
								<th>Course No</th>
								<th>Profile Picture</th>
								<th>Comments</th>
								<th>Action</th>
								<th></th>
							</tr>
							<!--EXECUTE QUERIES-->
							<?php
							$con;
							$ViewQuery="SELECT * FROM member ORDER BY id desc;";
							$Execute=mysqli_query($con,$ViewQuery);
							$no=0;//START NO AT ZERO

							while($DataRows =mysqli_fetch_array($Execute)){
								$Id = $DataRows["id"];
								$DateTime = $DataRows["signup_date"];
								$Title = $DataRows["username"];
								$Category = $DataRows["courseNo"];
								$firstName = $DataRows["first_name"];
								$Image = $DataRows["profile_pic"];
								$email = $DataRows["email"];
								$no++;//INCREMENT NUMBER FOR EACH MEMBER ADDED
							?>
							<tr>
								<!--VALIDATION-->
								<td><?php echo $no; ?></td>
								<!--STYLE POST TITLE COLOR-->
								<td style="color: #5e5eff;"><?php
								if(strlen($Title) >19){$Title=substr($Title,0,19).'..';}
								echo $Title;
									?></td>
								<td ><?php
								if(strlen($DateTime) >12){$DateTime=substr($DateTime,0,12);}
								echo $DateTime;
									?></td>
								<td ><?php
								if(strlen($firstName) >9){$firstName=substr($firstName,0,9);}
								echo $firstName;
									?></td>
								<td ><?php
								if(strlen($Category) >10){$Category=substr($Category,0,10);}
								echo $Category;
									?></td>
								<!--PRINT STUDENT IMAGE-->
								<td><img src="<?php echo $Image; ?>" width="130px"; height="50px"></td>
								<td></td>
								<td>
									<!--CREATE BUTTONS FOR EDIT AND DELETE POSTS-->
									<a href="EditPost.php?Edit=<?php
								echo $Id; ?>">
										<span class="btn btn-warning">Edit</span></a>
=======
<?php require_once("Includes/Sessions.php"); ?>

<?php require 'config/config.php';?>

=======
<?php require_once("Includes/Sessions.php"); ?>

<?php require 'config/config.php';?>

>>>>>>> parent of 3c3c1e2... Merge pull request #12 from mmcclean1/30/03/2018

<!DOCTYPE html>
<html lang="en">
	<head>

		<!--INCLUDE LIBRATIES FOR STYLING BOOTSTRAP AND JQUERY-->
		<title>Admin Dashboard</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/adminstyles.css">
		<style>
			th{
				color:black;
				background-color: #ede9ed;

			}

		</style>

		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<div style="height: 10px; background: #27aae1;"></div>
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<!--NAVBAR-->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="Blog.php">
					<!--SITE LOGO-->
					<img style="margin-top: -16px;" src="assets/images/backgrounds/logo.jpg" width=200; height="52">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="collapse">
				<ul class="nav navbar-nav">
					<!--			<li class="active"><a href="Blog.php" target="_blank">Admin</a></li>-->
					<li><a href="#">Admin</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="Line" style="height: 10px; background: #27aae1;"></div>
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-2">
				<br><br>
				<ul id="Side_Menu" class="nav nav-pills nav-stacked">
					<li class="active">
						<a href="adminHome.php">
							<span class="glyphicon glyphicon-th"></span>
							&nbsp;Dashboard</a></li>
					<li><a href="Categories.php">
						<span class="glyphicon glyphicon-tags"></span>
						&nbsp;Categories</a></li>
					<li><a href="Admins.php">
						<span class="glyphicon glyphicon-user"></span>
						&nbsp;Manage Admins</a></li>
					<li><a href="manageCourses.php">
						<span class="glyphicon glyphicon-user"></span>
						&nbsp;Manage Courses</a></li>
					<li><a href="manageModules.php">
						<span class="glyphicon glyphicon-user"></span>
						&nbsp;Manage Modules</a></li>
					<li><a href="Comments.php">
						<span class="glyphicon glyphicon-comment"></span>
						&nbsp;Comments
						<?php
						//	INSERT MULTIPLE RECORDS INTO DATABASE JUST USE THIS TO INSERT DATA AND CHECK DATA
						//$sql = "INSERT INTO posts (post_id, added_by, user_to, date_added, user_closed,deleted,image,post_status) 
						//
						//VALUES 
						//    ('1', 'john','anne','2018-02-15', 'no','no','','hi everhone')";
						//
						//			
						//			//Connect to database
						//	$connection = mysqli_connect("localhost:3307","root","");
						//	mysqli_select_db($connection,"studentsupport");
						//
						// //DISPLAY MESSAGE   
						//if(mysqli_query($connection, $sql)){
						//    echo "Records inserted successfully.";
						//
						//} else{
						//    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
						//}
						//						

						?>


						<?php
						$ConnectingDB;
						//							$QueryTotal="SELECT FROM member";
						$QueryTotal="SELECT * FROM comment WHERE comment_status='OFF'";
						$ExecuteTotal=mysqli_query($con,$QueryTotal);
						$RowsTotal=mysqli_fetch_array($ExecuteTotal);
						$Total=array_shift($RowsTotal);

						if($Total>0){
						?>
						<span class="label pull-right label-warning">
							<?php echo $Total;?>
						</span>

						<?php } ?>
						</a>	

					<li><a href="Logout.php">
						<span class="glyphicon glyphicon-log-out"></span>
						&nbsp;Logout</a></li>	

				</ul>
			</div> <!-- Ending of Side area -->
			<div class="col-sm-10"> <!--Main Area-->
				<h1>Admin Dashboard</h1>

				<div><?php echo Message();
					echo SuccessMessage();
					?></div>	

				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<tr>
							<th>No</th>
							<th>Post Title</th>
							<th>Date &Time</th>
							<th>Author</th>
							<th>Category</th>
							<th>Banner</th>
							<th>Comments</th>
							<th>Action</th>
							<th>Details</th>
>>>>>>> parent of 3c3c1e2... Merge pull request #12 from mmcclean1/30/03/2018

									<a href="DeletePost.php?Delete=<?php
								echo $Id; ?>">
										<span class="btn btn-danger">Delete</span></a>
								</td>
								<td>
								</td>
							</tr>
							<?php }?>
							<!--END WHILE LOOP-->
						</table>
					</div>
					<!--END TABLE-->
				</div>
<<<<<<< HEAD
				<!--END MAIN AREA-->
			</div>
			<!--END ROW-->
		</div>
		<!--	END CONTAINER-->
		<?php include 'adminFooter.php';?>
=======
			</div> <!-- Ending of Main Area-->
		</div> <!-- Ending of Row-->
	</div> <!-- Ending of Container-->
	<div id="Footer">

		<?php
		echo "<p>Copyright &copy; " . date("Y") . " Logos.com</p>";

<<<<<<< HEAD
=======
							<td><?php echo $SrNo; ?></td>
							<td style="color: #5e5eff;"><?php
							if(strlen($Title)>19){$Title=substr($Title,0,19).'..';}
							echo $Title;
								?></td>
							<td><?php
							if(strlen($DateTime)>12){$DateTime=substr($DateTime,0,12);}
							echo $DateTime;
								?></td>
							<td><?php
							if(strlen($Admin)>9){$Admin=substr($Admin,0,9);}
							echo $Admin; ?></td>
							<td><?php
							if(strlen($Category)>10){$Category=substr($Category,0,10);}
							echo $Category;
								?></td>
							<td><img src="Upload/<?php echo $Image; ?>" width="170px"; height="50px"></td>
							<td>
								<?php
							$ConnectingDB;
							//$QueryApproved="SELECT * FROM posts WHERE post_id='$Id' AND status='ON'";
							$QueryApproved="SELECT COUNT(*) FROM comment WHERE comment_id='$Id' AND comment_status='ON'";
							$ExecuteApproved=mysqli_query($con, $QueryApproved);
							$RowsApproved=mysqli_fetch_array($ExecuteApproved);
							$TotalApproved=array_shift($RowsApproved);
							if($TotalApproved>0){
								?>
								<span class="label pull-right label-success">
									<?php echo $TotalApproved;?>
								</span>

								<?php } ?>

								<?php
							$ConnectingDB;
							$QueryUnApproved="SELECT COUNT(*) FROM comment WHERE comment_id='$Id' AND comment_status='OFF'";
							$ExecuteUnApproved=mysqli_query($con,$QueryUnApproved);
							$RowsUnApproved=mysqli_fetch_array($ExecuteUnApproved);
							$TotalUnApproved=array_shift($RowsUnApproved);
							if($TotalUnApproved>0){
								?>
								<span class="label  label-danger">
									<?php echo $TotalUnApproved;?>
								</span>

								<?php } ?>


							</td>
							<td>
								<a href="EditPost.php?Edit=<?php echo $Id; ?>">
									<span class="btn btn-warning">Edit</span>
								</a>
								<a href="DeletePost.php?Delete=<?php echo $Id; ?>">
									<span class="btn btn-danger">Delete</span>
								</a>
							</td>
							<td>
								<!--EXTRA COLUM IF WANT TO ADD BUTTONS TAKE YOU BACAK TO WEBSITE PAGE TO NAVIGATE-->
								<a href="index.php?id=<?php echo $Id; ?>" target="_blank">
									<span class="btn btn-primary"> Live Preview</span>
								</a>
							</td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div> <!-- Ending of Main Area-->
		</div> <!-- Ending of Row-->
	</div> <!-- Ending of Container-->
	<div id="Footer">

		<?php
		echo "<p>Copyright &copy; " . date("Y") . " Logos.com</p>";

>>>>>>> parent of 3c3c1e2... Merge pull request #12 from mmcclean1/30/03/2018
		?>
	</div>
	<div style="height: 10px; background: #27AAE1;"></div> 






	<body>


<<<<<<< HEAD
>>>>>>> parent of 3c3c1e2... Merge pull request #12 from mmcclean1/30/03/2018
=======
>>>>>>> parent of 3c3c1e2... Merge pull request #12 from mmcclean1/30/03/2018
	</body>
</html>