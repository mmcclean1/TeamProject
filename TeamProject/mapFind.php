<?php 
include("includes/header.php");

?>

<!--JOHN LEE HEANEY-->
<!DOCTYPE html>
<html lang="en">
	<head>
		
	
		<meta charset="UTF-8">
		<!--ADD BOOTSTRAP FOR BETTER STYLING AND LAYOUT-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/adminstyles.css">

		<!--SPECIFY CORRECT FOLDER-->
		<script src="assets/js/weather.js"></script>

		<!--COPY AND PASTE FROM GOOGLE STEP TWO AND INSERT THE KEY THIS WILL ALLOW YOU TO RUN ON LOCALHOST-->
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2daH7B0_0N2blOjsRU7z2w4UQpCdkMQA&callback=initMap"
				  type="text/javascript"></script>


		<!--TITLE-->
		<title>Map Finder</title>

		<!--INTERNAL STYLING-->
		<style>

			table, td {
				border: 1px solid black;
			}

			.wrapper {
				margin-left: 0px;
				padding-left: 0px;
			}
		</style>

	</head>

	<body>

		<!--INCLUDE SIDEBAR-->
		<?php include("includes/sidebar.php");?>	

		<!--MAIN AREA-->
		<div class="map_main_column column" style="height: 300px;" >

			<!--SYTLING BUTTON AREA-->
			<?php echo "<h2>"."<span style='color: white;'>Find Your Way</span>"."</h2>";?>

			<span style='color: gold;'><b>Destination:</b></span>

			<input type="text" id="destination" /><br /><br/><br/><br/>

			<!--CREATE BUTTON-->
			<button id="button" onclick="findPath(); "><span style='color: white;'>Show Path</span></button>

		</div>

		<!--DISPLAY MAP-->
		<div id="mapArea" style= "height: 590px;"></div>

		<!--FOOTER-->
		<footer><?php include("includes/footer.php");?></footer>


	</body>



</html>