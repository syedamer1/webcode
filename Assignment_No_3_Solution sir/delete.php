<?php

include_once("config.php");	
$id = mysqli_real_escape_string($mysqli, $_POST['id']);
		
	if(empty($id)) {
				
		if(empty($id)) {
			echo "1";
			exit();
		}
		}
		
		//link to the previous page
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "DELETE FROM users WHERE id='$id'");
		
		//display success message
		echo "4";

	}

?>

