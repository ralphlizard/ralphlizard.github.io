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
				<h1>Famished Times</h1>
				<h2>Acrylic Painting 2011</h2>
			</div>

			<div id="article">
				<img src="Famine/image_01.png"/>
				<p>
				Acrylic paint on canvas, 30" x 40". Winner of Scholastic Art and Writing National Gold Medal (highest honor) - displayed at Carnegie Hall. Image inspired by 2009 Samoa Tsunami.
				</p>
			</div>

			<?php include("Sketch_Grid.php"); ?>


		</div>

		<div id="footer">
		</div>
	</body>
</html>