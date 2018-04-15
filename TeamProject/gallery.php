
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
		
		
	<div id="header">
           
		<div id="content"><!-- InstanceBeginEditable name="content" -->
		 <div id="color1">
          <h1  align="center">Student Accomodation</h1></div>
          
          <div id="gallery">
  <ul>
    <li><a href="assets/images/property/photo1.jpg"><img src="assets/images/property/photo1.jpg"   
     width="180" height="120"> <span><img src="assets/images/property/photo1.jpg" width="350" height="300" 
         alt="Ballymagan, Buncrana"><br>
      Ballymagan, Buncrana &euro;80,00 per week</span></a></li>
      
    <li><a href="assets/images/property/photo2.jpg"><img src="assets/images/property/photo2.jpg"   
      width="180" height="120"><span><img src="assets/images/property/photo2.jpg" width="350" height="300" 
      alt="Elm Park, Letterkenny &euro;70,000"><br>
      Elm Park, Letterkenny &euro;70,000 per week</span></a></li>
      
    <li><a href="assets/images/property/photo3.jpg"><img src="assets/images/property/photo3.jpg."   
    width="180" height="120"> <span><img src="assets/images/property/photo3.jpg" width="350" height="400" 
        alt="Quietwater, Muff &euro;90,000"><br>
      Quietwater, Muff &euro;90,000</span></a></li>
      
      <li><a href="assets/images/property/photo4.jpg"><img src="assets/images/property/photo4.jpg"   
     width="180" height="120"> <span><img src="assets/images/property/photo4.jpg" width="350" height="300" 
        alt="Welchtown, Ballybofey &euro;105,000"><br>
      Welchtown, Ballybofey &euro;105,000</span></a></li>
      
       <li><a href="assets/images/property/photo5.jpg"><img src="assets/images/property/photo5.jpg"   
     width="180" height="120"><span><img src="assets/images/property/photo5.jpg" width="350" height="300" 
         alt="Glencar Road, Letterkenny &euro;115,000"><br>
      Glencar Road, Letterkenny &euro;115,000</span></a></li>
      
     <li><a href="assets/images/property/photo6.jpg"><img src="assets/images/property/photo6.jpg"   
     width="180" height="120"><span><img src="assets/images/property/photo6.jpg" width="350" height="300" 
         alt="Heather Park, Buncrana"><br>
      Heather Park, Buncrana &euro;175,000</span></a></li><p>&nbsp;</p><br><br>
  </ul>
</div>


    <p class="c">Phone:(074) 853 6060<br>
    Fax:(078) 853 6060<br>     
    Email: <a href="mailto:info@First Class Real Estate.ie"> info@studentsupport.ie</a><br> 
    Pearse road, Letterkenny<br>
    Co.Donegal<br>
    Ireland</p> 


		</div>
		</div>
		</div>
		<footer><?php include("includes/footer.php");?>

		</footer>
	</body>
</html>


		
