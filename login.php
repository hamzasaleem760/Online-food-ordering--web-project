<?php
	require("include/config.php");
	require("include/user.php");
	$username=sanitizeInput($_POST["un"]);
	$password=sanitizeInput($_POST["pw"]);
 if($username==$useremail)
 {
 	if($password==$userpassword){
 		$_SESSION["loggedin"]=true; 
 		setcookie("adminem",$username,time()+60*60*24*30);
 		header("Location:admin.php");
 		exit;
 	}
 	else
 	{
 		header("Location:login-failed.php");
		exit;

 	}
 }
	else
	{
		header("Location:login-failed.php");
		exit;
	}
?>