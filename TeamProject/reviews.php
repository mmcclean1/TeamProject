
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
					<h1  align="center">Reviews</h1></div>
					<h3  align="center"><i><u>All reviews are kept anonymous to protect students privacy</u></i></h3></div>

				<div id="color">        
					<p class="paragraph">

						Great Site. Would recommend to anyone.   
					</p></div>	
					<p class="paragraph">
						Easy to navigate and well built. Worthy of a prize..
					</p>
					<p class="paragraph">
						An extremely efficent and easy to use website. The developers must have put their heart and soul into it

					</p>


				<div id="color">        
					<p class="paragraph">

						Had a major issue with a CA and resolved it because of this.
					</p>
					
						<p class="paragraph">

						Can't believe this site is actually free.
					</p>
					
						<p class="paragraph">

						Great site. AND they won't steal your data.
					</p>
					
						<p class="paragraph">

						This site is the sole reason I completed my degree. I needed help and I got it. Now I am a billionaire. My name is Elon Musk.
					</p>

				</div>
		</div>
		<footer><?php include("includes/footer.php");?>
		</footer>
	</body>
</html>