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
				<h1>Peppered Moth Simulation</h1>
				<h2>Processing 2013</h2>
			</div>

			<div id="article">
				<iframe id="evolution" width="628" height="1040" scrolling="no" frameborder="0" src="http://www.openprocessing.org/sketch/116154/embed/?width=600&height=1000&border=true"></iframe>
				<p>
				As its name suggests, Peppered Moth Simulation is a simulation of the evolution of peppered moth programmed in Processing. Each finch consumes a random moth with weighted probability influenced by how much the moth contrasts from its background. Each moth is replace with a new moth with color matching the average of the population with chance for a small mutation.
				</p>
				<p>
				One slider on the top-left controls the playback speed of the simulation, while the other controls the shade of the background such that the user can observe the simulation dynamically affect the population.
	 			</p>
				<iframe width="800" height="450" src="//www.youtube.com/embed/RS7ceQzD3lo" frameborder="0" allowfullscreen></iframe>
			</div>

			<?php include("Sketch_Grid.php"); ?>

		</div>

		<div id="footer">
		</div>
	</body>
</html>