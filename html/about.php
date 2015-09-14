<!DOCTYPE html>
<html>
 <?php include 'templates/head.php';?>
 <body>
	<?php include 'templates/navbar.php';?>

	<div class="container">
		<div class="row">
			<h1 class="col-md-offset-2 col-md-2">About Me</h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<p id="about-text" class="col-md-offset-2 col-md-8">
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
				I have used a multitude of languages however I am most comfortable with python, and it is my go-to language for scripting.</br>
				</br>
				Listed below is my experience with various technologies. If you would like a copy of my CV, please feel free to
				<a href="qumarth.me/contact">contact me</a>.
				</br>
				</br>
				<small>This website was made by me with help from <a href="http://getbootstrap.com">Bootstrap</a> and
				<a href="http://www.mattboldt.com/demos/typed-js/">Typed.JS</a></small>
			</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			
			<div id="skills" class="col-md-offset-2 col-md-8">
				<h3>I have experience in:</h3>

				<?php

					$skills = array(
						'python' => 90,
						'Linux' => 85,
						'HTML' => 80,
						'Java' => 10,
						'CSS' => 50,
						'JavaScript' => 60,
						'PHP' => 30,
						'C' => 20);

					arsort($skills);


					foreach ($skills as $skill => $value){
						echo "<div class='progress'>";
						echo '<div class="progress-bar" role="progressbar" aria-valuenow="'.$value.'." aria-valuemin="0" aria-valuemax="100" style="width: '.$value.'%;">';
						echo "<samp>$skill $value%</samp>";
						echo "</div>";
						echo "</div>";
					}

				 ?>
				
			</div>
		</div>
	</div>
</body>
</html>