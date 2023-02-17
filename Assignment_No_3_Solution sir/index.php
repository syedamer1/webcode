<?php

//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body onload="fetchData()">
<h1>Insert</h1>
<form action="#" method="post" name="form1" >
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" id="name"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age" id="age"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" id="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="button" name="Submit" value="Add" onclick="insertDataWithAjaxJavascript()"></td>
			</tr>
		</table>
</form>
<h1>Read<h1>
	<table border = 1 cellpadding = 10>
    <tr><th>Name</th><th>Email</th><th>Age</th></tr>
    <tbody id="data"></tbody>
		</table>
       <h2>
        UPDATE
        <h2>
        <form action="" method="post" name="form2" >
		<table width="25%" border="0">
        <tr> 
				<td>ID</td>
				<td><input type="text" name="idu" id="idu"></td>
			</tr>
			<tr> 
				<td>Name</td>
				<td><input type="text" name="nameu" id="nameu"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="ageu" id="ageu"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="emailu" id="emailu"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="button" name="Update" value="Update" onclick="update()"></td>
			</tr>
		</table>
</form>
<form action="#" method="post" name="form3">
<tr> 
				<td>ID</td>
				<td><input type="text" name="idde" id="idde"></td>
			</tr>
            <tr> 
				<td></td>
				<td><input type="button" name="Delete" value="Delete" onclick="deletee()"></td>
			</tr>
</form>

</body>
<script type="text/javascript">
    function deletee()
    {
        const xhttp = new XMLHttpRequest();
        var id=document.getElementById('idde').value;
	xhttp.open("POST", "delete.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
    xhttp.send("id="+id+"");
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText==1)
            {
               alert('id cannot be empty');
            }
            else{
            fetchData();
            }
        }
    }
    
    return false;
    }
    function update()
    {
        const xhttp = new XMLHttpRequest();
        var id=document.getElementById('idu').value;

	var name=document.getElementById('nameu').value;
	var email=document.getElementById('emailu').value;
	var age=document.getElementById('ageu').value;
	xhttp.open("POST", "update.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
    xhttp.send("id="+id+"&name="+name+"&age="+age+"&email="+email+"");
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText==1)
            {
               alert('Name cannot be empty');
            }
            else if(this.responseText==2)
            {
              alert('Age cannot be empty');
            }
             else if(this.responseText==3)
            {
              alert('Email cannot be empty');
            }
            else if(this.responseText==4)
            {
                alert('id cannot be empty');
            }
            else{
            fetchData();
            }
        }
    }
    
    return false;
    }
function insertDataWithAjaxJavascript()
{
	const xhttp = new XMLHttpRequest();
	var name=document.getElementById('namei').value;
	var email=document.getElementById('emaili').value;
	var age=document.getElementById('agei').value;
	xhttp.open("POST", "ajax_insert.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
    xhttp.send("name="+name+"&age="+age+"&email="+email+"");
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText==1)
            {
               alert('Name cannot be empty');
            }
            else if(this.responseText==2)
            {
              alert('Age cannot be empty');
            }
             else if(this.responseText==3)
            {
              alert('Email cannot be empty');
            }
            else{
            fetchData();
            }
        }
    }
    
    return false;
}
 function fetchData()
 {
    var ajax=new XMLHttpRequest();
    var method="GET";
    var url="data.php";
    var asynchronous=true;
    ajax.open(method,url,asynchronous);
    ajax.send();
    ajax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var data = JSON.parse(this.responseText);
            console.log(data);
            var html="";
            for(var a=0;a<data.length;a++){
                var name=data[a].name;
                var em=data[a].email;
                var age=data[a].age;
                html+="<tr>";
                html+="<td>"+name+"</td>";
                html+="<td>"+em+"</td>";
                html+="<td>"+age+"</td>";
                html+="</tr>";
            }
            document.getElementById("data").innerHTML=html;
        }
    }
   }
</script>
</html>
