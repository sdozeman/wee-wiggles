<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$formcontent=" From: $name \n Message: $message";
	$recipient = "hello@weewigglesinc.com";
	$subject = "Web form: $subject";
	$mailheader = "From: $email \r\n";

	if ( mail($recipient, $subject, $formcontent, $mailheader) ) {
		echo "<h2>Thank you for your message!</h2>";
	}
	else {
		echo "<h2>Sorry, there has been an error. Please refresh the page and try again.</h2>";
	}
?>
