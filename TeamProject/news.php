
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
					<p class="paragraph">The annual LYIT Student Achievement Awards evening took place last Wednesday the 11th of April in the Radisson Blu Hotel, Letterkenny.  The evening is a symbol of recognition and celebration of the recreational activities carried out by student Clubs & Societies leaders.   </p>
					<p class="paragraph"> An Information Evening will be hosted by LYIT on Thursday, 10 May 2018, from 3 - 7 pm in our Letterkenny campus. This event will provide Leaving Certificate students, parents and mature students with information about LYIT, and the CAO process in general. Attendees can attend talks and meet staff and students. Check back closer to the time for more information.</p>
					<p class="paragraph"> There was a great air of excitement around the AIB branch at Letterkenny Institute of Technology this morning as former Republic of Ireland goalkeeper Shay Given called in.

Shay, who will be awarded the Donegal Person of the Year award on Saturday night in Dublin, popped in on his old friend Sandra McGettigan, the AIB campus manager.

AIB opened its new state-of-the-art branch to students and staff of LYIT and Co-Lab last September. </p>

			<!-- EMPTY DIV TO PUT SPACE BETWEEN IMAGE AND TEXT-->
			<div style="padding:210px;">
			</div>
		<!--HEADING TWO-->
			<div id="color2">
				<h1  align="center">Information</h1></div>


			<div style="padding:20px;">      
					<p class="paragraph">Site is currently owned and maintained by five shareholders... Leonardo; Donatello; Michelangelo; Raphael and Master Splinter &nbsp; &nbsp; &nbsp;<a href="https://www.youtube.com/watch?v=rS-qFdw-v_o">Where it all began</a>
</div>

					<div id="color2">
				<h1  align="center">Why Us?</h1></div>
				
				<div style="padding:20px;"> 
					<p class="paragraph"> WHO ELSE?
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



