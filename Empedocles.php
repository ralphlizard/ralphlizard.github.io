<!DOCTYPE html>
<html>
	<head>
		<title>Ralph Kim Art</title>
		<link type="text/css" rel="stylesheet" href="style.css"> <!--this connects to your css style sheet-->
		<script src="http://code.jquery.com/jquery-latest.js"></script> <!--this is for javascript -->
		<script src="app.js"></script>
		<link rel="shortcut icon" href="favicon.ico">
	</head>


	<body>
		<?php include("Header.php"); ?>
		
		<div id="content">

			<?php include("Navbar.php"); ?>

			<div id="article_header">
				<h1>Death of Empedocles</h1>
				<h2>Animation 2015</h2>
			</div>

			<div id="article">
				<iframe width="800" height="450" src="//www.youtube.com/embed/dcwHpWfYH6E" frameborder="0" allowfullscreen></iframe>
				<p>
				Death of Empedocles is a dynamic animation created in collaboration with <a href="https://www.linkedin.com/in/pratikprakash1">Pratik Prakash</a>. Conceived as an installation, the animation is structured to loop indefinitely while reacting dynamically to Twitter trends. </p>
                <p>
                Using the Twitter API, a Java software reads through the past 30 Tweets relating to love or hate to determine which is greater. That data is sent to a Processing program to decide which prerendered animation to play next.
				</p>
				<img src="Empedocles/image_01.png">
			</div>

			<?php include("Grid.php"); ?>


		</div>

		<div id="footer">
		</div>
	</body>
</html>