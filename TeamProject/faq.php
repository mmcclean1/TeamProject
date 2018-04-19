
<?php 
include("includes/header.php");

?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<!--ADD BOOTSTRAP FOR BETTER STYLING AND LAYOUT-->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>

		<!-- !--STYLES THE PROFILE BAR JOHN LEE HEANEY STYLES-->
		<style>
			.wrapper {
				margin-left: 0px;
				padding-left: 0px;
			}
		</style>
	</head>
	<body>

		<!--INCLUDE SIDEBAR-->
		<?php include("includes/sidebar.php");?>

		<!--MAIN CONTENT COLUMN-->
		<div class ="index_main_column column" >

			<div id="content">
				<div id="color1">
					<h1  align="center">Frequently Asked Question</h1></div>
				<div id="color">        
					<p class="paragraph">

						<i><b><u>Why can't I login?</u></b></i><br>
						More often than not it is an incorrect email or password. Double check.
					</p></div>	
					<p class="paragraph">
					<i><b><u>Why is there no swear words allowed??</u></b></i><br>
						Our website administrators took care to ensure this would not happen.
					</p>
					<p class="paragraph">
					<i><b><u>How come I cant register twice?</u></b></i><br>
						Our database server does not allow for this.

					</p>


				<div id="color">        
					<p class="paragraph">
						<i><b><u>How can I delete a comment?</u></b></i><br>
						Each comment made by a user can be deleted by THAT user.
					</p>
					
						<p class="paragraph">
						<i><b><u>Are those my feet?</u></b></i><br>
						Only you would know that.
					</p>
					
					
						

				</div>
		</div>
		<footer><?php include("includes/footer.php");?>
		</footer>
	</body>
</html>