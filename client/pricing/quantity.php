<!DOCTYPE html>
<?php
		/*$ply1 = $row['plyfront'];
		$ply2 = $row['plyback'];*/
		$type = $_COOKIE['paper_opt'];
?>
<html>
	<head>
		<title>Pricing & Ordering | Letterpress Business Cards</title>
		<?php include 'library/imports1.php';?>
		<?php include '../js/quantity_calcu.php';?>
		<link type="text/css" rel="stylesheet" href="css/pricing.css"/>
		<link type="text/css" rel="stylesheet" href="css/paper.css"/>
	</head>
	
	<body>
		<div class="container">
			<?php include '../lib/header-pricing.php';?>
			<?php include '../lib/nav-price.php';?>
			<div class="content-grid">
				<div class="title">
					<p id="title">PRICING <span> & </span> ORDERING</p>
					<p id="sub-title">LET'S GET YOUR DESIGN ON</p>
				</div>
				<div id="tabs">
					<ul>
						<a href="index.php"><li><img src="images/pricing-1.png"></li></a>
						<a href="size.php"><li><img src="images/pricing-2.png"></li></a>
						<a href="quantity.php"><li><img src="images/pricing-3-active.png"></li></a>
						<a href="color.php"><li><img src="images/pricing-4.png"></li></a>
						<a href="extras.php"><li><img src="images/pricing-5.png"></li></a>
						<a href="upload.php"><li><img src="images/pricing-6.png"></li></a>
						<li id="total"><center><p id="totalValue">$<?php echo $_COOKIE['price_total'];?>.00</p></center></li>
					</ul>
				</div>
			</div>
			<div id="paper-box">
				<br/><br/>
				<form action="quantity-process.php" method="post">
					<input id="paperTotal" name="paperTotal" style="display:;">
					<div class="content-grid">
						<input type="radio" id="standard" name="size" value="all" checked>
						<label class="size" for="standard">
							<div>
								<h2 class="text-option">SELECT YOUR QUANTITY</h2>
							</div>
						</label>
						
						<div id="quantity-box">
							<div id="quantity1" class="quantity-boxes">
								<h2 id="quant4" class="selected" data-key4="100">
									100
								</h2>
							</div>
							<div id="quantity2" class="quantity-boxes">
								<h2 id="quant5" data-key5="250">
									250
								</h2>
							</div>
							<div id="quantity3" class="quantity-boxes">
								<h2 id="quant6" data-key6="500">
									500
								</h2>
							</div>
							<div id="quantity4" class="quantity-boxes">
								<h2 id="quant7" data-key7="1000">
									1000
								</h2>
							</div>
						</div>
					</div>
					<br/><br/>
					<input style="display:none;" id="quantityValue" type="text" name="quantity" value="100"/>
			</div>
			<script type="text/javascript">
				$(document).ready(function(){				
					for(var j = 4; j <= 7; j++){
						var datakey = $("#quant"+j).data("key"+j);
						if ( datakey == "<?php echo $_COOKIE['quantity'];?>" ) {
							$( "#quant"+j ).addClass( "selected", -1000);
							$('#quantityValue').val(datakey);
						}
						else{
							$( "#quant"+j ).removeClass("selected");
						}
					}
				});
			</script>
			<br/><br/>
			<div class="content-grid">
					<a style="display:absolute;margin-top:20px;" href="size.php"><img src="images/prev-btn.png"></a>
					<input id="size-submit" type="submit" value="" />
				</div>
			</form>
			<img class="quote" style="margin-left:217px;" src="images/quantity-quote.png" width="539px" height="81px">
			<?php include '../lib/footer.php';?>
		</div>
	</body>
</html>