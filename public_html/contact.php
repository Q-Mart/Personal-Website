<!DOCTYPE html>
<html>
<?php include 'templates/head.php';?>
<body>
	<?php include 'templates/navbar.php';?>

	<!-- Custom Stylesheet -->
    <link href="css/contact.css" rel="stylesheet">

    <h1 class="heading col-md-offset-3">Contact Me</h1>
    <h3 class="heading col-md-offset-3">Please fill in this form and I will get back to you as soon as possible</h3>

    </br>

	<div>
		<form  class="form-horizontal" action="send_contact.php" method="post">

			<div class="form-group">
				<div class="col-md-6 col-md-offset-3">
					<label class="sr-only">Name</label>
					<input name="name" class="form-control" placeholder="Name" type="text" aria-describedby="basic-addon1" autofocus="true" required/>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-6 col-md-offset-3">
					<label class="sr-only">Email</label>
					<input name="email" class="form-control" placeholder="Email" type="text" aria-describedby="basic-addon1" required/>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-6 col-md-offset-3">
					<label class="sr-only">Subject</label>
					<input name="subject" class="form-control" placeholder="Subject" type="text" aria-describedby="basic-addon1" required/>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-6 col-md-offset-3">
					<label class="sr-only">Message</label>
					<textarea name="message" placeholder="Message" class="form-control" type="text" aria-describedby="basic-addon1" required></textarea>
				</div>
			</div>

			<div class="col-md-1 col-md-offset-3">
				<button id="submit-button" 	class="btn btn-deafult" type="submit"><span class="glyphicon glyphicon-send" aria-hidden="true"> Send</span></button>
			</div>
		</form>
	</div>
</body>
</html>