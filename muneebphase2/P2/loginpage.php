<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(isset($_SESSION['admin']))
{
  header('Location:productpageadmin.php');
}
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="Images/Favi.png" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="./style.css">
  <title>Login</title>

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
        <a class="btn btn-outline-light btn-floating m-0" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-outline-light btn-floating m-0" href="#!" role="button"><i class="fab fa-twitter"></i></a>
        <a class="btn btn-outline-light btn-floating m-0" href="#!" role="button"><i class="fab fa-instagram"></i></a>
        <a class="btn btn-outline-light btn-floating m-0" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
      </section>
    </div>
  </nav>
  <!--Top bar End-->

  <!--Nav bar Start-->
  <nav class="navbar navbar-expand bg-light pt-10 mt-0 border-top-0 justify-content-center">
    <ul class="navbar-nav">
      <li class="nav-item active ">
        <button onclick="Home()" class="btn-group nav-link" style="margin-right: 5px; margin-left: 4px">Home</button>
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
  $error;
    $databaseHost = 'localhost';
    $databaseName = 'OCLOCK';
    $databaseUsername = 'root';
    $databasePassword = ''; 
    
    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
    if(isset($_POST["submit"]))
    {
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $pass = mysqli_real_escape_string($mysqli, $_POST['password']);
    if(empty($email) || empty($pass)) {
            
      if(empty($name)) {
        echo "<div style='color : red'>Email field is empty.</div><br/>";
      }
      if(empty($pass)) {
        echo "<div style='color : red'>Password field is empty.</div><br/>";
      }
    }
    else
    {
    $result = mysqli_query($mysqli, "Select email,password from admin");
    $check=true;
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        if($row["email"]==$email && $row["password"]==$pass)
        {
          header('Location: productpageadmin.php');
          session_start();
            $_SESSION["admin"] = "login";
        }
        else
        {
          $check=false;
        }
    }
    if($check==false)
    {
    $error= "<div style='color : red'>Admin Not Found!</div>";
    }
    }}
  ?>

<center>
  <div class="container p-5" style="border:3px double">
      <img style="width:100px" src="images/Admin.png" alt="">
      <h1 style="font-size: 3rem; font-weight: bolder;">ADMIN LOGIN</h1>
      <br>
      <br>
      <form action="" method="post">
        <label for="email" style="margin-right:16px;margin-bottom:12px">Plese Enter Your Email :</label>
        <input type="email" id="email" name="email" style="margin-bottom:12px" required />
        <br />
        <label for="password" style="margin-bottom:12px">Plese Enter The Password :</label>
        <input type="password" id="password" name="password" style="margin-bottom:12px" required />
        <br />
        <?php
        if (isset($_POST["submit"])&& !empty($error)) {
          echo $error;
        }
        ?>
        <input type="submit" name="submit" style="padding:3px 8px" value="Login" />
      </form>
    </div>

    <div class="container p-5" style="border:3px double">
    <h4>Enter Your Student Email Below, If you want to forget password</h4>  
    <form id="resetform" action="resetpass.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"style="margin-bottom:12px" required />
        <br />
        <input type="submit" value="Submit" />
      </form>
    </div>
  </center>
  
</body>
</html>