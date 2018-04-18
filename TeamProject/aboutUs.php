<!--
JOHN LEE HEANEY
BSC COMPUTING YEAR 3
-->
<?php 
include("includes/header.php");

?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		
		<!--ADD BOOTSTRAP FOR BETTER STYLING AND LAYOUT-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		
		<!--LINK FOR RESPONSIVENESS-->
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
					<h1  align="center">About Us</h1></div>

				<div id="color">        
					<p class="paragraph">Letterkenny Institute of Technology (LYIT) fosters one of the most progressive learning environments in Ireland.

						Our reach is both local and international; attracting a diverse student body of more than 4,000 students from Ireland and 31 countries across the globe. They choose LYIT because of our unique ethos that harnesses academic excellence with career-focused practical experience. It’s an approach that positions our students for future success in line with their aspirations.<br><br>

						We also foster close relationships with the wider local community. Our engagement and partnerships with indigenous and international businesses leaders strengthens our student’s prospects in tandem with the prosperity of the region’s economy.
						Our modern integrated campuses in Letterkenny and Killybegs aren’t just gateways to a bright future, but to one of the most breathtaking corners of the world - with Donegal named National Geographic’s ‘Coolest Place on the Planet 2017’.

						There’s just so much to discover. So take your time, and stay a while to explore our website and see why LYIT is the place to be. </p></div>

				<div id="color1">
					<h1 align="center">Our Students</h1></div>

				<div id="team"><img src="assets/images/property/student.jpg"></div>


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