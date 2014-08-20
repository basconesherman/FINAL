<?php
setcookie("mail", "", time()-3600);
?>
<!DOCTYPE html>
<html>
	<title>Letterpress Business Cards | Home/title></title>
	<header>
		<!-- Meta tags -->
		<?php include 'lib/meta.php';?>
		<!-- CSS stylesheets -->
		<link rel="stylesheet" href="css/lbc.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/navbar.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/3cols.css" type="text/css" media="screen" />
		<link type="text/css" rel="stylesheet" href="css/home.css"/>
		<!-- Javascript files and other animations -->
		<script src="js/jquery-1.7.2.min.js"></script>
	</header>
	<body>
		<div class="container">
			<?php include 'lib/header.php';?>
			<?php include 'lib/navigation.php';?>
			<div id="after-nav"></div>
			
			<div id="home" class="content-grid">
				<img id="home-layer-one" src="img/top-img.png" alt="Letterpress Business Card" />
				
				<div id="home-layer-two" class="section group">
					<div id="home-layer-two-one" class="col">
						<img src="img/quick-steps.png" alt="5 Quick Steps" />
					</div>
					<img src="img/shad.png" style="width:760px;height:12px;position:absolute;margin-left:260px;margin-top:10px;opacity:0.9;" />
					<div id="home-layer-two-two" class="col">
						<div id="first" class="img"></div>
						<div id="second" class="img"></div>
						<div id="third" class="img"></div>
						<div id="fourth" class="img"></div>
						<div id="fifth" class="img"></div>
					</div>
				</div>
				
				<div id="home-layer-three" class="section group">
					<div id="home-layer-three-one" class="col">
						<img src="img/steps.png" alt="5 Quick Steps" />
					</div>
					<div id="home-layer-three-two" class="col">
						<p>BE BOLD.</p>
					</div>
					<!--<img id="graphic" src="img/home-grp.png">-->
				</div>
				
				<div id="home-layer-four" class="section group">
					<div id="home-layer-four-one" class="col">
						<img src="img/icon-1.png" alt="Social Media Icon" />
						<img src="img/icon-2.png" alt="Social Media Icon" />
						<img src="img/icon-3.png" alt="Social Media Icon" />
						<img src="img/icon-4.png" alt="Social Media Icon" />
					</div>
					<div id="home-layer-four-two" class="col">
						<img src="img/pic.png" alt="Testimonial" />
					</div>
					<div id="home-layer-four-three" class="col">
						<p>let your cards say something.</p>
					</div>
				</div>
			</div>
			<div id="after-nav"></div>
			<?php include 'lib/footer.php';?>
		</div>
	</body>
</html>