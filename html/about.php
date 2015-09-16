<!DOCTYPE html>
<html>
 <?php include 'templates/head.php';?>
 <body>
	<?php include 'templates/navbar.php';?>

	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--1-col"></div>
		<div class="mdl-cell mdl-cell--4-col">
				<h1 class="">About Me</h1>
		</div>
	</div>

	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--1-col"></div>
		<div class="mdl-cell mdl-cell--8-col">
			<p id="about-text">
				Hello, my name is Qumarth Jash and I study Computer Science with Embedded Systems Engineering at the University of York, 
				completing my first year with a first.</br>

				</br>
				In my spare time, I like to rock climb, perform stand up comedy and, of course, write code.</br>
				</br>
				I am currently the Computing Officer for <a href="ury.org.uk">University Radio York</a>, where I help
				with the construction and maintenance of in-house software systems. I also assist with the technical setup of 
				Outdoor Broadcasts, were the station covers an event by broadcasting externally.</br>
				</br>
				As well as this, I present my own radio show.</br>
				</br>
				Throughout August 2015, I performed in a <a href="http://www.nouse.co.uk/2015/08/15/edinburgh-fringe-2015-review-present-and-correct/">sketch show at the Edinburgh Fringe.</a></br>
				</br>
				I have used a multitude of languages however I am most comfortable with python, and it is my go-to language for scripting.</br>
				</br>
				Listed below is my experience with various technologies. If you would like a copy of my CV, please feel free to
				<a href="qumarth.me/contact.php">contact me</a>.
				</br>
			</p>
		</div>
	</div>

	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--1-col"></div>
			<div class="mdl-cell mdl-cell--4-col">
				<div class="mdl-card mdl-shadow--2dp">
				  <div class="mdl-card__title">
				  	<h2 class="mdl-card__title-text">I have experience in:</h2>
				  </div>

				  <div class="mdl-card__supporting-text">
				  	<ul>

				  <?php

					$skills = array(
						'python',
						'Linux',
						'HTML',
						'Java',
						'CSS',
						'JavaScript',
						'PHP',
						'C');


					foreach ($skills as $skill){
						echo "<li><code>$skill</code></li>";
					}

				 ?>
				 	</ul>
				  
				  </div>

				</div>

				
				
			</div>
		</div>
	<?php 
	include 'templates/footer.php';
	include 'templates/end_body.php'
	?>
</body>
</html>
