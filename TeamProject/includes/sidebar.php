
<!--JOHN LEE HEANEY-->
<?php 

?>
<!--COULD CHANGE THE NAME OF THIS CLASS TO SIDE BAR-->
<div class="sidbar_left">


<?php
	
		$db = mysqli_connect("localhost","root","","studentsupport");	
			$id = $_SESSION['id'];
		$sql = "SELECT * FROM member WHERE id ='$id'";

		$result = mysqli_query($db, $sql);
		while ($row = mysqli_fetch_array($result))
		{
			echo "<br>";
			echo "<img src='".$row['profile_pic']."'>";
		}
		
		?>
		
	<!--COULD LIST HERE ALL OTHER TOPICS AND SELECT FROM SIDE PANEL RANDOM PICTURES IS WORKING -->
	<!--NEED TO FIGURE OUT WHEN USER UPLOADS IMAGES FROM REG FORM HOW WE USE THOSE PICTURES-->
	<div id="container">

		<!--UPLOAD USE IMAGE I THINK JUST TO RANDOMISED THE IMAGES IS FINE-->
		<!--NEED TO FIND OUT HOW TO PRINT THE USER LOGGED IN PICTURE NOT ALL USERS-->
	
		
		<!--MEETING PAGE-->

		<div id="tl"><div class="center"><p class="topics"></p><a href="meetings.php"><i class="fas fa-users fa-2x" style="color:white"></i></a></div></div>
		<div id="tc"><div class="center"><p class="topics"></p><a href="mapFind.php"><i class="fas fa-map-marker fa-2x" style="color:white " ></i></a></div></div>

		<div id="tr"><div class="center"><p class="topics"></p><a href="settings.php"><i class="fas fa-cogs fa-2x" style="color:white " ></i></a></div></div>

		<div id="ml"><div class="center"><p class="topics"></p><i class="fas fa-sun fa-2x" style="color:white " ></i></div></div>
		<div id="mc"><div class="center"><p class="topics"></p><i class="far fa-newspaper fa-2x" style="color:white " ></i></div></div>
		<div id="mr"><div class="center"><p class="topics"></p><i class="far fa-address-book fa-2x" style="color:white " ></i></div></div>
		<div id="bl"><div class="center"><p class="topics"></p><i class="fas fa-envelope fa-2x" style="color:white " ></i></div></div>
		<div id="bc"><div class="center"><p class="topics"></p><i class="fas fa-trophy fa-2x" style="color:white" ></i></div></div>
		<div id="br"><div class="center"><p class="topics"></p><i class="fas fa-database fa-2x" style="color:white " ></i></div></div>


	</div>


</div>
