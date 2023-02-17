<?php

include_once("config.php");	
$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$age = mysqli_real_escape_string($mysqli, $_POST['age']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// checking empty fields
	if(empty($name) || empty($age) || empty($email)) {
				
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
		
		//link to the previous page
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");
		
		//display success message
		echo "4";

	}

?>

