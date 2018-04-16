
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
				<h1  align="center">Student Accomodation</h1></div>

			<div id="gallery">
				<ul>
					<li><a href="assets/images/property/photo1.jpg"><img src="assets/images/property/photo1.jpg"   
																						  width="180" height="120"> <span><img src="assets/images/property/photo1.jpg" width="440" height="400" 
																																			alt="Ballymagan, Buncrana"><br>
						Ballymagan, Buncrana &euro;80 per week</span></a></li>

					<li><a href="assets/images/property/photo2.jpg"><img src="assets/images/property/photo2.jpg"   
																						  width="180" height="120"><span><img src="assets/images/property/photo2.jpg" width="440" height="400" 
																																		  alt="Elm Park, Letterkenny &euro;70"><br>
						Elm Park, Letterkenny &euro;90 per week</span></a></li>

					<li><a href="assets/images/property/photo3.jpg"><img src="assets/images/property/photo3.jpg."   
																						  width="180" height="120"> <span><img src="assets/images/property/photo3.jpg" width="440" height="400" 
																																			alt="Quietwater, Muff &euro;90"><br>
						Quietwater, Muff &euro;90 per week</span></a></li>

					<li><a href="assets/images/property/photo4.jpg"><img src="assets/images/property/photo4.jpg"   
																						  width="180" height="120"> <span><img src="assets/images/property/photo4.jpg" width="440" height="400"  
																																			alt="Welchtown, Ballybofey &euro;110"><br>
						Welchtown, Ballybofey &euro;110 per week</span></a></li>

					<li><a href="assets/images/property/photo5.jpg"><img src="assets/images/property/photo5.jpg"   
																						  width="180" height="120"><span><img src="assets/images/property/photo5.jpg" width="440" height="400"  
					 alt="Glencar Road, Letterkenny &euro;115"><br>
						Glencar Road, Letterkenny &euro;115 per week</span></a></li>

					<li><a href="assets/images/property/photo6.jpg"><img src="assets/images/property/photo6.jpg"   
																						  width="180" height="120"><span><img src="assets/images/property/photo6.jpg" width="440" height="400" 
																																		  alt="Heather Park, Buncrana"><br>
						Heather Park, Buncrana &euro;120 per week</span></a></li><p>&nbsp;</p><br><br>
				</ul>

			</div>


			<!-- EMPTY DIV TO PUT SPACE BETWEEN IMAGE AND TEXT-->
			<div style="padding:210px;">
			</div>



			<!--HEADING TWO-->
			<div id="color2">
				<h1  align="center">Information</h1></div>


			<div style="padding:20px;">      
					<p class="paragraph">Letterkenny Institute of Technology (LYIT) fosters one of the most progressive learning environments in Ireland.

						Our reach is both local and international; attracting a diverse student body of more than 4,000 students from Ireland and 31 countries across the globe. They choose LYIT because of our unique ethos that harnesses academic excellence with career-focused practical experience. It’s an approach that positions our students for future success in line with their aspirations.<br><br>

						We also foster close relationships with the wider local community. Our engagement and partnerships with indigenous and international businesses leaders strengthens our student’s prospects in tandem with the prosperity of the region’s economy.<br><br>

						Our modern integrated campuses in Letterkenny and Killybegs aren’t just gateways to a bright future, but to one of the most breathtaking corners of the world - with Donegal named National Geographic’s ‘Coolest Place on the Planet 2017’.<br><br>

						There’s just so much to discover. So take your time, and stay a while to explore our website and see why LYIT is the place to be. </p>
</div>

					<div id="color2">
				<h1  align="center">Why Us?</h1></div>
				
				<div style="padding:20px;"> 
					<p class="paragraph">
						All the houses are in Letterkenny Centre and within walking distance of all amenities.
						We offer single, double and twin rooms with or without private bathrooms.
						Sharing with other International Students.
						Houses fully equipped.
						Welcome team: We will meet you on your arrival.
						Self catering properties: You have your own place to storage your food and cooking facilities.
						Free laundry facilities in the houses.
						Rents all inclusive (bills are included in the price)
						Payments accepted by credit card, bank transfer, paypal, paytostudy and cash.
						Low security deposit: €250 for long stays and €100 for short stays (less than 18 weeks).
						Accommodations available for the whole Academic Year, or just for one semester or the summer.
						Payments divided in 3, 6 or 9 parts (depending on the length of your stay)
						No agency fees. </p>

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



