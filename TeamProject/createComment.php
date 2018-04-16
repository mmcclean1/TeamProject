
<?php
//l00085571___andrew
include("includes/header.php");

?>

<!--ADD BOOTSTRAP-->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- !--STYLES THE PROFILE BAR JOHN LEE HEANEY STYLES-->
<style>
	.wrapper {
		margin-left: 0px;
		padding-left: 0px;
	}
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
		/*	color: #123455;*/
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

<script type="text/javascript" src="assets/js/newComment.js"></script>


<!--INCLUDE SIDEBAR-->
<?php include("includes/sidebar.php");?>


<!--MAIN CONTENT COLUMN-->
<div class="index_main_column column" >


	<div id="color1">
		<h1  align="center">Comments</h1></div>
	<a id="back" href="index.php"><i class="far fa-arrow-alt-circle-left fa-3x" style="color:red"></i></a>
	<?php
	//Get passed in TopicNo
	//	$TopicNo=$_GET['TopicNo'];
	$TopicNo = "";
	$TopicNo = isset($_GET['TopicNo']) ? $_GET['TopicNo'] : '';
	
	//Connect to database
	$connection = mysqli_connect("localhost:3307","root","");
	mysqli_select_db($connection,"studentsupport");

	//Get Module Name
	$TopicResult=mysqli_query($connection,"SELECT TopicName FROM topic WHERE TopicNo='$TopicNo'");
	while($row=mysqli_fetch_array($TopicResult))
	{print("<title>".$row['TopicName']."</title><h1>".$row['TopicName']."</h1>");}

	//Create new comment
	print("<br>"."<br>"."<br>");
	print("&nbsp;"."&nbsp;"."<button type='button' id='newComment' class='btn btn-primary'>Add Comment</button>");
	print("<br>"."<br>"."<br>");
	print("<div id='div' style=display:none><form method=POST action=commentHandler.php?TopicNo=".$TopicNo.">");
	print("<table width='400' border='1' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>");
	print("<tr><td colspan='3' align='left' bgcolor='#CBEAF8'><strong>Create Comment</strong> </td></tr>");
	print("<tr><td><strong>Comment Summary</strong><input name='CommentName' type='text' size=50' /><strong> </td></tr>");
	print("<tr><td valign='top'><strong>Detail</strong><textarea name='Details' cols='90' rows='20' id='detail'></textarea><br><br><button type='submit' name='commentSubmit' >Add Comment</button> ");
	print("<input type='file' name='fileToUpload'><br><br><input type='reset' name='Submit2' value='Clear'/><br><br><button type='submit' name='cancel' >Cancel Operation</button><td></tr>");
	print("</table></form></div>");
	?>

	<div id='modulesDiv' class="col-md-10 col-md-offset-1">
		<table class="table table-striped">
			<thead>
				<tr class="text-success">
					<th>Comment Summary</th>
					<th>Comment</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//Get topics associated with module
				$result=mysqli_query($connection,"SELECT * FROM comment WHERE TopicNo='$TopicNo'");
				while($row=mysqli_fetch_array($result))
				{
					//print("<tr><td>".$row['Comment_id']."</td>");
					print("<tr><td>".$row['commentSummary']."</td>");
					print("<td>".$row['Comment']."   "."<a href='deleteComment.php?id='" . $row['Comment_id'] . "'>Delete </a>"."</td></tr>");
					//	echo "<a href='delete.php?id='" . $row['id'] . "'>Delete Song</a>";
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
