<?php require_once("Includes/Sessions.php"); ?>
<?php require_once("Includes/Functions.php");?>
<?php

$_SESSION["User_Id"] = null;

session_destroy();
Redirect_to("adminLogin.php");


?>