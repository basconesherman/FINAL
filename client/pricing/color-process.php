<?php
	include('../connect.php');
	$id = $_COOKIE["user"];
	$total = $_POST['paperTotal'];
	
	$fnum = $_POST['frontNum'];
	$bnum = $_POST['backNum'];
	
	setcookie("front_num",$fnum,time()+3600);
	setcookie("back_num",$bnum,time()+3600);
	
	if(empty($_POST['letterpress-color1'])){
      $frontA = $_POST['foil-color1'];
    }      
    else{
		$frontA = "PMS ".$_POST['letterpress-color1'];
	}
	
	if(empty($_POST['letterpress-color2'])){
      $frontB = $_POST['foil-color2'];
    }      
    else{
		$frontB = "PMS ".$_POST['letterpress-color2'];
	}
	
	if(empty($_POST['letterpress-color3'])){
      $frontC = $_POST['foil-color3'];
    }      
    else{
		$frontC = "PMS ".$_POST['letterpress-color3'];
	}
	
	if(empty($_POST['letterpress-color4'])){
      $backA = $_POST['foil-color4'];
    }      
    else{
		$backA = "PMS ".$_POST['letterpress-color4'];
	}
	
	if(empty($_POST['letterpress-color5'])){
      $backB = $_POST['foil-color5'];
    }      
    else{
		$backB = "PMS ".$_POST['letterpress-color5'];
	}
	
	if(empty($_POST['letterpress-color6'])){
      $backC = $_POST['foil-color6'];
    }      
    else{
		$backC = "PMS ".$_POST['letterpress-color6'];
	}
	
	setcookie("front1","",time()-3600);
	setcookie("front2","",time()-3600);
	setcookie("front3","",time()-3600);
	setcookie("back1","",time()-3600);
	setcookie("back2","",time()-3600);
	setcookie("back3","",time()-3600);
	
	setcookie("front1",$frontA,time()+3600);
	setcookie("front2",$frontB,time()+3600);
	setcookie("front3",$frontC,time()+3600);
	setcookie("back1",$backA,time()+3600);
	setcookie("back2",$backB,time()+3600);
	setcookie("back3",$backC,time()+3600);
	
	/*mysql_query("UPDATE tblpreorder SET frontcolor1='$frontA', frontcolor2='$frontB', frontcolor3='$frontC', backcolor1='$backA', backcolor2='$backB', backcolor3='$backC', totalAmount='$total' WHERE id='$id'");*/
	header("location: extras.php");
?>