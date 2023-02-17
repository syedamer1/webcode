<?php
$databaseHost = 'localhost';
$databaseName = 'usersdata';
$databaseUsername = 'root';
$databasePassword = ''; 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$result = mysqli_query($mysqli, "INSERT INTO users (name,age,email) VALUES('$name','$age','$email')");

echo "<font color='green'>Data added successfully.";

mysqli_close($mysqli);

?>
