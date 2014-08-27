<?php
	include('../connect.php');
	$size = $_POST['size'];
	$id = $_COOKIE["user"];
	
	setcookie("size", "", time()-3600);
	setcookie("size", $size, time()+3600);
	
	$type = $_COOKIE['paper_opt'];
	/*mysql_query("UPDATE tblpreorder SET size='$size' WHERE id='$id'");*/
	header("location: quantity.php");
?>