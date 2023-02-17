<?php
session_start();
include_once("config.php");
$fname=$_POST['fname'];
$password=$_POST['password'];
$sql="SELECT * from credentials where password='$password' and name='$fname'";
$result=mysqli_query($mysqli,$sql);
$rowcount=mysqli_num_rows($result);
 if($rowcount==0)
 {
 	echo "<script>alert('Credentails are not correct');</script>";
 	echo "<script>history.back()</script>";
 	/*header('Location:Login.Form.php');*/
 }
 else
 {
 	$_SESSION["Login"] =true;
 	echo "<script>alert('Credentails are accepted');</script>";
 	echo "<script>window.location.href='/Week_15/Quiz_4/InsertWithAjax.php'</script>"; 
 }
?>