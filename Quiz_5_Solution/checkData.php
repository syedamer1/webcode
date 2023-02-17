<?php
$databaseHost = 'localhost';
$databaseName = 'quiz_5';
$databaseUsername = 'root';
$databasePassword = ''; 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
$result = mysqli_query($mysqli, "select * from operations");
echo json_encode(mysqli_num_rows($result));
?>