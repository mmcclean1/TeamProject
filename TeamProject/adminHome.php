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
				<!--END MAIN AREA-->
			</div>
			<!--END ROW-->
		</div>
		<!--	END CONTAINER-->
		<?php include 'adminFooter.php';?>
	</body>
</html>