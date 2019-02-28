<?php

function query($stmnt) {
	return queryWithConnection(getConnection(), $stmnt);
}

function queryWithConnection($conn, $stmnt) {
	return mysqli_query($conn, $stmnt);
}

function getConnection() {
	
	$con = mysqli_connect('localhost','jugendWettet','jugendWettet','jugendWettet');
	if (!$con) {
	    die('Could not connect: ' . mysqli_error($con));
	}
	return $con;
}

?>