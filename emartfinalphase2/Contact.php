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
  include('config.php');

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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="A newly found e-commerce website to make your daily life easier. We have everything, just name it. With excellent services." />
  <meta name="keywords" content="Grocery, Food, Snacks, Beverages, Home Delivery, Offer, Shopping" />
  <title>Home | E-Mart</title>
  <link rel="icon" href="Images/favicon.webp" />

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!-- custom js file link  -->
  <script src="./Script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <!-- custom css file link  -->
  <link rel="stylesheet" href="Style.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <header style="width: 100%" class="justify-content-center">
    <nav class="navbar navbar-expand pt-10 mt-0 border-top-0 w-100" style="width: 100%">
      <div class="container-fluid align-content-center" style="width: 100%">
        <a class="navbar-brand" href="Home.html"><img src="Images/Logo.png" alt="Images Not Found."
            style="margin-left: 15px; width: 130px; padding: 3px" /></a>

        <div class="mb-2" style="right: 0px">
          <!-- Facebook -->
          <a type="button" class="btn btn-floating btn-light"><i class="fab fa-facebook-f"
              style="font-size: x-large; width: 100%"></i></a>
          <!-- Instagram -->
          <a type="button" class="btn btn-floating btn-light"><i class="fab fa-instagram"
              style="font-size: x-large; width: 100%"></i></a>

          <!-- Twitter -->
          <a type="button" class="btn btn-floating btn-light"><i class="fab fa-twitter"
              style="font-size: x-large; width: 100%"></i></a>
        </div>
      </div>
    </nav>
  </header>
  <!-- Header section starts  -->
  <nav
      class="navbar navbar-expand navbar-color pt-10 mt-0 border-top-0 justify-content-center"
    >
      <ul class="navbar-nav">
        <li class="nav-item">
          <button onclick="OpenHome()" class="nav-link btn-group">Home</button>
        </li>
        <li class="nav-item">
          <button onclick="OpenAbout()" class="nav-link btn-group">
            About Us
          </button>
        </li>
        <li class="nav-item">
          <button onclick="OpenProducts()" class="nav-link btn-group">
            Products
          </button>
        </li>
        <li class="nav-item">
          <button onclick="OpenContactus()" class="nav-link btn-group">
            Contact Us
          </button>
          <?php
          session_start();
          if(isset($_SESSION['admin']))
          {
            echo '<li class="nav-item">
              <button onclick="openadminpage()" class="nav-link btn-group">
                Admin
              </button></li>';
          }
          else
          {
            echo '<li class="nav-item">
              <button onclick="openloginpage()" class="nav-link btn-group">
                Login
              </button></li>';
          }
          ?>

      </ul>
    </nav>

  <div class="contact-banner">
    <div class="content"></div>
  </div>

  <div class="container">
    <form method="post" action="">
      <div class="row justify-content-center text-center">
        <div class="col-sm-12 mb-2" style="margin-left: 0.4%">
          <h1 style="font-weight: bolder; font-size: 250%; margin-top: 4%">
            Do you have any questions?
          </h1>
        </div>
        <div class="col-sm-7 m-2">
          <input class="contact-form" type="text" name="name" id="name" placeholder="Name" required/>
        </div>
        <div class="col-sm-7 m-2">
          <input class="contact-form" type="email" name="email" id="email" placeholder="Email" required />
        </div>

        <div class="col-sm-7 m-2">
          <input class="contact-form" type="tel" name="phone" id="phone" placeholder="Phone" required/>
        </div>

        <div class="col-sm-7 m-2">
          <label class="contact-form" for="role"> Select Your Role </label><br />
          <input type="radio" id="role1" name="role" value="customer" checked /> Customer
          <input type="radio" id="role" name="role" value="reseller" />Re-Seller<br />
        </div>

        <div class="col-sm-7 m-2">
          <label class="contact-form" for="city">Select Your City </label>
        </div>
        <div class="col-sm-7 m-2">
          <select class="contact-form" id="city" name="city">
            <option class="contact-form" value="Lahore">Lahore</option>
            <option class="contact-form" value="Karachi">Karachi</option>
            <option class="contact-form" value="Islamabad">Islamabad</option>
          </select>
        </div>

        <div class="col-sm-7 m-2">
          <textarea class="contact-form" name="message" id="message" cols="15" rows="15"
            placeholder="Message"></textarea>
        </div>

        <div class="col-sm-6 text-center">
          <div class="contact-submit">
            <div id="errorid"></div>
            <button type="submit" class="Mybtn btn btn-primary" name="submit" id="submit" value="Submit"
              style="border-color: black; color: black">Submit</button>
          </div>
        </div>
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
          echo "<div style='color:green'>Successfully Submitted.</div>";
        }
        elseif (isset($_COOKIE['count']) && ($_COOKIE['count']==2))
        {
          echo "<div style='color:red'>Sorry, you have reached the maximum number of form submissions for today. Please try again tomorrow.</div>";
        }
        ?>
        <div class="col-sm-6 m-2">
          <h2>Our Location: DHA, Lahore, Punjab, Pakistan</h2>
        </div>
        <div class="col-sm-6 m-2 mb-4">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13611.359126243568!2d74.36457863011927!3d31.473593252159656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190676e1e0d841%3A0xd14d6b7294fdf8a0!2sDHA%20Phase%203%2C%20Lahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1670691917340!5m2!1sen!2s"
            width="100%" height="100%" style="border: 0; margin-bottom: 40%" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </form>
  </div>

  <footer class="text-white text-center text-lg-start footer-bg">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4 mb-5">
        <!--Grid column-->
        <div class="col-xs-12 col-sm-12 col-lg-6 col-md-12">
          <img src="Images/Logo2.png" alt="" width="45%" />

          <p class="mt-5 mb-4">Stay in touch with us</p>
          <div>
            <!-- Facebook -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-facebook-f"></i></a>
            <!-- Instagram -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-instagram"></i></a>
            <!-- Twitter -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-twitter"></i></a>
            <!-- Github  -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-github"></i></a>
            <!-- Linkedin -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-xs-6 col-sm-6 col-lg-3 col-md-6 mt-5">
          <p style="font-size: x-large; font-weight: bold">Contact Us</p>

          <ul class="fa-ul" style="margin-left: 0px">
            <li class="mb-3 text-decoration-none">
              <p>
                <i class="fas fa-home m-2"></i><span>DHA PHASE 3, Lahore, Pakistan</span>
              </p>
            </li>
            <li class="mb-3">
              <p>
                <i class="fas fa-envelope m-2"></i><span>emartoffical@gmail.com</span>
              </p>
            </li>
            <li class="mb-3">
              <p>
                <i class="fas fa-phone m-2"></i><span>+ 123-456-7890</span>
              </p>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-xs-6 col-sm-6 col-lg-3 col-md-6 mt-5">
          <!-- <h5 class="text-uppercase mb-4">Opening hours</h5> -->
          <p style="font-size: x-large; font-weight: bold">Explore</p>
          <ul class="fa-ul" style="margin-left: 0px">
            <a href="" style="text-decoration: none">
              <li class="mb-3" style="color: white">About Us</li>
            </a>
            <a href="" style="text-decoration: none">
              <li class="mb-3" style="color: white">Feedback</li>
            </a>
            <a href="" style="text-decoration: none">
              <li class="mb-3" style="color: white">FAQs</li>
            </a>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  </footer>

  <div class="tradeMark">
    <p style="color: white; padding-top: 18px; padding-right: 30px">
      © 2022 E-Mart.&nbspAll Rights Reserved.
    </p>
  </div>
</body>
<script></script>

</html>