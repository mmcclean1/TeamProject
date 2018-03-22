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
					<form id="forum3" name="forum3" method="post" action="includes/form_handlers/meetingshandler.php">
						<td>
							<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
								<tr>
									<td colspan="3" bgcolor="#62C6FA"><strong>Create Meeting</strong> </td>
								</tr><tr> 
									<td valign="top"><strong>Details:</strong></td>
									<td valign="top">
									
											  <input type="Detail" name="details" placeholder="Details" required /> </td>
									</tr>
																	<tr>
									<td><label for="date" class="label-date">Date:&nbsp;&nbsp;</label></td>
									<td><input type="date" id="date" class="floatLabel" name="date" value="<?php echo date('Y-m-d'); ?>"></td>
								</tr>
								<tr> 
									<td valign="top"><strong>Time:</strong></td>
									<td valign="top">
									
											  <input type="time" name="time" placeholder="time" required /> </td>
									</tr>
									 <tr>
									 	<td>
										      <label for="room">Room:</label>
										     
										      <select id="room" name="room" class="floatlabel">
										        <option value="room"></option>
										        <option id="room"name="Curve" selected>Curve</option>
										        <option id="room"name="Library room 1" selected>Library Room 1</option>
												<option id="room"name="Library room 2" selected>Library Room 2</option>
												<option id="room"name="Library room 3" selected>Library Room 3</option>
												<option id="room"name="Library room 4" selected>Library Room 4</option>
												
										        </td>
										        
										        
										      </select>
										     </tr> 
								<td><button type="submit" value="Submit" align="right" class="col-1-4">Book Room</button></td>

							</table>
						</td>
					</form>

				</tr>		
			<?php
										
											print '<hr>';
											  $connection = mysqli_connect("localhost","root","");
											  mysqli_select_db($connection,"studentsupport");
											  $meetings=mysqli_query($connection,"select * from meeting");
											  print("<table border=1>");
											  print '<th>'."MemberNo".'</th>'.'<th>'."CreatorNo".'</th>'.'<th>'."Date".'</th>'.'<th>'."Time".'</th>'.'<th>Details'.'</th>'.'<th>'.'Room'.'</th>';
											  while($row=mysqli_fetch_array($meetings))
											  {
												print '<tr>';
												print '<td>'. $row['MeetingNo'].'</td>'.'<td>'.$row['CreatorNo'].'</td>'.'<td>'. $row['Date'] .'</td>'.'<td>'. $row['time'] .'</td>'.'<td>'. $row['details'] .'</td>'.'<td>'. $row['room'] .'</td>';
												print '</tr>';
												}

			  mysqli_close($connection);
				?>
			</table>
			</div>
			
</div>
		<footer><?php include("includes/footer.php");?></footer>

	</body>

</html>


