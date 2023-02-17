<?php
$databaseHost = 'localhost';
$databaseName = 'OCLOCK';
$databaseUsername = 'root';
$databasePassword = ''; 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$result = mysqli_query($mysqli, "Select * from student");
while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    if($row['email']==$email)
    {

        $query="UPDATE `admin` set password=987654";
        mysqli_query($mysqli,$query);
        echo '<script>alert("Password Have been reseted")</script>';
        header('Location: loginpage.php');
    }
}

echo '<script>alert("Student Not Found")</script>';
header('Location: loginpage.php');
?>