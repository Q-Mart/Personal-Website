<!DOCTYPE html>
<html>
<?php include 'templates/head.php';?>
<body>
	<?php include 'templates/navbar.php';?>

	<!-- Custom Stylesheet -->
    <link href="css/contact.css" rel="stylesheet">

    <div class="mdl-grid">
    	<div class="mdl-cell--2-col"></div>
   		<div class="mdl-cell--9-col">
    		<h1>Contact Me</h1>
    	</div>
    </div>

    <div class="mdl-grid">
    	<div class="mdl-cell--2-col"></div>
   		<div class="mdl-cell--10-col">
    		<h3>Please fill in this form and I will get back to you as soon as possible</h3>
    	</div>
    </div>


	<div id="form" class="mdl-grid mdl-shadow--2dp" >
		<div class="mdl-cell--4-col"></div>
		<div class="mdl-cell--4-col">
			<form  action="send_contact.php" method="post">
				<div class="mdl-textfield mdl-js-textfield">
					<label class="mdl-textfield__label" >Name</label>
					<input class="mdl-textfield__input" name="name" class="form-control" type="text" autofocus="true" required/>
				</div>


				<div class="mdl-textfield mdl-js-textfield">
					<label class="mdl-textfield__label">Email</label>
					<input class="mdl-textfield__input" name="email" class="form-control"  type="text" required/>
				</div>

				<div class="mdl-textfield mdl-js-textfield">
					<label class="mdl-textfield__label">Subject</label>
					<input class="mdl-textfield__input" name="subject" class="form-control" type="text" required/>
				</div>

				<div class="mdl-textfield mdl-js-textfield">
					<label class="mdl-textfield__label">Message</label>
					<textarea class="mdl-textfield__input" rows="6" name="message" class="form-control" type="text" required></textarea>
				</div>

				<div >
					<button id="submit-button" 	class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit"><i class="material-icons">email</i>Send</button>
				</div>
			</form>
		</div>
	</div>

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