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
				<h1>Parking Lot Theory</h1>
				<h2>Animation 2014</h2>
			</div>

			<div id="article">
			<iframe width="800" height="450" src="//www.youtube.com/embed/6WMCr-_8jTs" frameborder="0" allowfullscreen></iframe>
				<p>
				One minute animation modelled and animated in Autodesk Maya.
				</p>
				<img src="Parking-Lot-Theory/image_05.png">
				<img src="Parking-Lot-Theory/image_06.png">
				<img src="Parking-Lot-Theory/image_07.png">
			</div>

			<?php include("Grid.php"); ?>


		</div>

		<div id="footer">
		</div>
	</body>
</html>