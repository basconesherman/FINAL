<!DOCTYPE html>
<html>
	<head>
		<title>Contact | Letterpress Business Cards</title>
		<!-- Meta tags -->
		<?php include 'lib/meta.php';?>
		<!-- CSS stylesheets -->
		<link rel="stylesheet" href="css/lbc.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/navbar.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/3cols.css" type="text/css" media="screen" />
		<link type="text/css" rel="stylesheet" href="css/contact.css"/>
		<!-- Javascript files and other animations -->
		<script src="js/jquery-1.7.2.min.js"></script>
	</head>
	<body>
		<div class="container">
			<?php include 'lib/header.php';?>
			<?php include 'lib/navigation.php';?>
			<div id="after-nav"></div>
			<div id="contact-grid">
				<div id="contact-left" class="col">
					<div class="title">
						<p id="title" style="text-align:left;margin-left:130px;">CONTACT US</p>
						<p id="contact-sub-title" style="text-align:left;margin-left:95px;">Let's get in touch!</p>
						<p id="text">
							Unsure about how our process works? Have questions about your specific design? Just want to talk to a real person and get to &nbsp know &nbsp us a little better? We always love &nbsp to hear from you! Please don't hesitate to contact us by submitting the form at right or by one of the methods below. To send a file attachment, just upload directly to the form. We will always reply within 24-48 hours (M-F)
						</p>
					</div>
					<img class="banner" src="img/send-email.png" alt="Contact Banner" />
					<p class="text1">FOR GENERAL INQUIRIES OR QUESTIONS:</p>
					<p class="text2">hello@letterpressbusinesscards.com</p>
					<p class="text1">FOR QUESTIONS REGARDING SAMPLES: </p>
					<p class="text2">sample@letterpressbusinesscards.com</p>
					
					<img class="banner" src="img/ring-us.png" alt="Contact Banner" />
					<p class="text1" style="margin-left:180px;">(510) 520-6749</p>
					
					<img class="banner" src="img/snail-mail.png" alt="Contact Banner" />
					<p class="text2"><br/><br/>1514 Park Avenue<br/>Emeryville, California 94608</p>
					<p id="text3">Ready to start an order and get the show on the road? The easiest and <br/> quickest way to visit our Pricing & Ordering page HERE.</p>
				</div>
				<div id="contact-right" class="col">
					<form action="#" method="post">
						<div class="col form-layer-one">
							<span>First Name</span>
							<input name="fname" type="text"/>
						</div>
						<div class="col form-layer-one">
							<span>Last Name</span>
							<input name="lname" type="text"/>
						</div>
						
						<div class="col form-layer-two">
							<span>Email Address</span>
							<input name="email" type="email"/>
						</div>
						
						<div class="col form-layer-three">
							<span>Message</span>
							<textarea name="msg"></textarea>
						</div>
						
						<div id="upload-file-container" class="col form-layer-four">
						  <strong>Attachment:</strong> <input id="attach" type="file" name="photo" />
						</div>
						
						<input id="submit" type="submit" value="" />
					</form>
				</div>
			</div>
		</div>
		<div class="container">
			<div id="after-nav"></div>
			<?php include 'lib/footer.php';?>
		</div>
	</body>
</html>