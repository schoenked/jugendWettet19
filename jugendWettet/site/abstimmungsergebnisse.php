
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/w3.css">
	<title>Jugend Spiel 2019, Abstimmungsergebnis</title>
	<script src="lib/Chart.js"></script>
</head>
<body class="w3-dark-grey">
<header>
	<a class="w3-button w3-left w3-border" href="index.php">zurück</a>
</header>
<div class="w3-center w3-display-middle">

	<div class="w3-bar w3-white w3-round-xlarge w3-padding ">
	<h1 class="w3-border-bottom w3-border-blue">Abstimmungsergebnis</h1>
	
<?php

	require_once 'connectDB.php';
	$conn = getConnection();
	$spielID = $conn->real_escape_string($_GET["spielID"]);
	$sql = "SELECT Name, 
				Name1, 
				(SELECT Count(Auswahl) 
				 FROM Abstimmung 
				 WHERE SpielID='$spielID' 
					AND Auswahl=1) AS Votes1,
				Name2, 
				(SELECT Count(Auswahl) 
				 FROM Abstimmung 
				 WHERE SpielID='$spielID' 
					AND Auswahl=2) AS Votes2,
				Name3, 
				(SELECT Count(Auswahl) 
				 FROM Abstimmung 
				 WHERE SpielID='$spielID' 
					AND Auswahl=3) AS Votes3,
				Name4,
				(SELECT Count(Auswahl) 
				 FROM Abstimmung 
				 WHERE SpielID='$spielID' 
					AND Auswahl=4) AS Votes4
			FROM Spiel
			WHERE Id='$spielID'";
	$res = queryWithConnection($conn,$sql);
	$row = mysqli_fetch_array($res);
	if($row) {
	echo "<h2>".$row['Name']."</h2>";
	}
	
?>
	<canvas id="myChart" width="800" height="400"></canvas>
		
	<script>
		var ctx = document.getElementById("myChart");
	    var myChart = new Chart(ctx, 
			{
			    type: 'bar',
				data: {
						<?php
						if($row) {

							echo "
							labels: ['".$row["Name1"]."', '".$row["Name2"]."','".$row["Name3"]."','".$row["Name4"]."'],
							datasets: [{
								label: '',
								data: [".$row["Votes1"].",". $row["Votes2"].",". $row["Votes3"].",". $row["Votes4"]."],
							
							";
						}						
						?>
						backgroundColor: [
							'rgba(0, 0, 255, 0.2)',
							'rgba(0, 255, 0, 0.2)',
							'rgba(255, 255, 0, 0.2)',
							'rgba(255, 0, 0, 0.2)'
						]

					}]
				},				
				options: {
				    scales: {
				        yAxes: [{
				            ticks: {
				                beginAtZero:true
				            }
				        }]
				    },

				}
			});
			
	</script>
	</div>
<footer>
</footer>
</body>
</html>