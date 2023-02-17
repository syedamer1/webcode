<?php
include_once("config.php");
if(isset($_POST['insert'])) { 	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// checking empty fields
	if(empty($name) || empty($age) || empty($email)) {
				
		if(empty($name)) {
			header('Location:modal_insert_example.php?message="Name field is empty"');	
		}
		
		if(empty($age)) {
			header('Location:modal_insert_example.php?message="Age field is empty"');
		}
		
		if(empty($email)) {
			header('Location:modal_insert_example.php?message="Email field is empty"');
		}
		
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");
		header('Location:modal_insert_example.php?message="Data inserted Successfully"');
	}
}
?>