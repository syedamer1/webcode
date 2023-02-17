<?php
session_start();
if(!isset($_SESSION["Login"]))
{
	 	echo "<script>window.location.href='/Week_15/Quiz_4/loginForm.php'</script>"; 
}
?>
<html>
<body>
<h1>Insert With Ajax</h1>
  <label for="fname">Name:</label><br>
  <input type="text" id="fname" name="fname" ><br>
  <label for="cgpa">CGPA:</label><br>
  <input type="cgpa" id="cgpa" name="cgpa" ><br><br>
  <input type="button" value="Submit" onclick="insertDataWithAjaxJavascript()">
  <script>
  	function insertDataWithAjaxJavascript()
{
	const xhttp = new XMLHttpRequest();
	var name=document.getElementById('fname').value;
	var cgpa=document.getElementById('cgpa').value;
	xhttp.open("POST", "ajax_insert.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
    xhttp.send("name="+name+"&cgpa="+cgpa+"");
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText==1)
            {
               alert('Name cannot be empty');
            }
            else if(this.responseText==2)
            {
              alert('CGPA cannot be empty');
            }
            else
            {
            	alert('data inserted successfully');
            }
          
        }
    }
    
    return false;
}
  </script>
</body>
</html>
