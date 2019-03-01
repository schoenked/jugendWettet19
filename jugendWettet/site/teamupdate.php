<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/w3.css">
	<title>Jugend Spiel 2019, Team eintragen</title>
</head>
<body class="w3-dark-grey">
<header>
	<a class="w3-button w3-left w3-border" href="index.php">zurück</a>
</header>
<div class="w3-center w3-display-middle">

	<div class="w3-bar w3-white w3-round-xlarge w3-padding ">

	<?php
	/*
	ini_set('display_startup_errors', 1);
	ini_set('display_errors', 1);
	error_reporting(-1);*/
		require_once 'connectDB.php';
		if(!$_GET["teamID"]) {
		} else {
		
			$conn = getConnection();
			$teamID = $conn->real_escape_string($_GET["teamID"]);
			$name1 = $conn->real_escape_string($_GET["name1"]) ;
			$name2 = $conn->real_escape_string($_GET["name2"]);

			$sql=	"UPDATE Team " .
					"SET Name1='$name1', " .
					"    Name2='$name2' " .
					"WHERE ShortID='$teamID'";
			queryWithConnection($conn,$sql);
			if($conn->affected_rows <= 0) {
				echo '<span class="w3-animate-left w3-red w3-padding">Fehler aufgetreten</span>';
			} else {
				echo '<span class="w3-animate-left w3-green w3-padding">Das Team wurde eingetragen</span>';
			}			
		}
	?>
		
		<h1 class="w3-border-bottom w3-border-green">Team eintragen</h1>
		<form action="teamupdate.php">
			<input id="teamID" name="teamID" class="w3-input">Team ID</input>
			<input id="name1" name="name1" class="w3-input">1. Name</input>
			<input id="name2" name="name2" class="w3-input">2. Name</input>
			<br>
			<input class="w3-button w3-btn w3-border w3-border-green w3-round-large w3-margin-top" type="submit" value="eintragen"></input>
		</form>
	</div>
<footer>
</footer>
</body>
</html>