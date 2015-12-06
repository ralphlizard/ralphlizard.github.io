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
				<h1>Trending</h1>
				<h2>Game 2015</h2>
			</div>

			<div id="article">
				<img src="Trending/image_01.png"/>
                <p><a href="Trending-Player.php">Click here to play on browser.</a></p>
				<p>
				Trending is a puzzle game in which the player strategically places and activates pieces on the board. Different pieces have different patterns by which it activates other pieces, leading to a chain reaction that can activates all pieces on the board.
				</p>
                <p>
                The aim of the project was to modify as well as improve upon the mechanics of Sudoku. I took on the role of technical artist and designer. I opted for a clean, minimalistic art style to reference contemporary social media as a thematic frame. The design principles were aimed to emulate the satisfaction of a snowballing solution in a Sudoku puzzle, while removing the frustration and backtracking required when the player makes a small mistake. </p>
                <p>
                To curb frustration, the mechanics of each piece as well as the levels were designed to allow for more than one solution, while maintaining at least one perfect solution so that the player would have the option of challenging themselves further.</p>
			</div>

			<?php include("Grid.php"); ?>


		</div>

		<div id="footer">
		</div>
	</body>
</html>