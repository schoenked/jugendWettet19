<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/w3.css">
	<title>Jugend Spiel 2019</title>
</head>
<body class="w3-dark-grey">
<header>
</header>
<div class="w3-display-middle">

	<div class="w3-bar w3-white w3-round-xlarge w3-padding ">
			<span class="w3-left">
				<a class="w3-button w3-hover-dark-grey w3-border w3-border-green w3 w3-round-large" href=teamupdate.php>Team eintragen</a>
			</span>
			<span class="w3-dropdown-hover ">
				<button class="w3-button w3-hover-dark-grey w3-border w3-border-red w3 w3-round-large">Abstimmung starten</button>
					<span class="w3-dropdown-content w3-bar-block w3-card-4">
						<?php 
							include 'abstimmungsstart.php' ;
						?>
					</span>
			    </span>
			</span>
			
			<span class="w3-dropdown-hover">
				<button class="w3-button w3-hover-dark-grey w3-border w3-border-blue w3-round-large">Abstimmungsergebnis</button>
					<span class="w3-dropdown-content w3-bar-block w3-card-4">
						<?php 
							include 'abstimmungsergebnisse.php' ;
						?>
					</span>
			    </span>
			</span>
			
			<span class="w3-dropdown-hover">
				<button class="w3-button w3-hover-dark-grey w3-border w3-border-yellow w3-round-large">TOP 5 Teams</button>
					<span class="w3-dropdown-content w3-bar-block w3-card-4">
						<?php 
							include 'top5.php' ;
						?>
					</span>
			    </span>
			</span>
	</div>
<footer>
</footer>
</body>
</html>