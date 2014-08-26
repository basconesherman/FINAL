<?php
include('../auth.php');
?>
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
$vbvb=$_GET['id'];
include('../connect.php');
$result = mysql_query("SELECT * FROM tblclients WHERE id='$vbvb'");
while($row = mysql_fetch_array($result))
	{
		$fname=$row['fname'];
		$lname=$row['lname'];
		$email=$row['email'];
		$ship=$row['shipping'];
		$city=$row['city'];
		$state=$row['state'];
		$zip=$row['zip'];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Administrator | Letterpress Business Cards</title>
		<link type="text/css" rel="stylesheet" href="css/admin.css"/>
		<link type="text/css" rel="stylesheet" href="css/table.css"/>
		<!-- Meta tags -->
		<?php include '../lib/meta.php';?>
		<!-- CSS stylesheets -->
		<link rel="stylesheet" href="../css/lbc.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="../css/navbar.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="../css/3cols.css" type="text/css" media="screen" />
		<!-- Javascript files and other animations -->
		<script src="../js/jquery-1.7.2.min.js"></script>
		<script src="js/admin-effect.js"></script>
		<script src="js/application.js"></script>
	</head>
	<body>
		<div class="container">
			<?php include '../lib/header-user.php';?>
			<div id="after-nav"></div>
			<div id="admin-header-left2">
				<h2 class="admin-title">&nbsp Edit Client</h2>
				<?php include 'navbar-admin.php';?>
				<br/><br/><br/><br/>
				<form action="edit_client_final.php" method="post">
					<div id="left">
						&nbsp &nbsp &nbsp &nbsp &nbsp Firstname<br/>
						<input type="text" name="fname" class="form" value="<?php echo $fname;?>"/><br/><br/>
						&nbsp &nbsp &nbsp &nbsp &nbsp Lastname<br/>
						<input type="text" name="lname" class="form" value="<?php echo $lname;?>" /><br/><br/>
						&nbsp &nbsp &nbsp &nbsp &nbsp Email<br/>
						<input type="email" name="email" class="form" value="<?php echo $email;?>" /><br/><br/>
						&nbsp &nbsp &nbsp &nbsp &nbsp Current Password<br/>
						<input type="password" name="current" class="form" /><br/><br/>
						&nbsp &nbsp &nbsp &nbsp &nbsp New Password<br/>
						<input type="password" name="new" class="form" /><br/><br/>
					</div>
					<div id="right">
						&nbsp &nbsp &nbsp &nbsp &nbsp Shipping Address<br/>
						<input type="text" name="ship" class="form" value="<?php echo $ship;?>" /><br/><br/>
						&nbsp &nbsp &nbsp &nbsp &nbsp City<br/>
						<input type="text" name="city" class="form" value="<?php echo $city;?>" /><br/><br/>
						&nbsp &nbsp &nbsp &nbsp &nbsp State<br/>
						<input type="text" name="state" class="form" value="<?php echo $state;?>" /><br/><br/>
						&nbsp &nbsp &nbsp &nbsp &nbsp ZIP Code<br/>
						<input type="text" name="zip" class="form" value="<?php echo $zip;?>" /><br/><br/>
						<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $vbvb ?>" />
						<input id="admin-button" style="margin:15px 0 0 190px;cursor:pointer;" type="submit" value="SUBMIT" />
					</div>
				</form>
			</div>
		</div>
		<div class="container">
			<div id="after-nav"></div>
			<?php include '../lib/footer.php';?>
		</div>
	</body>
</html>