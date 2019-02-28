<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
<meta charset="UTF-8">
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('daniel-server.ddns.net','jugendWettet','jugendWettet','jugendWettet');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM spiel WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Name</th>
<th>Abstimmung läuft</th>
<th>Spieler A</th>
<th>Spieler B</th>
<th>Spieler C</th>
<th>Spieler D</th>
<th>Ergebnis A</th>
<th>Ergebnis B</th>
<th>Ergebnis C</th>
<th>Ergebnis D</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Abstimmung'] . "</td>";
    echo "<td>" . $row['Spieler A'] . "</td>";
    echo "<td>" . $row['Spieler B'] . "</td>";
    echo "<td>" . $row['Spieler C'] . "</td>";
    echo "<td>" . $row['Spieler D'] . "</td>";
    echo "<td>" . $row['Ergebnis A'] . "</td>";
    echo "<td>" . $row['Ergebnis B'] . "</td>";
    echo "<td>" . $row['Ergebnis C'] . "</td>";
    echo "<td>" . $row['Ergebnis D'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html> 