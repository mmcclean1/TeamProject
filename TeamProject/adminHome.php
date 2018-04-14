
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
			.FieldInfo{
				color: rgb(251, 174, 44);
				font-family: Bitter, Georgia, "Times New Roman",Times, serif;
				font-size: 1.2em;
			}
		</style>
	</head>

		<?php
		if(isset($_POST["Submit"])){
			
			
			$Category=mysqli_real_escape_string($con, $_POST["Category"]);
			date_default_timezone_set("Europe/London");
			$DateTime=strftime("%B-%d-%Y %H:%M:%S", $CurrentTime);
			$DateTime;
			
			$Admin=$_SESSION["Username"];
			if(empty($Category)){
				echo "all";
				header("Location: adminHome.php");
				exit;
			}else if(strlen($Category) > 99){
				$_SESSION["ErrorMessage"]="Too long name for Topic";
				Redirect_to("topics.php");
			}else{
				global $con;
				$Query="INSERT INTO topic(DateCreated, TopicName, CreatorNo, ModuleNo) VALUES('2018-02-10','$Category','2','2')";
				$Execute=mysqli_query($con, $Query);
				if($Execute){
					$_SESSION["SuccessMessage"]="Topic added successfully";
					Redirect_to("topics.php");
				}else{
					$_SESSION["ErrorMessage"]="Topic failed to Add";
					Redirect_to("topics.php");
				}
			}
		}
		?>
	<body>
	

	<div class="width">
		<div class="container-fluid">
			<!--MAIN AREA-->
			<div class="col-sm-10">
					<h1>Admin Homepage</h1>

					<!--PRINT SUCCESS MESSAGE CALL METHODS-->
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
									<a href="EditPost.php?Edit=<?php echo $Id; ?>">

										<span class="btn btn-warning">Edit</span></a>
								<!--DELETE MEMBER-->
								<a href="deleteMember.php?id=<?php echo $Id; ?>">
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
		</div>

		<?php include 'adminFooter.php';?>
	</body>
</html>