<?php
   $orig = $_POST['code_orig'];
   $code = $_POST['code'];
   
   if($orig == $code){
	   $to = $_POST['email_add'];
	   $subject = "Account Resetting";
	   $message = "<b>To reset your account, follow this </b>";
	   $message .= "<a href='localhost/reset.php?email=".$to."'> link</a>"; /*http://letterpressbusinesscards.com/testing/reset.php?email=".$to."*/
	   $headers = "From:www.letterpressbusinesscards.com \r\n";
	   $headers .= "MIME-Version: 1.0\r\n";
	   $headers .= "Content-type:text/html;charset=UTF-8\r\n";
	   $retval = mail ($to,$subject,$message,$headers);
	   if( $retval == true )
	   {
		  echo "<script>alert('Account reset link has been sent on your email.');</script><br/>";
		  echo "<a href='index.php'>Click to go back</a>";
	   }
	   else
	   {
		  echo "<script>alert('Message could not be send.');</script></br>";
		  echo "<a href='index.php'>Click to go back</a>";
	   }
   }
   else{
	echo "<script>alert('Invalid Captcha Code');</script></br>";
    echo "<a href='index.php'>Click to go back</a>";
   }
?>