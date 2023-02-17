<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if( isset($_SESSION['admin']))
{
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/Favi.png" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./style.css">
    <title>O'Clock</title>
    <script>
        function Home() {
            window.open("./Home.php", "_self");
        }

        function About() {
            window.open("./About.html", "_self");
        }

        function Products() {
            window.open("./Products.php", "_self");
        }

        function Contact() {
            window.open("./Contact.php", "_self");
        }
    </script>
</head>

<body background="images/Background.png">
    <!--Top bar Start-->
    <nav class="navbar navbar-dark bg-dark border-bottom-0 p-0 mt-0">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand" href="./Home.php">
                <img src="./images/Logo.png" class="me-2 m-0 p-0" height="35" alt="" loading="lazy" />
            </a>
            <img src="./images/Top.png" class="me-2 m-0 p-0" id="topb" height="25" alt="" loading="lazy" />

            <section class="mt-2 mb-2 d-inline-block justify-content-end">
                <a class="btn btn-outline-light btn-floating m-0" href="logout.php" role="button"><i
                        class="fa fa-sign-out"> Logout</i></a>
            </section>
        </div>
    </nav>
    <!--Top bar End-->

    <!--Nav bar Start-->
    <nav class="navbar navbar-expand bg-light pt-10 mt-0 border-top-0 justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item active ">
                <button onclick="Home()" class="btn-group nav-link"
                    style="margin-right: 5px; margin-left: 4px">Home</button>
            </li>
            <li class="nav-item">
                <button onclick="About()" class="btn-group nav-link" style="margin-right: 5px">About Us</button>
            </li>
            <li class="nav-item">
                <button onclick="Products()" class="btn-group nav-link" style="margin-right: 5px">Products</button>
            </li>
            <li class="nav-item">
                <button onclick="Contact()" class="btn-group nav-link" style="margin-right: 5px">Contact Us</button>
            </li>
    </nav>
    <!--Nav bar End-->

    <hr style="padding: 0px; margin:2px">

    <!--Login-->


    <?php

include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM products ORDER BY id ASC"); // using mysqli_query instead
?>
    <div class=" container-fluid" style=" margin: auto; border: 3px solid green; padding: 10px;">
        <table width='80%' border='2' cellpadding="12" style="margin : 10px 10px text-center" align="center">
            <tr>
                <td colspan="4">

                    <form name="F1" action="" method="post">
                    <h1>Add Product</h1>
                        <label for="pname" style="margin-right:14px">Please Enter The Product Name: </label>
                        <input type="text" id="name" name="name" placeholder="i.e: Watch"
                            style="margin:4px 0px" /><br />
                        <label for="pprice">Please Enter The Name Of Image: </label>
                        <input type="text" id="image" name="image" placeholder="i.e: image.jpg"
                            style="margin:4px" /><br />
                        <input type="submit" name="Submit" value="Add" />
                        <?php
include_once("config.php");
$success;

if(isset($_POST['Submit']) && isset($_SESSION['admin'])) {
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$image = mysqli_real_escape_string($mysqli, $_POST['image']);

	if(empty($name) || empty($image)) {
				
		if(empty($name)) {
			echo "<div style='color : red'>Name field is empty.</div>";
		}
		
		if(empty($image)) {
            echo "<div style='color : red'>Image field is empty.</div>";
		}
		
	} else { 

        $result = mysqli_query($mysqli, "INSERT INTO products(name,image) VALUES('$name','$image')");

        if ($result) {
            
            echo"<div style='color : green'>Product added successfully.</div>";
	    }
    }
}
?>
                        <hr style="padding: 0px; margin:2px">
                    </form>

                </td>

            </tr>

            <tr>


                <td colspan="4">

                    <form name="F2" action="" method="post">
                        <br><h1>Update Product</h1>
                        <label for="pid" style="margin-right:36px">Please Enter The Product ID: </label>
                        <input type="number" id="id" name="id" placeholder="i.e: 1" style="margin:4px 0px" /><br />
                        <label for="pname" style="margin-right:14px">Please Enter The Product Name: </label>
                        <input type="text" id="name" name="name" placeholder="i.e: Watch"
                            style="margin:4px 0px" /><br />
                        <label for="pprice">Please Enter The Name Of Image: </label>
                        <input type="text" id="image" name="image" placeholder="i.e: image.jpg"
                            style="margin:4px" /><br />
                        <input type="submit" name="update" value="Update" />
                        <?php
include_once("config.php");

if(isset($_POST['update'])&& isset($_SESSION['admin'])) 
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$image = mysqli_real_escape_string($mysqli, $_POST['image']);	
	
	if(empty($id) || empty($name) || empty($image)) {	
		if(empty($id)) {
			echo "<div style='color : red'>ID field is empty.</div>";
		}
		if(empty($name)) {
			echo "<div style='color : red'>Name field is empty.</div>";
		}
		if(empty($image)) {
			echo "<div style='color : red'>Image field is empty.</div>";
		}		
	} else {
		$result = mysqli_query($mysqli, "UPDATE products SET name='$name',image='$image' WHERE id=$id");
        if ($result) {
            
            echo"<div style='color : green'>Product Updated successfully.";
	    }
    }
}
?>
                        <hr style="padding: 0px; margin:2px">
                    </form>
                </td>
            </tr>
            <tr bgcolor='#CCCCCC'>
                <td>ID</td>

                <td>Product Name</td>
                <td>Image Name</td>
                <td>Operations</td>
            </tr>

            <?php 
            $result = mysqli_query($mysqli, "SELECT * FROM products ORDER BY id");
            $res=array();
	while($res = mysqli_fetch_assoc($result)) {  		
		echo "<tr>";
    echo "<td>".$res['id']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['image']."</td>";	
		echo "<td><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
        </table>
    </div>
    <!--End-->


    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
        <div class="container p-2">
            <!--Social media Section Start-->
            <section class="mb-2">
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img style="width: 20px;"
                        src="./images/FB.png" alt=""> O'Clock</a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img style="width: 20px;"
                        src="./images/twitter.png" alt=""> O'Clock</a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img style="width: 20px;"
                        src="./images/Google.png" alt=""> O'Clock</a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img style="width: 20px;"
                        src="./images/Insta.png" alt=""> O'Clock</a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img style="width: 20px;"
                        src="./images/linkedin.png" alt=""> O'Clock</a>
            </section>
            <!--Social media Section End-->

            <!--Form Section Start-->
            <section class="mb-0">
                <form action="">
                    <div class="row d-flex justify-content-center" style="margin-left:10px; margin-right:10px;">
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Sign up for our newsletter</strong>
                            </p>
                        </div>
                        <div class="col-md-5 col-12">
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="form5Example2" class="form-control"
                                    placeholder="Emailaddress@example.com" />
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-outline-light mb-4">Subscribe</button>
                        </div>
                    </div>
                </form>
            </section>
            <!--Form Section End-->

            <section class="mb-0 m-0">
                <p>
                    Visit Us: O'Clock, Johar Town, Lahore
                </p>
            </section>
        </div>

        <!--Copyright Section Start-->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Copyright © 2022 :
            <a class="text-white" href="./Home.html">O'Clock.com</a>
        </div>
        <!--Copyright Section End-->

    </footer>
    <!-- Footer Section End-->
</body>
<?php
}
else
{
    header('Location: loginpage.php');
}
?>