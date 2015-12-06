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
				<h1>Smiley</h1>
				<h2>Google Chrome Extension</h2>
			</div>

			<div id="article">
				<img src="Resistance/image_1.png">
				<p>
				Smiley is a Chrome Extension created in collaboration with <a href="http://charlottestiles.com">Charlotte Stiles</a>. It uses the open source clmtrackr library to detect and deform faces. When activated, the user can visit any Facebook timeline to see the face displayed in the profile picture (if any) deformed into a smile.
				</p>
                <p>
                The current build is available <a href="https://cmu.box.com/s/7vrk4p1zivjsymaep5085fhcfhx4brw1">here</a>.</p>
			</div>

			<?php include("Sketch_Grid.php"); ?>


		</div>

		<div id="footer">
		</div>
	</body>
</html>