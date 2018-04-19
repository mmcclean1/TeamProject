



<?php
include("includes/header.php");

?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<!--
TWO OPTIONS WHEN APLYING BOOTSTRAP DOWNLOAD THE CDN DIRECTLY FROM THE BOOTSTRAP WEBSITE
OR DOWNLOD THE FILES
http://getbootstrap.com/docs/4.0/getting-started/download/#bootstrapcdn
1.FOR BOOTSTRAP
2.FOR JQUERY
-->
		<!--BOOTSTRAP-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<!--JQUERY-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<!--BOOTSTRAP-->
		<link rel="stylesheet" href="css/bootstrap.min.css">


		<!--OTHER LIBRARIES GO HERE-->


		<!--LINK FOR RESPONSIVENESS-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>

		<!-- !--STYLES THE PROFILE BAR JOHN LEE HEANEY STYLES-->
		<style>
			.wrapper {
				margin-left: 0px;
				padding-left: 0px;
			}
		</style>

		<!--Matthew McClean - L00137316-->
		<!--LYIT Team Project 2018-->
		<!--BSc 5-->
		<script type="text/javascript" src="assets/js/newTopic.js"></script>
		<!--INCLUDE SIDEBAR-->
		<?php include("includes/sidebar.php");?>

		<!--MAIN CONTENT COLUMN-->
			<div class="index_main_column column">

			<?php
			//Get passed in ModuleNo
			$moduleNo=$_GET['ModuleNo'];

			//Connect to database
			$connection = mysqli_connect("localhost:3307","root","");
			mysqli_select_db($connection,"studentsupport");

			//Get Module Name
			$moduleResult=mysqli_query($connection,"SELECT ModuleName FROM module WHERE ModuleNo='$moduleNo'");
			while($row=mysqli_fetch_array($moduleResult))
			{print("<div id='color1' style='text-align:center'><title>".$row['ModuleName']."</title><h1>".$row['ModuleName']."</h1>");
			 print("</div>");}
			?>
			

				<a id='back' href="index.php"><i class="far fa-arrow-alt-circle-left fa-3x" style="color:red"></i></a><br><br>
				<?php 
				print("<br>");

				?>

			<!--Create new topic-->
			<div class="col-md-9 col-md-offset-1" >
				<thead>
				<tbody>
					<tr>
						<td><?php
							print("<button type='button' id='newTopic' class='btn btn-primary'>Add new Topic</button>");
							print("<br>"."<br>");
							print("<div id='div' style=display:none><form method=POST action=topicHandler.php?ModNo=".$moduleNo.">");
							print("<table class='table table-bordered'>");
							print("<thead>");
							print("<tbody>");
							print("<tr>");
							print("<tr><td  colspan='6' align='left' bgcolor='#CBEAF8'><strong>Create Topic</strong> </td></tr>");
							print("<tr><td colspan='7'><strong>Topic</strong><input name='TopicName' type='text' size=90' color='black' /><strong> </td></tr>");

							print("<tr><td valign='bottom'><strong>Detail</strong><textarea name='Details' cols='90' rows='4' id='detail'></textarea><br><br>

									<button type='submit name='topicSubmit' class='btn btn-primary'>Add Topic</button>");
							
							
							print("<button type='reset' name='Submit2' value='Clear' class='btn btn-primary'>Clear</button><button type='submit name='cancel' class='btn btn-primary'>Cancel Operation</button><td></tr>");
							
							print("</thead><tbody></table></form></div></div>");

							print("<br>");
							?>

						
							<div id='modulesDiv' class="col-md-9 col-md-offset-1">
								<table class="table table-striped">
									<thead>
										<tr class="text-success">
											<th>Topic Title</th>
											<th>Details</th>
											<th>Date Created</th>
											<!--											MAKE THE WORD NOT WRAP IN COLUMN-->
											<th nowrap="nowrap">Created By</th>										

										</tr>
									</thead>
									<tbody>
										<?php

										//Get topics associated with module
										$result=mysqli_query($connection,"SELECT * FROM topic WHERE ModuleNo='$moduleNo'");
										while($row=mysqli_fetch_array($result))
										{
											print("<tr><td><a href=createComment.php?TopicNo=".$row['TopicNo'].">".$row['TopicName']."</a></td>");
											print("<td>".$row['Details']."</td>");
											print("<td>".$row['DateCreated']."</td>");
											$CreatorNo = $row['CreatorNo'];
											$namesResult=mysqli_query($connection,"SELECT * FROM member WHERE id='$CreatorNo'");
											while($row2=mysqli_fetch_array($namesResult))
											{print('<td>'.$row2['first_name']."&nbsp;".$row2['last_name'].'</td></tr>');}
										}
										//Close connection
										mysqli_close($connection);
										?>

									</tbody>
								</table>
							</div>
</div>
							<!-- EMPTY DIV TO PUT SPACE BETWEEN IMAGE AND TEXT-->
							<footer><?php include("includes/footer.php");?>

								</body>

				</html>