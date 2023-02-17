<!DOCTYPE html>
<html lang="en">
<?php
$emailer;
$phoneerr;
$roleerr;
$cityerr;
$messageerr;
$nameerr;
if (isset($_POST["submit"]))
{
  $databaseHost = 'localhost';
$databaseName = 'OCLOCK';
$databaseUsername = 'root';
$databasePassword = ''; 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 


    $name = mysqli_real_escape_string($mysqli, $_POST["name"]);
    $email = mysqli_real_escape_string($mysqli, $_POST["email"]);
    $phone = mysqli_real_escape_string($mysqli, $_POST["phone"]);
    $role = mysqli_real_escape_string($mysqli, $_POST["role"]);
    $city = mysqli_real_escape_string($mysqli, $_POST["city"]);
    $message = mysqli_real_escape_string($mysqli, $_POST["message"]);
    $error = false;
    if (empty($name) || !preg_match('/^[A-Z][a-z]+$/', $name))
    {
        $nameerr = "<div style='color:red'>Name is invalid. It should contain only characters.</div><br/>";
        $error = true;
    }
    if (empty($email) || !preg_match('/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email))
    {
        $emailer = "<div style='color:red'>Email is invalid. It should match the email format.</div><br/>";
        $error = true;
    }
    if (empty($phone) || !preg_match('/^\+92[0-9]{10,}$/', $phone))
    {
        $phoneerr = "<div style='color:red'>Phone number is invalid. It should start with +92 and contain 10 digits.</div><br/>";
        $error = true;
    }
    if (empty($role))
    {
        $roleerr = "<div style='color:red'>Role Not Selected</div><br/>";
        $error = true;
    }
    if (empty($city))
    {
        $cityerr = "<div style='color:red'>City Not Selected</div><br/>";
        $error = true;
    }
    if (empty($message))
    {
        $messageerr = "<div style='color:red'>Message is required</div><br/>";
        $error = true;
    }
    if (!$error)
    {
        if (!isset($_COOKIE["count"]))
        {
            setcookie("count", 1, time() + 86400 * 30, "/");
            $query = "INSERT INTO contactus (name, email, phone, role, city, message) VALUES ('$name', '$email', '$phone', '$role', '$city', '$message')";
            mysqli_query($mysqli, $query);
            header("Location: contact.php");
        }
        else
        {
            if ($_COOKIE["count"] < 2)
            {
                setcookie("count", 2, time() + 86400 * 30, "/");
                $query = "INSERT INTO contactus (name, email, phone, role, city, message) VALUES ('$name', '$email', '$phone', '$role', '$city', '$message')";
                mysqli_query($mysqli, $query);
            }
        }
    }
} ?>

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
      <a class="navbar-brand" href="./Home.html">
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

  <div class="container">
    <div class="row justify-content-center">
      <!--Form Section Start-->
      <div class="col-md-3 col-sm-6 col-10">
        <br>
        <h2>Contact Us</h2>
        <hr>
        <form action="" method="post">

          <label for="name"> Name : <input type="text" id="name" name="name" required>
          </label> <br><br>

          <label for="email"> E-mail: <input type="text" id="email" name="email" required>
          </label><br><br>

          <label for="num"> Phone: <input type="text" id="phone" name="phone" required>
          </label><br><br>

          <label for="role"> Role : <input type="radio" id="role" name="role" checked> Customer <input type="radio"
              id="role" name="role"> Re-Seller </label><br><br>

          <label for="city">City: </label> <select id="city" name="city">
            <option value="Lahore"> Lahore </option>
            <option value="Karachi"> Karachi </option>
            <option value="Islamabad"> Islamabad </option>
          </select><br><br>

          <label> Message: </label><br>
          <textarea name="message" id="message" style="font-family:times new roman; font-size:3;" required></textarea>
          <br><br>
          
          <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
          <?php
         if (isset($_POST["submit"]) && !empty($nameerr))
         {  
          echo $nameerr;
         }
         elseif (isset($_POST["submit"]) && !empty($emailer))
         {  
          echo $emailer;
         }
         elseif (isset($_POST["submit"]) && !empty($phoneerr))
         {  
          echo $phoneerr;
         }
         elseif (isset($_POST["submit"]) && !empty($roleerr))
         {  
          echo $roleerr;
         }
         elseif (isset($_POST["submit"]) && !empty($messageerr))
         {  
          echo $messageerr;
         }
        if(isset($_COOKIE['count']) && ($_COOKIE['count']<2 && $_COOKIE['count']>0))
        {
          echo "<div style='color:red'>Successfully Submitted.</div>";
        }
        elseif (isset($_COOKIE['count']) && ($_COOKIE['count']==2))
        {
          echo "<div style='color:red'>Sorry, you have reached the maximum number of form submissions for today. Please try again tomorrow.</div>";
        }
        ?>
        </form>
        <div id="ED1"></div>

        <!--Form Section End-->
      </div>
      <!--Map Section Start-->
      <div class=" col-md-2 col-sm-6 col-1 w-75" style="border:2px;">
        <br><br>
        <h3 class="h3" align="center"> O'Clock, Johar Town, Lahore, Punjab, Pakistan</h3>
        <hr style="margin: 0px;">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27225.338402741112!2d74.27696225!3d31.464583700000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919015f82b0b86f%3A0x2fcaf9fdeb3d02e6!2sJohar%20Town%2C%20Lahore%2C%20Punjab!5e0!3m2!1sen!2s!4v1670765585071!5m2!1sen!2s"
          width="100%" height="70%" style="border:0px; margin-bottom:150px ;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <!--Map Section End-->

    </div>
  </div>
  <hr style="padding: 0px; margin:2px">

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
                <input type="email" id="form5Example2" class="form-control" placeholder="Emailaddress@example.com" />
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

</html>