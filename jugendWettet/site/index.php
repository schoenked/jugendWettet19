<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="css/w3.css">
	<title>Jugend Spiel 2019</title>
</head>
<body class="w3-grey">
<header>
</header>
<div class="w3-content">
	<div class="w3-bar w3-light-green">
		<form>
			<span class="w3-dropdown-hover">
				<button class="w3-button w3-hover-dark-grey">Abstimmungsergebnis</button>
					<span class="w3-dropdown-content w3-bar-block w3-card-4">
						<?php 
							include 'abstimmungsergebnisse.php' ;
						?>
					</span>
			    </span>
			</span>
			<button class="w3-button w3-hover-dark-grey">Team eintragen</button>
			<span class="w3-dropdown-hover">
				<button class="w3-button w3-hover-dark-grey">Abstimmung starten</button>
					<span class="w3-dropdown-content w3-bar-block w3-card-4">
						<?php 
							include 'abstimmungsstart.php' ;
						?>
					</span>
			    </span>
			</span>
		</form>
	</div>
<footer>
</footer>
</body>
</html>