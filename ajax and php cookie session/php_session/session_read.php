<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h1>Read Session</h1>
<?php
// Echo session variables that were set on previous page
if(isset($_SESSION['favcolor']))
{
 echo "Favorite color is " . $_SESSION["favcolor"];
}
else
{
	echo "session is not defined";
}

?>

</body>
</html>