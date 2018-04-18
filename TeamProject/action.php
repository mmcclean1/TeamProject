<?php
	$con = mysqli_connect("localhost",'root','',"studentsupport");
	if (!$con)
	{
		die("Oops Connection problem" . mysqli_error());
	}
    
    if(isset($_REQUEST['action']) && $_REQUEST['action'] == "report"){
        $subject = trim($_REQUEST['subject']);
        $report = trim($_REQUEST['report']);
        $MemNo = trim($_REQUEST['MemNo']);
        $report_isert = "INSERT INTO `reports`(`MemNo`, `subject`, `report`) VALUES ('$MemNo','$subject','$report')";
        $run = mysqli_query($con,$report_isert);
        if($report_isert){
            $_SESSION['report'] = "Report Submitted.";
            header("Location: index.php");
        }else{
            $_SESSION['report'] = "Something Went Wrong.";
            header("Location: index.php");
        }
    }
?>