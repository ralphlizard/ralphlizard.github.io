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
				<h1>Flutter</h1>
				<h2>Processing 2013</h2>
			</div>

			<div id="article">
				<iframe width="800" height="450" src="//www.youtube.com/embed/VyOLXTfAdaM" frameborder="0" allowfullscreen></iframe>
				<p>
				Flutter is an interactive program created in Processing using the FaceOSC library and a <a href="http://www.openprocessing.org/sketch/10857">fire particle system</a> availabe at OpenProcessing. The piece poetically interprets how small gestures can cumulatively affect a greater system.
				</p>
				<p>
				The program detects the user's blinking through the computer's camera and disturbs the fire in a small way such that it will grow until it becomes unsustainably large before going out.
				</p>
				<img src="Flutter/image_02.png">
			</div>

			<?php include("Sketch_Grid.php"); ?>


		</div>

		<div id="footer">
		</div>
	</body>
</html>