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
		<title>Report</title>
	</head>
	<body>

		<div class="index_main_column column" >

			<?php echo "<h2>"."Report"."</h2>"."<hr>";?>

			<table width="400" border="2" align="center" >
				<tr>
					<form id="forum3" name="forum3" method="post" action="includes/form_handlers/ReportHandler.php">
						<td>
							<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
								<tr>
									<td colspan="3" bgcolor="#62C6FA"><strong>Report</strong> </td>
								</tr><tr> 
									<td valign="top"><strong>Report</strong></td>
									 	<td>
										      <label for="room">Report Type:</label>
										     
										      <select id="ReportType" name="ReportType" class="floatlabel">
										        <option value="ReportType"></option>
										        <option id="ReportType"name="Topic" selected>Topic</option>
										        <option id="ReportType"name="User" selected>User</option>
												
										        </td>
										        <td valign="top"><strong>Details</strong></td>
													<td valign="top">
									
											  <input type="ReportContent" name="ReportContent" placeholder="ReportContent" required /> </td>
												</tr>
										        
										      </select>
										     </tr> 
								<td><button type="submit" value="Submit" align="right" class="col-1-4">Submit Report</button></td>

							</table>
						</td>
					</form>

				</tr>		
			
			</table>
			</div>
			
</div>
		<footer><?php include("includes/footer.php");?></footer>

	</body>

</html>


