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
				<h1>Shut-In</h1>
				<h2>Android Game (Unity) 2014</h2>
			</div>

			<div id="article">
				<iframe width="800" height="450" src="//www.youtube.com/embed/54mvZnyDz2o" frameborder="0" allowfullscreen></iframe>
				<p><a href="Shut-In-Player.php">Click here to play on browser.</a></p>
                <p><a href="https://cmu.box.com/s/p94a4eibkq0hvi2x6mr1jw5q2r38ogds">Click here to download.</a></p>
				<p><span>Windows, Mac, and Android versions available. GPS functionality enabled only for Android.</span></p>
				<p>
				Shut-In is a GPS-enabled experimental adventure game designed for the Android phone, in which the player interacts with the environment to escape a series of rooms on a journey interact with the wider world. 
				</p>
				<p>
				Escaping each room requires both solving a unique puzzle and moving through real space, which is measured by the phone's built-in GPS tracker. Solutions included with download.
				</p>
				<img src="Shut-In/image_01.png">
				<img src="Shut-In/image_02.png">
			</div>

			<?php include("Grid.php"); ?>


		</div>

		<div id="footer">
		</div>
	</body>
</html>