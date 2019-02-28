
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/w3.css">
	<title>Jugend Spiel 2019, Team eintragen</title>
</head>
<body class="w3-dark-grey">
<header>
</header>
<div class="w3-center w3-display-middle">

	<div class="w3-bar w3-white w3-round-xlarge w3-padding ">
	<h1 class="w3-border-bottom w3-border-red">Abstimmung starten</h1>

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