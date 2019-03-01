
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/w3.css">
	<title>Jugend Spiel 2019, Abstimmungsergebnis</title>
	<script src="lib/Chart.js" />
</head>
<body class="w3-dark-grey">
<header>
	<a class="w3-button w3-left w3-border" href="index.php">zurück</a>
</header>
<div class="w3-center w3-display-middle">

	<div class="w3-bar w3-white w3-round-xlarge w3-padding ">
	<h1 class="w3-border-bottom w3-border-blue">Abstimmungsergebnis</h1>
	
	<canvasid="myChart" width="800" height="500"></canvas>
	<script>
		var ctx = document.getElementById("myChart");
	    var myChart = new Chart(ctx, 
			{
				data: {
					labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
					datasets: [{
					}]
				}
			});

	</script>
<?php

	require_once 'connectDB.php';
	$conn = getConnection();
	$spielID = $conn->real_escape_string($_GET["spielID"]);
	$sql = "SELECT Name, Name1, Name2, Name3, Name4
			FROM Spiel
			WHERE Id='$spielID'";
	$res = queryWithConnection($conn,$sql);
	
	while($row = mysqli_fetch_array($res)) {
	}
?>

	</div>
<footer>
</footer>
</body>
</html>