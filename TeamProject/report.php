<?php 
	$con = mysqli_connect("localhost",'root','',"studentsupport");
	if (!$con)
	{
		die("Oops Connection problem" . mysqli_error());
	}
    
?>
<form method="post" action="action.php">
    <div class="form-group">
        <label>Subject</label>
        <input type="text" class="form-control" name="subject" placeholder="Subject" />
    </div>
    <br />
    <div class="form-group">
        <label>Report</label>
        <textarea class="form-control" name="report">
            
        </textarea>
    </div>
    <br />
    <div class="form-group">
        <input type="hidden" name="action" value="report" />
        <input type="hidden" name="MemNo" value="<?php if(isset($_REQUEST['MemNo'])){echo $_REQUEST['MemNo'];}?>" />                
        <input type="submit" class="btn btn-primary" value="Submit" />    
    </div>    
</form>
