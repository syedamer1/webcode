<?php

include_once("config.php");	
$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$cgpa = mysqli_real_escape_string($mysqli, $_POST['cgpa']);		
	// checking empty fields
	if(empty($name) || empty($cgpa)) {
		if(empty($name)) {
			echo "1";
			exit();
		}
		if(empty($cgpa)) {
			echo "2";
			exit();
		}
		//link to the previous page
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO students(name,cgpa) VALUES('$name','$cgpa')");
		//display success message
		echo "3";

	}

?>