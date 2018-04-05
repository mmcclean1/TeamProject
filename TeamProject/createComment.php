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



<script type="text/javascript" src="assets/js/newComment.js"></script>


<!--INCLUDE SIDEBAR-->
<?php include("includes/sidebar.php");?>


<!--MAIN CONTENT COLUMN-->
<div class="index_main_column column" >

	<a id="back" href="index.php"><i class="far fa-arrow-alt-circle-left fa-2x" style="color:blue"></i></a>
	<?php
	//Get passed in TopicNo
	$TopicNo=$_GET['TopicNo'];

	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Get Module Name
	$TopicResult=mysqli_query($connection,"SELECT TopicName FROM topic WHERE TopicNo='$TopicNo'");
	while($row=mysqli_fetch_array($TopicResult))
	{print("<title>".$row['TopicName']."</title><h1>".$row['TopicName']."</h1>");}


	//Create new comment
	print("<button id='newComment'>Add Comment</button>");
	print("<br>"."<br>"."<br>");
	print("<div id='div' style=display:none><form method=POST action=commentHandler.php?TopicNo=".$TopicNo.">");
	print("<table width='400' border='1' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>");
	print("<tr><td colspan='3' align='left' bgcolor='#CBEAF8'><strong>Create Comment</strong> </td></tr>");
	print("<tr><td><strong>Comment Summary</strong><input name='CommentName' type='text' size=50' /><strong> </td></tr>");
	print("<tr><td valign='top'><strong>Detail</strong><textarea name='Details' cols='90' rows='20' id='detail'></textarea><br><br><button type='submit' name='commentSubmit' >Add Comment</button> ");
	print("<input type='file' name='fileToUpload'><br><br><input type='reset' name='Submit2' value='Clear'/><br><br><button type='submit' name='cancel' >Cancel Operation</button><td></tr>");
	print("</table></form></div>");

	print('<div id =modulesDiv>');
		print('<div class=col-md-8 col-md-offset-2>');
			print('<table class=table table-striped>');
				print('<thead>');
					print('<tr class=bg-success>');
						print('<th>Comment_ID</th>');
						print('<th>Comment</th>');
					print('</tr>');
				print('</thead>');
				print('<tbody>');

					//Get topics associated with module
					$result=mysqli_query($connection,"SELECT * FROM comment WHERE TopicNo='$TopicNo'");
					while($row=mysqli_fetch_array($result))
					{
						print("<tr><td>".$row['Comment_id']."</td>");
						print("<td>".$row['Comment']."</td></tr>");
						//print("<td><a href=topic.php?TopicNo=".$row['TopicNo'].">".$row['TopicName']."</a></td></tr>");
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
