<link rel="stylesheet" href="../css/header.css" type="text/css" media="screen" />
<!-- Add fancyBox -->
<link rel="stylesheet" href="../js/fancy/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../css/3cols.css" type="text/css" media="screen" />
<script type="text/javascript" src="../js/fancy/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="../js/fancy/jquery.fancybox.js"></script>

<div class="section group">
	<div class="header">
		<div id="signin" class="col">
			<img id="visible-login" src="../img/key.png" alt="key-login-button" />
			<div id="hidden-login">
				<div id="space"></div>
				<form class="login-form" action="../login.php" method="post">
					<strong style="margin-left:49px;" class="login-label">Email</strong><input id="mail" type="email" name="user-email" />
					<br/>
					<strong style="margin-left:15px;" class="login-label">Password</strong><input id="mail" type="password" name="user-pass" />
					<a href="#forgot-details" class="fancybox"><p class="forgot">forgot username / password</p></a>
					<input class="login-button" type="submit" value=""/>
					<a href="#login-form-page" class="fancybox"><p class="create">CREATE ACCOUNT</p></a>
					<img id="key1" src="../img/key1.png" alt="key" />
				</form>
			</div>
		</div>
		<div class="col logo">
			<a href="index.php"><img src="../img/main_logo.png" alt="Letterpress Business Cards" /></a>
		</div>
		<div class="col hidden-div"></div>
	</div>
</div>

<!-- HIDDEN DIVS -->
<?php
	$captcha = rand(10000,99999);
?>
<div id="forgot-details" style="display:none;width:100%;">
	<h2 class="small center">Forgot Username/Password</h2>
	<form method="post" action="../forgot.php">
	<input name="code_orig" type="text" value="<?php echo $captcha;?>" style="display:none;" />
	<div class="section group">
		<div class="col span_1_of_3">
			<h2 class="desc2 right">CAPTCHA:</h2>
		</div>
		<div class="col span_2_of_3">
			<p class="center input2" style="padding-top:7px;padding-right:10px;"><?php echo $captcha;?></p>
		</div>
	</div>
	
	<div class="section group">
		<div class="col span_1_of_3">
			<h2 class="desc2 right">Enter Code:</h2>
		</div>
		<div class="col span_2_of_3">
			<input type="text" id="code" class="input2" name="code"/>
		</div>
	</div>
	
	<div class="section group">
		<div class="col span_1_of_3">
			<h2 class="desc2 right">Email:</h2>
		</div>
		<div class="col span_2_of_3">
			<input type="email" id="email_add" class="input2" name="email_add"/>
		</div>
	</div>
	<input id="submit2" type="submit" value="SUBMIT" />
	</form>
</div>

<div id="login-form-page" style="display:none;">
	<h2 class="small center">Create Account</h2>
	<div id="line"></div>
	<form action="../add_user_final.php" method="post">
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">First Name:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="text" id="fn" class="input2" name="fn"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">Last Name:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="text" id="ln" class="input2" name="ln"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">Email:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="email" id="email" class="input2" name="email"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">Address Line 1:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="text" id="addr1" class="input2" name="addr1"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">Address Line 2:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="text" id="addr2" class="input2" name="addr2"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">Address Line 3:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="text" id="addr3" class="input2" name="addr3"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">City:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="text" id="city" class="input2" name="city"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">State:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="text" id="state" class="input2" name="state"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">ZIP Code:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="text" id="zip" class="input2" name="zip"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">Password:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="password" id="pass1" class="input2" name="pass1"/>
			</div>
		</div>
		<div class="section group">
			<div class="col span_1_of_3">
				<h2 class="desc2 right">Retype Password:</h2>
			</div>
			<div class="col span_2_of_3">
				<input type="password" id="pass2" class="input2" name="pass2"/>
			</div>
		</div>
		<input id="submit2" type="submit" value="CREATE ACCOUNT"/>
	</form>
</div>
<!-- Login Animaion -->
<script> 
$(document).ready(function(){
	$("#visible-login").click(function(){
		$(".logo").css({"margin-left":"100px"});
		$("#visible-login").slideToggle("fast");
		$("#visible-content").slideToggle("fast");
		$("#hidden-login").slideToggle("fast");
	});
	$("#key1").click(function(){
		$("#hidden-login").slideUp("fast");
		$("#visible-login").delay(200).fadeIn("slow");
		$("#visible-content").slideToggle("fast");
		
	});
});
</script>

<!-- Fancy Box -->
<script type="text/javascript">
   $(document).ready(function() {
	$(".fancybox").fancybox({
		helpers : {
        overlay : {
            css : {
                'background' : '#58595B, 0.60'
            }
        }
    }
	});
});
</script>