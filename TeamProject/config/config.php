<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect("localhost", "root", "", "studentsupport"); //Connection variable



//TEST CONNECTED TO DATABASE
if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

//else{
//    echo "connected to database successfully.";
//} 

?>