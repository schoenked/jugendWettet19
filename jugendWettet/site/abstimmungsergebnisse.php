<?php
	
	//<a href="#" class="w3-bar-item w3-button">Link 1</a>
	require 'connectDB.php';
	$sql = 'SELECT Name FROM Spiel';
	$res = query($sql);
				echo "asd2f";

	print_r($res);
			echo "asd2f";

	while($row = mysqli_fetch_array($res)) {

		echo '<a href="#" class="w3-bar-item w3-button w3-green">' . $row. '</a>';
			echo "asdf3";

	}

?>