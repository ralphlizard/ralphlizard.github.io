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
		<div>fjaois</div>
		<?php
$dataFile = "visitors.txt";

$sessionTime = 30; //this is the time in **minutes** to consider someone online before removing them from our file
echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";

//Please do not edit bellow this line


error_reporting(E_ERROR | E_PARSE);

if(!file_exists($dataFile)) {
	$fp = fopen($dataFile, "w+");
	fclose($fp);
}

$ip = $_SERVER['REMOTE_ADDR'];
$users = array();
$onusers = array();

//getting
$fp = fopen($dataFile, "r");
flock($fp, LOCK_SH);
while(!feof($fp)) {
	$users[] = rtrim(fgets($fp, 32));
}
flock($fp, LOCK_UN);
fclose($fp);


//cleaning
$x = 0;
$alreadyIn = FALSE;
foreach($users as $key => $data) {
	list( , $lastvisit) = explode("|", $data);
	if(time() - $lastvisit >= $sessionTime * 60) {
		$users[$x] = "";
	} else {
		if(strpos($data, $ip) !== FALSE) {
			$alreadyIn = TRUE;
			$users[$x] = "$ip|" . time(); //updating
		}
	}
	$x++;
}

if($alreadyIn == FALSE) {
	$users[] = "$ip|" . time();
}

//writing
$fp = fopen($dataFile, "w+");
flock($fp, LOCK_EX);
$i = 0;
foreach($users as $single) {
	if($single != "") {
		fwrite($fp, $single . "\r\n");
		$i++;
	}
}
flock($fp, LOCK_UN);
fclose($fp);

if($uo_keepquiet != TRUE) {
	echo '<div style="padding:5px; margin:auto; background-color:#fff"><b>' . $i . ' visitors online</b></div>';
}

?>

	</body>
</html>