
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
     width="180" height="120"> <span><img src="assets/images/property/photo1.jpg" width="350" height="300" 
         alt="Ballymagan, Buncrana"><br>
      Ballymagan, Buncrana &euro;80 per week</span></a></li>
      
    <li><a href="assets/images/property/photo2.jpg"><img src="assets/images/property/photo2.jpg"   
      width="180" height="120"><span><img src="assets/images/property/photo2.jpg" width="350" height="300" 
      alt="Elm Park, Letterkenny &euro;70"><br>
      Elm Park, Letterkenny &euro;90 per week</span></a></li>
      
    <li><a href="assets/images/property/photo3.jpg"><img src="assets/images/property/photo3.jpg."   
    width="180" height="120"> <span><img src="assets/images/property/photo3.jpg" width="350" height="400" 
        alt="Quietwater, Muff &euro;90"><br>
      Quietwater, Muff &euro;90 per week</span></a></li>
      
      <li><a href="assets/images/property/photo4.jpg"><img src="assets/images/property/photo4.jpg"   
     width="180" height="120"> <span><img src="assets/images/property/photo4.jpg" width="350" height="300" 
        alt="Welchtown, Ballybofey &euro;110"><br>
      Welchtown, Ballybofey &euro;110 per week</span></a></li>
      
       <li><a href="assets/images/property/photo5.jpg"><img src="assets/images/property/photo5.jpg"   
     width="180" height="120"><span><img src="assets/images/property/photo5.jpg" width="350" height="300" 
         alt="Glencar Road, Letterkenny &euro;115"><br>
      Glencar Road, Letterkenny &euro;115 per week</span></a></li>
      
     <li><a href="assets/images/property/photo6.jpg"><img src="assets/images/property/photo6.jpg"   
     width="180" height="120"><span><img src="assets/images/property/photo6.jpg" width="350" height="300" 
         alt="Heather Park, Buncrana"><br>
      Heather Park, Buncrana &euro;120 per week</span></a></li><p>&nbsp;</p><br><br>
  </ul>
  
</div>
 	

<!-- EMPTY DIV TO PUT SPACE BETWEEN IMAGE AND TEXT-->
<div style="padding:210px;">
</div>
 

<!--HEADING TWO-->
 		 <div id="color2">
          <h1  align="center">Student Accomodation</h1></div>
         
 	
 		<div style="padding:60px;">
 		<p></p>
 		<p></p>
</div>	
  	
<!--CONTACT-->
 	  <div id="galleryCon">
  	  <p class="c">Phone:(074) 853 6060<br>
    Fax:(078) 853 6060<br>     
    Email: <a href="mailto:info@First Class Real Estate.ie"> info@studentsupport.ie</a><br> 
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


		
