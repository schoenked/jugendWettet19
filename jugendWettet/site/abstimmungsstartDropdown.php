<?php
	//<a href="#" class="w3-bar-item w3-button">Link 1</a>
	require_once 'connectDB.php';
	$conn = getConnection();
	$sql = 'SELECT Name, Id FROM Spiel';
	$res = 			queryWithConnection($conn,$sql);


	while($row = mysqli_fetch_array($res)) {
		echo '<a href="abstimmungsstart.php?spielID='.$row['Id'].'"  class="w3-bar-item w3-button w3-white w3-hover-black">' . $row['Name']. '</a>';
	}

?>