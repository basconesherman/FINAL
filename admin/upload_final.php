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
				<h2 class="admin-title">&nbsp Upload PDF</h2>
				
				<?php include 'navbar-admin.php';?>
				<br/><br/><br/><br/>
				<form action="save_upload.php" method="post" enctype="multipart/form-data">
					<div id="left">
						<input name="filename" type="text" style="display:none;" value="<?php echo $vbvb; ?>"/>
						
						<div id="upload-right" class="col span_1_of_2" style="margin-left:10%;">
							<a href="<?php echo '../upload/'.$vbvb.'.pdf';?>"  target="_blank"><img id="preview-image" src="images/preview.png" alt="Preview"/></a>
							<div id="upload-file-container" class="upload">
							  <strong>Upload Design:</strong> <input id="attach" type="file" name="pdf_document" />
							</div>
						</div>
						<input id="admin-button" name="upload_pdf" style="margin:15px 0 0 220px;cursor:pointer;" type="submit" value="SUBMIT" />
						<br/><br/>
					</div>
					<div id="right">
						
					</div>
				</form>
			</div>
			
			<?php include '../lib/footer.php';?>
		</div>
	</body>
</html>