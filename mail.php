<?php
	$name = $_POST['c-name'];
	$email = $_POST['c-email'];
	$subject = $_POST['c-subject'];
	$message = $_POST['c-message'];

	$formcontent=" From: $name \n Message: $message";
	$recipient = "jacquelinespins@gmail.com";
	$subject = "Web form: $subject";
	$mailheader = "From: $email \r\n";

	if ( mail($recipient, $subject, $formcontent, $mailheader) ) {
		echo "<h2>Thank you for your message!</h2>";
	}
	else {
		echo "<h2>Sorry, there has been an error.</h2>";
	}
?>
