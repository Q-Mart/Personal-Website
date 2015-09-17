<!DOCTYPE html>
<html lang="en">
<?php include 'templates/head.php';?>
<body>
	<link rel="stylesheet" type="text/css" href="css/send_contact.css">

	<?php include 'templates/navbar.php';?>

	</br>
	</br>
	</br>

	<div class="mdl-grid">
		<div class="mdl-cell--5-col"></div>
		<div class="mdl-cell--1-col">
			<div id='card' class='mdl-card'>


	<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$personal_email = file_get_contents('ignore/personal_email.txt');

	$email_message = 'You\'ve recieved a message from ' . $name . "\r\n
		Email:" . $email . "\r\n
		Message: \r\n" . $message;

	$email_message = wordwrap($email_message, 70, "\r\n");

	$status = mail($personal_email, 'New Mail from Qumarth.me! Subject: ' . $subject, $email_message);

	if ($status) {
		//Web page displayed if the message successfully sent
		echo "<div class='mdl-card__title'><h2 class='mdl-card__title-text'>Success</h2></div>";
		echo "<div class='mdl-card__supporting-text'>The contact form has successfully sent.</br>
		I look forward to getting in contact with you.</div>";
	}

	else{
		//Web page displayed if the message has failed to send
		echo "<div class='mdl-card__title'><h2 class='mdl-card__title-text'>I'm Sorry</h2></div>";
		echo "<div class='mdl-card__supporting-text'>The contact form has failed to send.</br>
		In the meantime, please contact me on LinkedIn.</div>";
		echo "  <div class='mdl-card__actions'> <a href='https://uk.linkedin.com/in/qmart'>LinkedIn</a></div>";
	}
	?>
	</div>
	</div>
	</div>
	</br>
	</br>
	</br>
	</br>
	</br>
<?php
	include 'templates/footer.php';
	include 'templates/end_body.php';
?>
</body>
</html>
