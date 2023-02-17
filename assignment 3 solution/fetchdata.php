<?php
$databaseHost = 'localhost';
$databaseName = 'usersdata';
$databaseUsername = 'root';
$databasePassword = ''; 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Check if the connection was successful
if(!$mysqli) {
    die("Connection error: " . mysqli_connect_error());
}

$query = "SELECT * FROM users"; 
$result = $mysqli->query($query);

$data = array();

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $data[] = $row;
}

// Return the response as JSON
echo json_encode($data);

// Close the connection
mysqli_close($mysqli);
?>
