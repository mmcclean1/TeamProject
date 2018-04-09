
<!--JOHN LEE HEANEY-->


<!--COULD CHANGE THE NAME OF THIS CLASS TO SIDE BAR-->
<div class="sidbar_left">

	<!--DISPLAY PROFILE PIC-->
	<div id="pic">

		<?php 

		$db = mysqli_connect("localhost:3307","root","","studentsupport");	
		$id = $_SESSION['id'];
		$sql = "SELECT * FROM member WHERE id ='$id'";

		$result = mysqli_query($db, $sql);
		while ($row = mysqli_fetch_array($result))
		{
			echo "<br>";
			echo "<img src='".$row['profile_pic']."'>";
		}


		?>
	</div>
	<!--DISPLAY USERNAME UNDER PIC-->
	<div id="username">

		<p id=username><font color="white"><?php	echo $user['first_name'] . " " . $user['last_name'];
			?></font></p>

	</div>

	<!--Random quote generator - just add to sidebar or where ever, css it up, and BAM! Random quotes. Can easily add more if needed -->
	<div id='quotes'>
		<p id=quotes><font color="magenta" ><?php
			$quotes = array(
				array("The Way Get Started Is To Quit Talking And Begin Doing.","Walt Disney"),
				array("The Pessimist Sees Difficulty In Every Opportunity. The Optimist Sees Opportunity In Every Difficulty.","Winston Churchill"),
				array("Don’t Let Yesterday Take Up Too Much Of Today.","Will Rogers"),
				array("You Learn More From Failure Than From Success. Don’t Let It Stop You. Failure Builds Character.","Unknown"),
				array("If You Are Working On Something That You Really Care About, You Don’t Have To Be Pushed. The Vision Pulls You.","Steve Jobs"),
				array("People Who Are Crazy Enough To Think They Can Change The World, Are The Ones Who Do.","Rob Siltanen"),
				array("Imagine Your Life Is Perfect In Every Respect; What Would It Look Like?","Brian Tracy"),
				array("Whether You Think You Can Or Think You Can’t, You’re Right.","Henry Ford"),
				array("Security Is Mostly A Superstition. Life Is Either A Daring Adventure Or Nothing.","Helen Keller"),
				array("The Man Who Has Confidence In Himself Gains The Confidence Of Others.","Hasidic Proverb"),
				array("The Only Limit To Our Realization Of Tomorrow Will Be Our Doubts Of Today.","Franklin D. Roosevelt"),
				array("Creativity Is Intelligence Having Fun.","Albert Einstein")
			);
			$random = rand(0,11);
			echo $quotes[$random][0]."<br> - ".$quotes[$random][1];
			?></font></p>
	</div>

	<!--COULD LIST HERE ALL OTHER TOPICS AND SELECT FROM SIDE PANEL RANDOM PICTURES IS WORKING -->
	<!--NEED TO FIGURE OUT WHEN USER UPLOADS IMAGES FROM REG FORM HOW WE USE THOSE PICTURES-->
	<div id="container">

		<!DOCTYPE html>
		<html>
			<head>
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<style>
					body {
						font-family: "Lato", sans-serif;
					}

				</style>
			</head>
			<body>
			
				
					<!--WITHOUT ICONS-->
				<aside class="sidebar-left">
					<div id="mySidenav" class="sidenav">
						<!--CLOSE BUTTON-->
						<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
						<div class="sidebar-links">
							<a class="link-blue" a href="meetings.php">Meetings</a>
							<a class="link-red" href="#">Map</a>
							<a class="link-yellow selected" href="#">Settings</a>
							<a class="link-green" href="#">Projects</a>
						</div>
					</div>
				</aside>
				
			<div id="openNav">
				<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open Menu</span>
				</div>
					<!--JAVASCRIPT-->
				<script>
					function openNav() {
						document.getElementById("mySidenav").style.width = "250px";
					}

					function closeNav() {
						document.getElementById("mySidenav").style.width = "0";
					}
				</script>

			</body>
		</html>

	</div>

</div>
