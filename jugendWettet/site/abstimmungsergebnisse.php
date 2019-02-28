<?php
	//<a href="#" class="w3-bar-item w3-button">Link 1</a>
	require 'connectDB.php';
	$sql = 'SELECT Name FROM Spiel';
	$res = query($sql);

	while($row = mysqli_fetch_array($res)) {
		echo '<a href="#" class="w3-bar-item w3-button w3-dark-green w3-hover-white">' . $row['Name']. '</a>';
	}

?>