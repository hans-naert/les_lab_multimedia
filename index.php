<?php
$mysqli = new mysqli('localhost', 'pi', 'raspberry', 'temperature');
if ($mysqli->connect_error) {
die('Connect Error (' . $mysqli->connect_errno . ') '
. $mysqli->connect_error);
}
?>

<?php
$reeks=array();
$result = $mysqli->query("SELECT * FROM temperature");
while($row = $result->fetch_assoc()){
array_push($reeks, $row["TEMP"]);
print $row["TEMP"]."</br>";
}
echo json_encode($reeks);
?>

<?php
$mysqli->close();
?>

