
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

		<!--MEETING PAGE-->
<!--

		<div id="tl"><div class="center"><p class="topics"></p><a href="meetings.php"><i class="fas fa-users fa-2x" style="color:white"></i></a></div></div>
		<div id="tc"><div class="center"><p class="topics"></p><a href="mapFind.php"><i class="fas fa-map-marker fa-2x" style="color:white " ></i></a></div></div>

		<div id="tr"><div class="center"><p class="topics"></p><a href="settings.php"><i class="fas fa-cogs fa-2x" style="color:white" ></i></a></div></div>

		<div id="ml"><div class="center"><p class="topics"></p><i class="fas fa-sun fa-2x" style="color:white " ></i></div></div>
		<div id="mc"><div class="center"><p class="topics"></p><i class="far fa-newspaper fa-2x" style="color:white " ></i></div></div>
		<div id="mr"><div class="center"><p class="topics"></p><i class="far fa-address-book fa-2x" style="color:white " ></i></div></div>
		<div id="bl"><div class="center"><p class="topics"></p><i class="fas fa-envelope fa-2x" style="color:white " ></i></div></div>
		<div id="bc"><div class="center"><p class="topics"></p><i class="fas fa-trophy fa-2x" style="color:white" ></i></div></div>
		<div id="br"><div class="center"><p class="topics"></p><i class="fas fa-database fa-2x" style="color:white " ></i></div></div>
-->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
	
/*
    width: 25%;
	max-width: 200px;
	height: 800px;
    position: fixed;
    z-index: 1;
    top: 10%;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.4s;
    padding-top: 60px;
*/
	
	height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 10%;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
    text-decoration: none !important;

}

.sidenav a:hover {
    color: green;
}

.sidenav .closebtn {
    position: absolute;
    top: 2%;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="meetings.php">Meetings</a>
  <a href="mapFind.php">Map</a>
  <a href="settings.php">Settings</a>
  <a href="#">Contact</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open Menu</span>

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
