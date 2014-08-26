<?php
	include('../connect.php');
	$quantity = $_POST['quantity'];
	$total = $_POST['paperTotal'];
	$id = $_COOKIE["user"];
	
	setcookie("quantity", "", time()-3600);
	setcookie("quantity", $quantity, time()+3600);
	
	setcookie("price_total", "", time()-3600);
	setcookie("price_total", $total, time()+3600);
	/*mysql_query("UPDATE tblpreorder SET quantity='$quantity' WHERE id='$id'");
	mysql_query("UPDATE tblpreorder SET totalAmount='$total' WHERE id='$id'");*/
	header("location: color.php");
?>