<!DOCTYPE html>
<html lang="en">
<?php include 'templates/head.php';?>
<body>
	<link rel="stylesheet" type="text/css" href="css/send_contact.css">
	<?php include 'templates/navbar.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$personal_email = file_get_contents('ignore/personal_email.txt');

	$email_message = 'You\'ve recieved a message from ' . $email . "\r\n
		Subject: " . $subject . "\r\n
		Message: \r\n" . $message;

	$email_message = wordwrap($email_message, 70, "\r\n");

	$status = mail($personal_email, 'New Mail from Qumarth.me!', $email_message);

	if ($status) {
		//Web page displayed if the message successfully sent
		echo "<h1 class='col-md-offset-3'>Success!</h1>";
		echo "<h3 class='col-md-offset-3'>The contact form has successfully sent!</h2>";
		echo "<h3 class='col-md-offset-3'>I look forward to hearing from you.</h3>";
	}

	else{
		//Web page displayed if the message has failed to send
		echo "<h1 class='col-md-offset-3'>I'm Sorry</h1>";
		echo "<h3 class='col-md-offset-3'>The contact form has failed to send, I'll get onto fixing this</h2>";
		echo "<h3 class='col-md-offset-3'>In the meantime, please contact me on <a href=https://uk.linkedin.com/in/qmart>LinkedIn</a></h3>";
	}
	?>

</body>
</html>
