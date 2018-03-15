<?php 
include("includes/header.php");


?>
<!--ADD BOOTSTRAP FOR BETTER STYLING AND LAYOUT-->
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

<!--INCLUDE SIDEBAR-->
<?php include("includes/sidebar.php");?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Meetings</title>
	</head>
	<body>

		<div class="index_main_column column" >

			<?php echo "<h2>"."Schedule Meetings"."</h2>"."<hr>";?>

			<table width="400" border="2" align="center" >
				<tr>
					<form id="forum3" name="forum3" method="post" action=".php">
						<td>
							<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
								<tr>
									<td colspan="3" bgcolor="#62C6FA"><strong>Create Meeting</strong> </td>
								</tr>
								<tr>
									<td><strong>Name</strong></td>
									<td>:</td>
									<td><input name="name" type="text" id="topic" size="50" /></td>
								</tr>
								<tr>
									<td><strong>Email</strong></td>
									<td>:</td>
									<td><input name="email" type="text" id="email" size="50" /></td>
								</tr>
								<tr> 
									<td valign="top"><strong>Detail</strong></td>
									<td valign="top">:</td>
									<td><textarea name="detail" cols="50" rows="5" id="detail"></textarea></td>
								</tr>
								<tr>
									<td><label for="time" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Date:</label></td>
									<td><input type="date" id="time" class="floatLabel" name="time" value="<?php echo date('Y-m-d'); ?>"></td>
								</tr>


								<tr>
									<label for="Room">Room:</label>
									<i class="fa fa-sort"></i>
									<select class="floatLabel">
										<option value="room"></option>
										<option value="room" selected>With 3 people</option>
										<option value="room" selected>With 4 people</option>
										<option value="room" selected>With 5 people</option>
										<option value="room" selected>With 6 people</option>
										<option value="room" selected>With 8 people</option>
									</select>
								</tr> 
								<td><button type="submit" value="Submit" align="right" class="col-1-4">Book Room</button></td>

							</table>
						</td>
					</form>

				</tr>
			</table>


		</div>

		<footer><?php include("includes/footer.php");?></footer>

	</body>

</html>


