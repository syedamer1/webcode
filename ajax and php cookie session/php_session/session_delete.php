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
 unset($_SESSION['favcolor']);
  header("Location:session_read.php");
  echo "reach";
}
else
{

	echo " session is not defined";
}
//session_destroy();
?>

</body>
</html>