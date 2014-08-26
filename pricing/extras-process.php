<?php
	include('../connect.php');
	$id = $_COOKIE["user"];
	
	$round = $_POST['rounding'];
	$diecut = $_POST['diecutting'];
	$cutout = $_POST['cutout'];
	$painting = $_POST['edgepainting'];
	$gliding = $_POST['edgegliding'];
	$total = $_POST['paperTotal'];
	
	if(empty($painting)){
		$painting = 'No';
	}
	else{
		$painting = "PMS ".$_POST['edgepainting'];
	}
	
	setcookie("round","",time()-3600);
	setcookie("diecut","",time()-3600);
	setcookie("cutout","",time()-3600);
	setcookie("paint","",time()-3600);
	setcookie("glide","",time()-3600);
	
	setcookie("round",$round,time()+3600);
	setcookie("diecut",$diecut,time()+3600);
	setcookie("cutout",$cutout,time()+3600);
	setcookie("paint",$painting,time()+3600);
	setcookie("glide",$gliding,time()+3600);
	
	
	/*mysql_query("UPDATE tblpreorder SET rounding='$round', diecutting='$diecut', cutout='$cutout', edgepainting='$painting', edgegliding='$gliding', totalAmount='$total' WHERE id='$id'");*/
	header("location: upload.php");
?>