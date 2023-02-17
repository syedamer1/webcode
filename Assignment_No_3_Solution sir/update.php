<?php

include_once("config.php");	
$id=mysqli_real_escape_string($_POST['id']);

$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$age = mysqli_real_escape_string($mysqli, $_POST['age']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// checking empty fields
    if(empty($name) || empty($age) || empty($email)|| empty($id)) {
				
		if(empty($name)) {
			echo "1";
			exit();
		}
		
		if(empty($age)) {
			echo "2";
			exit();
		}
		
		if(empty($email)) {
			echo "3";
			exit();
		}
        if(empty($id)) {
			echo "4";
			exit();
		}
		
		//link to the previous page
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
        $res=mysqli_query($mysqli,"UPDATE users
        SET name='$name',age='$age',email='$email'
        WHERE id='$id'
        ");				
		//display success message
		echo "5";

	}

?>
