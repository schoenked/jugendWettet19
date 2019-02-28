<?php

function query($stmnt) {
	return mysqli_query(getConnection(), $stmnt);
}

function getConnection() {
	
	$con = mysqli_connect('localhost','jugendWettet','jugendWettet','jugendWettet');
	if (!$con) {
	    die('Could not connect: ' . mysqli_error($con));
	}
	return $con;
}

?>