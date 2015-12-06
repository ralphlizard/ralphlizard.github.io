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
				<h1>Drone Tracking</h1>
				<h2>Software 2015</h2>
			</div>

			<div id="article">
				<img src="Drone/image_01.png">
				<p>
				<a href="https://docs.google.com/presentation/d/1AIa2y5DeZClkpIosLk6njLB60a2rZnhI-ZJ-uk-TTb4/edit#slide=id.p">Documentation.</a>
				</p>
				<p>
                    Created in collaboration with <a href="http://www.begolag.com">Zach Rispoli</a> under the supervision of <a href="http://alimomeni.net">Professor Ali Momeni.</a> The drone tracker is an app created in OpenFrameworks using the ARToolKitPlus, OpenCV, and ofxLearn addons. It utilizes machine vision to track and analyze a collection of fiducial markers and outputting the data into XML format. The tool was created as a physical, collaborative interface for recording choreography, such that the output data can be used to control a set of drones. 
                    </p><p>The function and altitude controls were implemented by Zach Rispoli, while I implemented the fiducial tracking and output functionality.
				</p>
			</div>

			<?php include("Grid.php"); ?>


		</div>

		<div id="footer">
		</div>
	</body>
</html>