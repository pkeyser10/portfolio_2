<?php 
	ini_set( 'display_errors', 1 );
	error_reporting( E_ALL );
	$from = "admin@peterkeyser.ca";
	$to = "peterkeyser1@gmail.com";
	$subject = "Checking PHP mail";
	$message = "PHP mail is working";
	$headers = "From:" . $from;
	mail ($to,$subject,$message,$headers);
	echo "The email was sent.";
?>
