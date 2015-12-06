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
				<h1>The Aleph</h1>
				<h2>2D Animation 2013</h2>
			</div>

			<div id="article">
				<iframe width="800" height="450" src="https://www.youtube.com/embed/64tQJZkpahY" frameborder="0" allowfullscreen></iframe>
				<p>
				Hand-drawn 2D animation. Inspired by "The Aleph" by Jorge Luis Borges.
				</p>
			</div>

			<?php include("Sketch_Grid.php"); ?>


		</div>

		<div id="footer">
		</div>
	</body>
</html>