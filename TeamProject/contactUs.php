
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
					<h1  align="center">Contact Us</h1></div>

				<div id="color">        
					<p class="paragraph">
						Phone:(074) 853 6060
					</p></div>	
					<p class="paragraph">
					Fax:(078) 853 6060
					</p>
					<p class="paragraph">
					Email: <a href="mailto:info@studentsupport.ie"> info@studentsupport.ie</a><br>

					</p>


				<div id="color">        
					<p class="paragraph">

						This site is currently owned and maintained by five shareholders... Who have decided to remain anonymous.
					</p></div>

				
				

				<p class="c">Phone:(074) 853 6060<br>
					Fax:(078) 853 6060<br>     
					Email: <a href="mailto:info@studentsupport.ie"> info@studentsupport.ie</a><br> 
					Pearse road, Letterkenny<br>
					Co.Donegal<br>
					Ireland</p> 


			</div>
		</div>
		<footer><?php include("includes/footer.php");?>
		</footer>
	</body>
</html>