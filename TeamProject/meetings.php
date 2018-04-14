<?php 
include("includes/header.php");


?>

<!--INCLUDE SIDEBAR-->
<?php include("includes/sidebar.php");?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Meetings</title>
		<!--ADD BOOTSTRAP FOR BETTER STYLING AND LAYOUT-->
		<link rel="stylesheet" href="css/bootstrap.min.css">
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
				/*				color: #123455;*/
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
	</head>
	<body>

		<div class="index_main_column column" >

			<div id="color1">
				<h1  align="center">Schedule Meetings</h1></div><br><br>

		
					<form id="forum3" name="forum3" method="post" action="includes/form_handlers/meetingshandler.php">
						<td>
						
							<div class="col-md-4 col-md-offset-1">
						<table class="table table-striped">
							<thead class="thead-dark">
								<tr class="text-success">
								
									<td colspan="3" bgcolor="#62C6FA"><strong>Create Meeting</strong> </td>
								</tr><tr> 
								<td valign="top"><strong>Details:</strong></td>
								<td valign="top">

									<input type="Detail" name="details" placeholder="Details" required /> </td>
								</tr>
								<tr>
									<td><label for="date" class="label-date">Date:&nbsp;&nbsp;</label></td>
									<td><input type="date" id="date" style="width:100%" class="floatLabel" name="date" value="<?php echo date('Y-m-d'); ?>"></td>
								</tr>
								<tr> 
									<td valign="top"><strong>Time:</strong></td>
									<td valign="top">

										<input type="time" name="time" style="width:100%" placeholder="time" required /> </td>
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
											<td>
										</select>
								</tr> 
								<td><button type="submit" value="Submit" style="width:100%" align="right" class="col-1-4">Book Room</button></td>

							</table>
						</td>
					</form>
				</tr>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

					<div class="col-md-10 col-md-offset-1" >
					
				<table class="table table-striped">
					<thead>
						<tr class="text-success">
									<?php

									print '<hr>';
									$connection = mysqli_connect("localhost:3307","root","");
									mysqli_select_db($connection,"studentsupport");
									$meetings=mysqli_query($connection,"select * from meeting");

				
									print '<th>'."MemberNo".'</th>'.'<th>'."CreatorNo".'</th>'.'<th>'."Date".'</th>'.'<th>'."Time".'</th>'.'<th>Details'.'</th>'.'<th>'.'Room'.'</th>';
									while($row=mysqli_fetch_array($meetings))
									{
										print '<tr>';
										print '<td>'. $row['MeetingNo'].'</td>'.'<td>'.$row['CreatorNo'].'</td>'.'<td>'. $row['Date'] .'</td>'.'<td>'. $row['time'] .'</td>'.'<td>'. $row['details'] .'</td>'.'<td>'. $row['room'] .'</td>';
										print '</tr><thead></table>';
									}

									mysqli_close($connection);
									?>

							
				
				</div>

	
</div>


				<footer><?php include("includes/footer.php");?></footer>

				</body>

			</html>


