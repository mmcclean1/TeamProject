
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

			<div id="color1">
				<h1  align="center">News & Events</h1></div>


			<!-- EMPTY DIV TO PUT SPACE BETWEEN IMAGE AND TEXT-->
			<div style="padding:210px;">
			</div>



			<!--HEADING TWO-->
			<div id="color2">
				<h1  align="center">Information</h1></div>


			<div style="padding:20px;">      
					<p class="paragraph"> </p>
</div>

					<div id="color2">
				<h1  align="center">Why Us?</h1></div>
				
				<div style="padding:20px;"> 
					<p class="paragraph">
						</p>

				</div>	

				<div style="padding:110px;">
				</div>


				<!--CONTACT-->
				<div id="galleryCon">
					<p class="c">Phone:(074) 853 6060<br>
						Fax:(078) 853 6060<br>     
						Email: <a href="mailto:info@stuentsupport.ie"> info@studentsupport.ie</a><br> 
						Pearse road, Letterkenny<br>
						Co.Donegal<br>
						Ireland</p> 
				</div>

			</div>
			<!--CLOSE MAIN COLUMN-->

			<!--FOOTER-->
			<footer><?php include("includes/footer.php");?>

			</footer>
			</body>
		</html>



