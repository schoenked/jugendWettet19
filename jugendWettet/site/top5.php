<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/w3.css">
	<title>Jugend Spiel 2019, Top 5 Teams</title>
</head>
<body class="w3-dark-grey">
<header>
	<a class="w3-button w3-left w3-border" href="index.php">zurück</a>
</header>
<div class="w3-center w3-display-middle">

	<div class="w3-bar w3-white w3-round-xlarge w3-padding ">
	
		<h1 class="w3-border-bottom w3-border-green">Team eintragen</h1>
	
		<?php
		/*
		ini_set('display_startup_errors', 1);
		ini_set('display_errors', 1);
		error_reporting(-1);*/
			require_once 'connectDB.php';
			
			$sql=	"SELECT * 
					 FROM Team
					 LIMIT 5";
			$res = query($sql);
			print_r($res);
			//TODO	Tabelle erstellen , Query schreiben, in For Schleife die 5 Teams eintragen
			
		?>
	</div>
<footer>
</footer>
</body>
</html>