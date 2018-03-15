<?php 
include("includes/header.php");

?>

<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/adminstyles.css">
<style>

	.wrapper {
		margin-left: 0px;
		padding-left: 0px;
	}

	</style>

/*
<!--Matthew McClean - L00137316-->
<!--LYIT Team Project 2018-->
<!--BSc 5-->
*/


<script type="text/javascript" src="assets/js/newTopic.js"></script>


<!--INCLUDE SIDEBAR-->
<?php include("includes/sidebar.php");?>


<!--MAIN CONTENT COLUMN-->
<div class="index_main_column column" >

	<a id="back" href="index.php"><i class="far fa-arrow-alt-circle-left fa-2x" style="color:blue"></i></a>
	<?php
	//Get passed in ModuleNo
	$moduleNo=$_GET['ModuleNo'];

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Get Module Name
	$moduleResult=mysqli_query($connection,"SELECT ModuleName FROM module WHERE ModuleNo='$moduleNo'");
	while($row=mysqli_fetch_array($moduleResult))
	{print("<title>".$row['ModuleName']."</title><h1>".$row['ModuleName']."</h1>");}


	//Create new topic
	print("<button id='newTopic'>Add New Topic</button>");
	print("<br>"."<br>"."<br>");
	print("<div id='div' style=display:none><form method=POST action=topicHandler.php?ModNo=".$moduleNo.">");
	print("<table width='400' border='1' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>");
	print("<tr><td colspan='3' align='left' bgcolor='#CBEAF8'><strong>Create Topic</strong> </td></tr>");
	print("<tr><td><strong>Topic</strong><input name='TopicName' type='text' size=50' /><strong> </td></tr>");
	print("<tr><td valign='top'><strong>Detail</strong><textarea name='Details' cols='90' rows='20' id='detail'></textarea><br><br><button type='submit' name='topicSubmit' >Add Topic</button> ");
	print("<input type='file' name='fileToUpload'><br><br><input type='reset' name='Submit2' value='Clear'/><br><br><button type='submit' name='cancel' >Cancel Operation</button><td></tr>");
	print("</table></form></div>");
	?>
	
	<div id ="modulesDiv">
		<div class="col-md-8 col-md-offset-2">
			<table class="table table-striped">
				<thead>
					<tr class="bg-success">
						<th>ModulesNo</th>
						<th>Topic</th>
					</tr>
				</thead>
				<tbody>
					<?php

					//Get topics associated with module
					$result=mysqli_query($connection,"SELECT * FROM topic WHERE ModuleNo='$moduleNo'");
					while($row=mysqli_fetch_array($result))
					{
						print("<tr><td>".$row['TopicNo']."</td>");
						print("<td><a href=topic.php?TopicNo=".$row['TopicNo'].">".$row['TopicName']."</a></td></tr>");
					}
					//Close connection
					mysqli_close($connection);
					?>
				</tbody>
			</table>
		</div>
	</div>

	<footer><?php include("includes/footer.php");?></footer>
	</body>
</html>