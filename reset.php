<?php
	
	$email = $_GET['email'];
	
	include 'connect.php';
	$result = mysql_query("SELECT * FROM tblclients WHERE email='$email'");
	while($row = mysql_fetch_array($result))
	{
		$fname=$row['fname'];
		$lname=$row['lname'];
		$email=$row['email'];
		$ship=$row['password'];
		$id=$row['id'];
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Administrator | Letterpress Business Cards</title>
		<link type="text/css" rel="stylesheet" href="admin/css/admin.css"/>
		<link type="text/css" rel="stylesheet" href="admin/css/table.css"/>
		<link type="text/css" rel="stylesheet" href="css/lbc.css"/>
		<link rel="stylesheet" href="css/navbar.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/3cols.css" type="text/css" media="screen" />
		<script src="js/jquery-1.7.2.min.js"></script>
	<body>
		<div class="container">
			<?php include 'lib/header.php';?>
			<?php include 'lib/navigation.php';?>
			<div id="after-nav"></div>
			<div id="admin-header-left2">
				<h2 class="admin-title">&nbsp Reset Account</h2>
				<br/><br/><br/><br/>
				<form action="reset_final.php" method="post">
					<div id="left">
						&nbsp &nbsp &nbsp &nbsp &nbsp New Email<br/>
						<input type="email" name="email" class="form" value="<?php echo $email;?>" /><br/><br/>
						&nbsp &nbsp &nbsp &nbsp &nbsp New Password<br/>
						<input type="password" name="new" class="form" /><br/><br/>
						<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $id ?>" />
						<input id="admin-button" style="margin:15px 0 0 233px;cursor:pointer;" type="submit" value="SUBMIT" />
						<br/><br/><br/>
					</div>
					<div id="right">
						
					</div>
				</form>
			</div>
		</div>
	</body>
</html>