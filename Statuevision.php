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
				<h1>Statuevision Glasgow</h1>
				<h2>Game 2015</h2>
			</div>

			<div id="article">
				<iframe width="800" height="450" src="https://player.vimeo.com/video/132551116" frameborder="0" allowfullscreen></iframe>
				<p>
				<a href="http://http://statue.vision/projects/glasgow-scottland/">Documentation</a>
				</p>
				<p>
                    Statuevision Glasgow is an interactive installation made in Unity for the AMC Creativity and Cognition Conference 2015 in Glasgow, Scotland. It was made in collaboration with <a href="http://clairesophie.com">Claire Hentschker</a> under the supervision of <a href="http://alimomeni.net">Professor Ali Momeni.</a> The installation was displayed as a diptych projection on the wall of an alternate, virtual Glasgow. Participants were invited to navigate the space using the Leap Motion Controller to manipulate Glasgow's historical statues.</p> 
                    <p>Claire Henschker designed the virtual space and created the 3D scans of the statues, while I implemented the Unity game.
				</p>
			</div>

			<?php include("Grid.php"); ?>


		</div>

		<div id="footer">
		</div>
	</body>
</html>