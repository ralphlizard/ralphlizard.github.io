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
				<h1>L'inconnue</h1>
				<h2>VR Game 2015</h2>
			</div>

			<div id="article">
                
                <iframe width="800" height="450" src="https://www.youtube.com/embed/CTRbigrvY40" frameborder="0" allowfullscreen></iframe>
                <p>
                Horror game made in Unity for Google Cardboard. The player remains stationary at the center of a dark room. A floating robot head wanders the room which becomes visible only when the player's light is cast on it. The player must avoid looking at the head while searching the room for a series of symbols to win the game.</p>
				<p>
				I developed the scripts and Unity implementation. Finalist for the Global Archiact VR Jam.
				</p>
				<img src="Linconnue/image_01.png">
			</div>

			<?php include("Sketch_Grid.php"); ?>


		</div>

		<div id="footer">
		</div>
	</body>
</html>