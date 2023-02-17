<!DOCTYPE html>
<html lang="en">
<?php
session_start()
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>Document</title>
    <style>
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background-image: url("./images/bg.png");

        color: white;
    }

    .Mybtn {
        margin-top: 1rem;
        display: inline-block;
        padding: .2rem 0.8rem;
        font-size: 0.8rem;
        font-weight: bold;
        border-radius: .5rem;
        border: .1.5rem solid #130f40;
        color: #130f40;
        cursor: pointer;
        text-decoration: none;
        text-align: center;
    }

    .heading {
        text-align: center;
        padding: 2rem 0;
        padding-bottom: 1rem;
        font-size: 3.5rem;
        color: #130f40;
    }

    .Mybtn:hover {
        background: #ff7800;
        color: #fff;
    }

    .logbtn {
        padding: .4rem 1rem;
        font-size: 1rem;
        margin-bottom: 10px;
        border: .25rem solid #130f40;
        margin-top: 25px;
    }
    </style>
</head>

<body>
    <center>


        <p class="heading" style="font-size: 3rem; font-weight: bolder">
            Add Product
        </p>
        <form action="" method="post">
            <label for="pname" style="margin-right:50px; margin-bottom:10px">Product Name: </label>
            <input type="text" id="pname" name="pname" /><br />
            <label for="pprice" style="margin-right: 55px; margin-bottom:10px">Product Price: </label>
            <input type="text" id="pprice" name="pprice" /><br />
            <label for="pprice">Product Image Name: </label>
            <input type="text" id="pimg" name="pimg" style="margin-bottom:10px" /><br />
            <input type="submit" name="Submit" value="Add" class="Mybtn" />
        </form>
        <?php
include("config.php");
if(isset($_POST['Submit']) && isset($_SESSION['admin'])) {
	$name = mysqli_real_escape_string($mysqli, $_POST['pname']);
	$price = mysqli_real_escape_string($mysqli, $_POST['pprice']);
	$image = mysqli_real_escape_string($mysqli, $_POST['pimg']);
		
	if(empty($name) || empty($price) || empty($image)) {
				
		if(empty($name)) {
			echo "<div color='red'>Name field is empty.</div><br/>";
		}
		
		if(empty($price)) {
			echo "<div style='color:red'>Price field is empty.</div><br/>";
		}
		
		if(empty($image)) {
			echo "<div style='color:red'>Image field is empty.</div><br/>";
		}
	} else {
		$result = mysqli_query($mysqli, "INSERT INTO products(name,price,image) VALUES('$name','$price','$image')");
		if ($result) {
      echo "<div style='color:green'>Successfully! Added Product.</div>";
		}
	}
}
?>

        <br />
        <p class="heading" style="font-size: 3rem; font-weight: bolder">
            Update Product
        </p>
        <form action="" method="post">
            <label for="delproduct" style="margin-right:33px; margin-bottom:10px">Enter Product ID:</label>
            <input type="number" name="id" /><br />
            <label for="pname" style="margin-right:48.5px; margin-bottom:10px">Product Name: </label>
            <input type="text" name="pname" /><br />
            <label for="pprice" style="margin-right:55.5px; margin-bottom:10px">Product Price: </label>
            <input type="text" name="pprice" /><br />
            <label for="pprice" style="margin-bottom:10px">Product Image Name: </label>
            <input type="text" name="pimg" /><br />
            <input type="submit" name="update" value="Update" class="Mybtn" style="margin-bottom:5px ;" />
        </form>
        <br>
        <?php


include_once("config.php");

if(isset($_POST['update']) && isset($_SESSION['admin'])) 
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$pname = mysqli_real_escape_string($mysqli, $_POST['pname']);
	$pprice = mysqli_real_escape_string($mysqli, $_POST['pprice']);
	$pimg = mysqli_real_escape_string($mysqli, $_POST['pimg']);	
	
	if(empty($id) || empty($pname) || empty($pprice) || empty($pimg)) {	
		
    if(empty($id)) {
			echo "<div style='color:red'>ID field is empty.</div><br/>";
		}

		if(empty($pname)) {
			echo "<div style='color:red'>Name field is empty.</div><br/>";
		}
		
		if(empty($pprice)) {
			echo "<div style='color:red'>Price field is empty.</div><br/>";
		}
		
		if(empty($pimg)) {
			echo "<div style='color:red'>Image field is empty.</div><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE products SET name='$pname', price='$pprice', image='$pimg' WHERE id=$id");
    if($result)
    {
    echo "<div style='color:green'>Successfully! Updated Product if product was present.</div><br/>";
    }
	}
}
?>
        <p class="heading" style="font-size: 3rem; font-weight: bolder">
            Delete Product
        </p>
        <form action="" method="post">
            <label for="delproduct">Enter Product Number:</label>
            <input type="number" name="id" />
            <input type="submit" name="delete" value="Delete" class="Mybtn" />
        </form>
        <?php

include("config.php");
if(isset($_POST['delete']) && isset($_SESSION['admin'])) 
{
  $id = mysqli_real_escape_string($mysqli, $_POST['id']);
  if(empty($id)) {
    echo "<div style='color:red'>Id field is empty.</div><br/>";
    }
   else {
    $result = mysqli_query($mysqli, "DELETE FROM products WHERE id=$id");
    if($result===TRUE)
    {
    echo "<div style='color:green'>Successfully! Deleted Product.</div><br/>";
    }
  }
}
?>
        <button class="Mybtn logbtn">
            <a href="./logout.php" style="color: black; text-decoration: none">Logout</a>
        </button>
        
        <button class="Mybtn logbtn">
            <a href="./Products.php" style="color: black; text-decoration: none">Products Page</a>
        </button>

        <table width='80%' border=0>

            <tr bgcolor='#CCCCCC'>
                <td>ID</td>
                <td>Name</td>
                <td>Price</td>
                <td>Image</td>
            </tr>
            <?php 
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM products ORDER BY id");
$res=array();
	while($res = mysqli_fetch_assoc($result)) {  		
		echo "<tr>";
    echo "<td>".$res['id']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['price']."</td>";
		echo "<td>".$res['image']."</td>";	
        echo "</tr>";	
    }
	?>
        </table>
    </center>
</body>

</html>