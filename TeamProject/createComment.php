
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
		</style>

<script type="text/javascript" src="assets/js/newComment.js"></script>
<script type="text/javascript" src="assets/js/reply.js"></script>


<!--INCLUDE SIDEBAR-->
<?php include("includes/sidebar.php");?>


<!--MAIN CONTENT COLUMN-->
<div class="index_main_column column" >

	<div id="color1">
		<h1  align="center">Comments</h1></div>
	
	<?php
	//Get session id
	$id = $_SESSION['id'];

	//Get passed in TopicNo
	$TopicNo=$_GET['TopicNo'];
	
	//Connect to database
	$connection = mysqli_connect("localhost","root","");
	mysqli_select_db($connection,"studentsupport");

	//Get Topic Name & Details
	$TopicResult=mysqli_query($connection,"SELECT * FROM topic WHERE TopicNo='$TopicNo'");
	while($row=mysqli_fetch_array($TopicResult))
	{
		print('<a id="back" href=module.php?ModuleNo='.$row['ModuleNo'].'><i class="far fa-arrow-alt-circle-left fa-3x" style="color:red"></i></a>');
		print("<title>".$row['TopicName']."</title><h1>".$row['TopicName']."</h1>");
		print($row['Details']);
		print("<br>");
	}


	?>
	<div class="col-md-8 col-md-offset-1" >
		<thead>
		<tbody>
			<tr>
				<td><?php 
					//Create new comment

					print("<br>");
					print("<button type='button' id='newComment' class='btn btn-primary'>Add Comment</button>");
					print("<br>"."<br>"."<br>");
				print("<div id='div' style=display:none><form method=POST 
					action=commentHandler.php?TopicNo=".$TopicNo.">");

					print("<table class='table table-bordered'>");
						print("<thead>");
							print("<tbody>");
								print("<tr>");
									print("<tr><td  colspan='6' align='left' bgcolor='#CBEAF8'><strong>Create Comment </strong> </td></tr>");
								print("<tr><td valign='top'><strong>Detail</strong><textarea name='Details' cols=100' rows='4' id='detail'></textarea><br><br>
									<button type='submit' name='commentSubmit' class='btn btn-primary's >Add Comment</button> ");

					//					BUTTONS
					print("<button type='reset' name='Submit2' value='Clear' class='btn btn-primary'>Clear</button> <button type=reset name='cancel' class='btn btn-primary' onclick=createForm() >Cancel Operation</button><td></tr>");
					print("</thead><tbody></table></form></div></div>");

					print("<br>");
					?>
	
	<?php
	function commentTable($row) // Function to generate table of comments
	{
		//Connect to database
		$connection = mysqli_connect("localhost","root","");
		mysqli_select_db($connection,"studentsupport");

		//Get session id
		$id = $_SESSION['id'];

		//Get passed in TopicNo
		$TopicNo=$_GET['TopicNo'];

		$CommentNo = $row['CommentNo'];

		print('<tr>');
		if($row['Deleted']==FALSE)
		{
			print('<td>'.$row['Likes'].':');

			//Show like or unlike button depending on whether user has liked comment before
			$likesResult = mysqli_query($connection, "SELECT * FROM likes WHERE MemberNo='$id' AND CommentNo='$CommentNo'");
			if(mysqli_num_rows($likesResult)==0)
			{
				
				//	like button with image
				print('<button class="btn-secondary like-review" value=Like onclick=location.href="like.php?CommentNo='.$row['CommentNo'].'&TopicNo='.$TopicNo.'">
    <i class="fas fa-thumbs-up fa-2x" style="color:blue"></i></button>');
				
				
			}
			else
			{
				//UnLike button with image - user has liked comment before - clicking this will unlike the comment
					print('<button class="btn-secondary like-review" value=Unlike onclick=location.href="unlike.php?CommentNo='.$row['CommentNo'].'&TopicNo='.$TopicNo.'">
    <i class="fas fa-thumbs-down fa-2x" style="color:red"></i></i></button>');
				
				
			}

			print("<td>".$row['Comment']."</td>");
			print('<td>'.$row['DateCreated'].'</td>');
			$CreatorNo = $row['CreatorNo'];
			$namesResult=mysqli_query($connection,"SELECT * FROM member WHERE id='$CreatorNo'");
			while($row2=mysqli_fetch_array($namesResult))
			{
				print('<td>'.$row2['first_name']."&nbsp;".$row2['last_name'].'</td></tr>');
			}

			//Extra actions
			print('<tr><td><a onclick=replyForm(this) id='.$CommentNo.'>Reply</a></td>');
			print('<td><a>Report</a></td>');
			if($id == $CreatorNo)
			{
				print('<td><a href=deleteComment.php?CommentNo='.$row['CommentNo'].'&TopicNo='.$TopicNo.'>Delete</a></td>');
				print('<td></td></tr>');
			}
			else {
				print('<td></td>');
				print('<td></td></tr>');
			}
			//Show this table only when reply is clicked
			print('<tr style=display:none id=reply'.$CommentNo.'><td>');
				print("<table width='400' border='1' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>");
					print('<form method=POST action=replyHandler.php?TopicNo='.$TopicNo.'&ReplyTo='.$CommentNo.' >');
						print("<tr><td colspan='3' align='left' bgcolor='#CBEAF8'><strong>Reply</strong> </td></tr>");
						print("<tr><td valign='top'><strong>Detail</strong><textarea name='Details' cols='30' rows='20' id='detail'></textarea><br><br><button type='submit' name='commentSubmit' >Add Comment</button> ");
						print("<input type='reset' name='Submit2' value='Clear'/><br><br><button type=reset id='$CommentNo' onclick=replyForm(this) >Cancel Operation</button><td></tr>");
				print("</table></form>");
			print('</td></tr>');
		}
		else
		{
			print('<td></td><td>[deleted]</td><td></td><td></td>');
			print('</tr>');
		}
		
		//Print out any replies to comment
		$replyResult=mysqli_query($connection,"SELECT * FROM comment WHERE ReplyTo='$CommentNo' ORDER BY Likes AND DateCreated DESC");
		if(mysqli_num_rows($replyResult)!=0)
		{
			//There is a reply to this comment, generate comments
			while($row=mysqli_fetch_array($replyResult))
			{
				commentTable($row);
			}
		}

		mysqli_close($connection);
	}
	//End of Function
?>


	<div id='modulesDiv' class="col-md-10 col-md-offset-1">
		<?php
			//Get comments associated with topic
			$result=mysqli_query($connection,"SELECT * FROM comment WHERE TopicNo='$TopicNo' ORDER BY Likes AND DateCreated DESC");
			if(mysqli_num_rows($result)>0)
			{

				print('<table class="table table-striped">
					<thead>
						<tr class="text-success">
							<th>Likes</th>
							<th>Comment</th>
							<th>Date Created</th>
							<th>Created By</th>
						</tr>
					</thead>
					<tbody>');
				
				while($row=mysqli_fetch_array($result))
				{
					if($row['ReplyTo']==NULL)
						{commentTable($row);}
				}
					
				//Close connection
				mysqli_close($connection);
				
				print('</tbody>
				</table>');
			}
			else //Do this if there is nothing in the database for this topic
			{
				print('<p>There`s nothing here! Start the conversation by writing a comment.</p>');
			}
		?>
	</div>

</div>
<footer><?php include("includes/footer.php");?></footer>
</body>
</html>