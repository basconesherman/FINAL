<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_COOKIE['mail']) || (trim($_COOKIE['mail']) == '')) {
		header("location: ../index.php");
		exit();
	}
?>