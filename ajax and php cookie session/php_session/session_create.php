<?php
// Start the session
session_start();
//syntax for accessing all the session varaibles
//var_dump($_SESSION);
//die();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";

echo "Session variables are set.";
?>
<p> Click here to read the session <a href="session_read.php">Read</a></p>
<p> Click here to delete the session <a href="session_delete.php">Delete</a></p>

</body>
</html>
