<?php include("includes/adminHeader.php") ?>
<h1>Admin Dashboard</h1>

<div><?php echo Message();
	echo SuccessMessage();
?></div>	

<div class="table-responsive">
<table class="table table-striped table-hover">
	<tr>
							<th>No</th>
							<th>Post Title</th>
							<th>Date &Time</th>
							<th>Author</th>
							<th>Category</th>
							<th>Banner</th>
							<th>Comments</th>
							<th>Action</th>
							<th>Details</th>

						</tr>

						<?php
						$ConnectingDB;
						$ViewQuery="SELECT * FROM member ORDER BY id desc;";
						$Execute=mysqli_query($con,$ViewQuery);
						$SrNo=0;

						while($DataRows=mysqli_fetch_array($Execute)){
							$Id=$DataRows["id"];
							$DateTime=$DataRows["signup_date"];
							$Title=$DataRows["username"];
							$Category=$DataRows["courseNo"];
							$Admin=$DataRows["first_name"];
							$Image=$DataRows["profile_pic"];
							$Post=$DataRows["email"];
							$SrNo++;
						?>
						<tr>

							<td><?php echo $SrNo; ?></td>
							<td style="color: #5e5eff;"><?php
							if(strlen($Title)>19){$Title=substr($Title,0,19).'..';}
							echo $Title;
								?></td>
							<td><?php
							if(strlen($DateTime)>12){$DateTime=substr($DateTime,0,12);}
							echo $DateTime;
								?></td>
							<td><?php
							if(strlen($Admin)>9){$Admin=substr($Admin,0,9);}
							echo $Admin; ?></td>
							<td><?php
							if(strlen($Category)>10){$Category=substr($Category,0,10);}
							echo $Category;
								?></td>
							<td><img src="Upload/<?php echo $Image; ?>" width="170px"; height="50px"></td>
							<td>
								<?php
							$ConnectingDB;
							//$QueryApproved="SELECT * FROM posts WHERE post_id='$Id' AND status='ON'";
							$QueryApproved="SELECT COUNT(*) FROM comment WHERE comment_id='$Id' AND comment_status='ON'";
							$ExecuteApproved=mysqli_query($con, $QueryApproved);
							$RowsApproved=mysqli_fetch_array($ExecuteApproved);
							$TotalApproved=array_shift($RowsApproved);
							if($TotalApproved>0){
								?>
								<span class="label pull-right label-success">
									<?php echo $TotalApproved;?>
								</span>

								<?php } ?>

								<?php
							$ConnectingDB;
							$QueryUnApproved="SELECT COUNT(*) FROM comment WHERE comment_id='$Id' AND comment_status='OFF'";
							$ExecuteUnApproved=mysqli_query($con,$QueryUnApproved);
							$RowsUnApproved=mysqli_fetch_array($ExecuteUnApproved);
							$TotalUnApproved=array_shift($RowsUnApproved);
							if($TotalUnApproved>0){
								?>
								<span class="label  label-danger">
									<?php echo $TotalUnApproved;?>
								</span>

								<?php } ?>


							</td>
							<td>
								<a href="EditPost.php?Edit=<?php echo $Id; ?>">
									<span class="btn btn-warning">Edit</span>
								</a>
								<a href="DeletePost.php?Delete=<?php echo $Id; ?>">
									<span class="btn btn-danger">Delete</span>
								</a>
							</td>
							<td>
								<!--EXTRA COLUM IF WANT TO ADD BUTTONS TAKE YOU BACAK TO WEBSITE PAGE TO NAVIGATE-->
								<a href="index.php?id=<?php echo $Id; ?>" target="_blank">
									<span class="btn btn-primary"> Live Preview</span>
								</a>
							</td>
						</tr>
						<?php } ?>
					</table>
				</div>
			<?php include("includes/adminFooter.php") ?>