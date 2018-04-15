
<?php 
include("includes/header.php");

?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<!--ADD BOOTSTRAP FOR BETTER STYLING AND LAYOUT-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/adminstyles.css">
		<!--LINK FOR RESPONSIVENESS-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>

		<!-- !--STYLES THE PROFILE BAR JOHN LEE HEANEY STYLES-->
		<style>
			.wrapper {
				margin-left: 0px;
				padding-left: 0px;
			}

			/*TABLE LAYOUT*/
			/*    The border-collapse property sets whether the table borders are collapsed into a single border or detached as in standard HTML.*/
			table,tr,td {
				margin-left: 0px;
				border:solid thin #34495e;
				width:30%;
				height: 15%;
				border-collapse: collapse;
			}

			tr {
				width: 90%;
			}

			/*set color for every even(ever second row) row*/
			tr:nth-child(even) {
				/*				background-color: #945460;*/
				background-color:  #7ebac7;
				color:white
			}
			hr{
				height: 1px;
				/*				color: #123455;*/
				background-color: #123455;
				border: none;
			}

			th{
				font-size: 25px;
				font-family: sans-serif;
				background-color: #35393e;
				color: white; 
			}

		</style>

		<script type="text/javascript" src="assets/js/moduleFilter.js"></script>

	</head>
	<body>

		<!--INCLUDE SIDEBAR-->
		<?php include("includes/sidebar.php");?>

		<!--MAIN CONTENT COLUMN-->
		<div class ="index_main_column column" >

			<div id="content"><!-- InstanceBeginEditable name="content" -->
				<div id="color1">
					<h1  align="center">About Us</h1></div>

				<div id="color">        
					<p class="paragraph">Launched in January 2015, First Class Real Estate is the simple way to search for property.  We aim to provide all potential buyers, sellers, landlords and tenants with an exceptional property search service. Our reputation for uncompromising professionalismin everything we do is earned by serving our clients and earning their trust.<br><br>

						First Class Real Estate is a real estate consultancy with prime commercial, residential and site offering operating throughout County Donegal. Our office is situated on the Pierce road, Letterkenny just opposite McDonalds fast food resturant.<br><br>

						Advising clients ranging from individual private investors, clients and homeowners to major developers and investors. We put teamwork, innovation and our passion for property at the heart of everything we do, strieving to go that extra mile to exceed our clients expectations. </p></div>

				<div id="color1">
					<h1 align="center">Our Students</h1></div>

				<div id="team"><img src="assets/images/property/student.jpg"></div>

				
					<p class="c">Phone:(074) 853 6060<br>
						Fax:(078) 853 6060<br>     
						Email: <a href="mailto:info@First Class Real 	Estate.ie"> info@firstclassrealestate.ie</a><br> 
						Pearse road, Letterkenny<br>
						Co.Donegal<br>
						Ireland</p> 

			
				</div>
				</div>
				<footer><?php include("includes/footer.php");?>
				</footer>
				</body>
			</html>