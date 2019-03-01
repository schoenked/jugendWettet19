<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/w3.css">
	<title>Jugend Spiel 2019, Abstimmung starten</title>
	<script src="lib/Chart.js"></script>
</head>
<body class="w3-dark-grey">
<header>
	<a class="w3-button w3-left w3-border" href="index.php">zurück</a>
</header>
<div class="w3-center w3-display-middle">

	<div class="w3-bar w3-white w3-round-xlarge w3-padding ">
		<h1 class="w3-border-bottom w3-border-red">Abstimmung starten</h1>
		<div>
		<div class="w3-left">
<?php

	require_once 'connectDB.php';
	$conn = getConnection();
	$spielID = $conn->real_escape_string($_GET["spielID"]);
	$sql = "SELECT Name, Name1, Name2, Name3, Name4
			FROM Spiel
			WHERE Id='$spielID'";
	$res = queryWithConnection($conn,$sql);
	$game = mysqli_fetch_array($res);
	
	$name = $game['Name'];

	$name1 = $game['Name1'];
	$name2 = $game['Name2'];
	$name3 = $game['Name3'];
	$name4 = $game['Name4'];
	echo "<h2>$name</h2>";
	echo "<div class='w3-light-blue'>$name1</div>";
	echo "<div class='w3-pale-blue'>$name2</div>";
	echo "<div class='w3-light-blue'>$name3</div>";
	echo "<div class='w3-pale-blue'>$name4</div>";
?>
		</div>
		<div id="clockwindow" class="w3-right w3-padding-32">
		<button onclick="start()" class="w3-button w3-btn w3-card w3-hover-white w3-border w3-text-green w3-border-green w3-round-xxlarge w3-padding-32">
		⏵<br>
		START
		</button>

		<script>

		var prog;
		var progText;
		function start() {
			document.getElementById('clockwindow').firstElementChild.remove();
			prog = document.createElement('progress');
			progText = document.createElement('div');
			prog.className ='w3-border-red';
			prog.max=30;
			prog.value=30;
			progText.innerText = prog.value + " s verbleibend";
			window.setInterval(timing, 1000);

			document.getElementById('clockwindow').appendChild(prog);
			document.getElementById('clockwindow').appendChild(progText);
			}

			function timing(){
				prog.value=	prog.value-1;
				progText.innerText = prog.value + " s verbleibend";
			}
		</script>
				
		</div>
		</div>
	</div>
</div>
<footer>
</footer>
</body>
</html>