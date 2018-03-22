<?php
//require 'config/config.php';
include("includes/header.php");

?>

<!--Function for cancel button, redirects to viewTOpic.php-->
<?php
if(isset($_POST['cancel'])){
header("Location: http://localhost/TeamProject/TeamProject/module.php");
exit;
}

?>

<!--Function for submit button-->

<?php
function setComment($con) {
	if(isset($_POST['commentSubmit'])) {
		$Comment_id= $_POST['Comment_id'];
    $Comment= $_POST['Comment'];
		$dateCreated= $_POST['dateCreated'];

		$sql ="INSERT INTO comment (Comment_id, Comment, DateCreated) VALUES ('$Comment_id', '$Comment, $dateCreated')";
		$result = $con->query($sql);


	}}


	?>
<style>
	.wrapper {
		margin-left: 0px;
		padding-left: 0px;
	}

	.viewTopic-form{
		overflow: scroll;
		padding: 5px;
		height: 100%;
	}



</style>

<!--INCLUDE SIDEBAR-->
<?php include("includes/sidebar.php");?>

<div class="index_main_column column" >
	<?php echo "<h1>"."Add Comment to Thread"."</h1>"."<h3>"."(attach any code or formulae as snippets)"."</h3>"."<hr>";?>
<html>
<head>
</head>

<body>
	<table width="400" border="0">
		<tr>
			<?php
			echo "<form id='Comment' name='Comment' method='post' action='".setComment($con)."'

						<td>
							<table width='400' border='1' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
								<tr>
									<td colspan='3' align='left' bgcolor='#CBEAF8'><strong>Create Topic</strong> </td>
								</tr>
								<tr>

									<td><input name='TopicNo' type='hidden' size='50' /></td>


								</tr>

								<tr>

									<td><strong>Topic</strong><input name='TopicName type='text' size=50' /><strong>  <strong><input type='hidden' name='date' value='".date('Y-m-d H:i:s')."';  ?></td>
								</tr>


								<tr>
									<td valign='top'><strong>Detail</strong><textarea name='detail' cols='90' rows='20' id='detail'></textarea><br><br>
										<button type='submit' name='topicSubmit' >Add Topic</button>
										<input type='file' name='fileToUpload'><br><br>
										<input type='reset' name='Submit2' value='Clear'/><br><br>
										<button type='submit' name='cancel' >Cancel Operation</button>



									<td>



								</tr>

							</table>
						</td>
					</form>	";

			?>
		</tr>
	</table>
</body>
</html>

	<!--WHERE THE ACTUAL CONTENT GETS LOADED ON DISSCUSSION BOARD CHANGE COLORR HERE TOO OR CREAT CSS CLASS TO STYLE-->
	<div class="posts_area" style="background-color:#ccccff;"></div>




</div>

<script>



	<footer><?php include("includes/footer.php");?></footer>
