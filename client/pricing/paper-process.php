<?php
	setcookie("user", time(), time()+7200);

	$paperOption = $_POST['paper'];
	$paperFront = $_POST['radios'];
	$paperBack = $_POST['radios2'];
	$total = $_POST['paperTotal'];
	
	/*COOKIE SETTING FOR RELOADING VALUES*/
	setcookie("paper_opt","",time()-3600);
	setcookie("paper_f","",time()-3600);
	setcookie("paper_b","",time()-3600);
	setcookie("ply_f", "", time()-3600);
	setcookie("ply_b", "", time()-3600);
	setcookie("price_total", "", time()-3600);
	
	setcookie("paper_opt", $paperOption, time()+3600);
	setcookie("price_total", $total, time()+3600);
	
	if($paperOption == "single-stock"){		
		/*Checking ply number*/
		$plyFront = substr($paperFront,0,1);
		$plyBack = "0";
		
		/*Checking paper name*/
		$first = substr($paperFront,5,1);	
		if($first == 0){$nameFront = substr($paperFront,6,1);}
		else{$nameFront = substr($paperFront,5,2);}
		$nameBack = "0";
		
		/*Array for real paper names*/
		$names = array(
			"Lettra 1 ply white","Lettra 2 ply white","Lettra 1 ply pearl",
			"Lettra 2 ply pearl","Crest 1 ply pearl","Crest 2 ply pearl",
			"CP 1 ply dark grey","CP 1 ply real grey","Arturo 1 ply stone",
			"Kraft 1 ply","CP 1 ply scarlet","Arturo 1 ply rosa",
			"CP 1 ply navy","CP 1 ply mint"
		);
		
		/*Search name*/
		$frontName = $names[$nameFront-1];
		$backName = $nameBack;
	}
	else{
		/*Checking ply number*/
		$plyFront = substr($paperFront,0,1);
		$plyBack = substr($paperBack,0,1);
		
		/*Checking paper name*/
		$first = substr($paperFront,5,1);
		$second = substr($paperBack,5,1);
		
		if($first == 0){$nameFront = substr($paperFront,6,1);}
		else{$nameFront = substr($paperFront,5,2);}
		
		if($second == 0){$nameBack = substr($paperBack,6,1);}
		else{$nameBack = substr($paperBack,5,2);}
		
		/*Array for real paper names*/
		$names = array(
			"Lettra 1 ply white","Lettra 2 ply white","Lettra 1 ply pearl",
			"Lettra 2 ply pearl","Crest 1 ply pearl","Crest 2 ply pearl",
			"CP 1 ply dark grey","CP 1 ply real grey","Arturo 1 ply stone",
			"Kraft 1 ply","CP 1 ply scarlet","Arturo 1 ply rosa",
			"CP 1 ply navy","CP 1 ply mint"
		);
		
		/*Search name*/
		$frontName = $names[$nameFront-1];
		$backName = $names[$nameBack-1];
	}
	/*SET PAPER NAME AND PLY NUMBERS*/
	setcookie("paper_f", $frontName, time()+3600);
	setcookie("paper_b", $backName, time()+3600);
	setcookie("ply_f", $plyFront, time()+3600);
	setcookie("ply_b", $plyBack, time()+3600);
	
	/*COOKIE FOR PAPER MEMORY*/
	setcookie("front", $paperFront, time()+3600);
	setcookie("back", $paperBack, time()+3600);
	
	setcookie("front_num",$_COOKIE['ply_f'],time()+3600);
	setcookie("back_num",$_COOKIE['ply_b'],time()+3600);
	
	/*mysql_query("INSERT INTO tblpreorder (id, papertype, paperfront, paperback, plyfront, plyback, totalAmount)
	VALUES ('$id','$paperOption','$frontName','$backName','$plyFront', '$plyBack', '$total')");*/
	header("location: size.php");
?>