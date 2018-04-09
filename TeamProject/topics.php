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
		<div class="container-fluid">
			<!--MAIN AREA-->
			<div class="col-sm-10">
				<h1>Manage Topics</h1>

				<!--CREATE FORM-->
				<div>
					<form action="topics.php" method="post">
						<fieldset>
							<div class="form-group">
								<label for="categoryname"><span class="FieldInfo"></span></label>

								<input class="form-control" type="text" name="Category" id="categoryname" placeholder="Name">
							</div>
							<br>
							<input class="btn btn-success btn-block" type="Submit" name="Submit" value="Add New Category">
						</fieldset>
						<br>
					</form>
				</div>
				<!--CREATE TABLE CONTENTS-->
				<div class ="table-responsive">
					<table class="table table-striped table-hover">
						<tr>
							<th>No</th>
							<th>Date & Time</th>
							<th>Topic name</th>
							<th>Creator Name</th>
							<th>Action</th>
						</tr>
						<!--EXECUTE QUERIES-->
						<?php
						$con;
						$ViewQuery="SELECT * FROM topic ORDER BY TopicNo desc;";
						$Execute=mysqli_query($con,$ViewQuery);
						$No=0;//START NO AT ZERO

						while($DataRows =mysqli_fetch_array($Execute)){
							$Id = $DataRows["TopicNo"];
							$DateTime = $DataRows["DateCreated"];
							$CategoryName = $DataRows["TopicName"];
							$CreatorName = $DataRows["CreatorNo"];
							$No++;//INCREMENT NUMBER FOR EACH MEMBER ADDED
						?>
						<tr>
							<!--VALIDATION-->
							<td><?php echo $No; ?></td>
							<td><?php echo $DateTime; ?></td>
							<td><?php echo $CategoryName; ?></td>
							<td><?php echo $CreatorName; ?></td>
							<td><a href="DeleteCategory.php?id=<?php echo $Id; ?>">
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