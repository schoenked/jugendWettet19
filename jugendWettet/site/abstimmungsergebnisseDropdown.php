<?php
	//<a href="#" class="w3-bar-item w3-button">Link 1</a>
	require_once 'connectDB.php';
	$sql = 'SELECT Name, SpielID FROM Spiel';
	$res = query($sql);

	while($row = mysqli_fetch_array($res)) {
		echo '<a href="abstimmungsergebnisse?spielID='.$row['SpielID'].'" class="w3-bar-item w3-button w3-white w3-hover-black">' . $row['Name']. '</a>';
	}

?>