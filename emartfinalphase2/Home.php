<!DOCTYPE html>
<html lang="en">

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
  <script src="Script.js"></script>
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
        <a class="navbar-brand" href="Home.php"><img src="Images/Logo.png" alt="Images Not Found."
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
  <nav class="navbar navbar-expand navbar-color pt-10 mt-0 border-top-0 justify-content-center">
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

  <!--Slider-->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./Images/Banner.webp" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="./Images/ban6.jpg" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="./Images/banner-bg.webp" class="d-block w-100" alt="..." />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- feauture Part-->
  <section class="features" id="features">
    <p class="heading" style="font-size: 4rem; font-weight: bolder">
      Our Features
    </p>

    <div class="box-container">
      <div class="box" style="padding-top: 70px">
        <img src="Images/feature-img-1.png" alt="" />
        <h3>Fresh and Organic</h3>
        <p>
          Everything is Fresh and Up to Date in our Inventory. So, expect
          goodness.
        </p>
      </div>

      <div class="box" style="padding-top: 70px">
        <img src="Images/feature-img-2.png" alt="" />
        <h3>Free Delivery</h3>
        <p>
          Free Delivery is now Available. Making things easier for you (unlike
          others).
        </p>
      </div>

      <div class="box" style="padding-top: 70px">
        <img src="Images/feature-img-3.png" alt="" />
        <h3>Easy Payments</h3>
        <p>Online Payment and Cash on Delivery options are available.</p>
      </div>
    </div>
  </section>

  <!-- products section start  -->

  <p class="heading" style="font-size: 4rem; font-weight: bolder">
    Our Products
  </p>

  <div class="container">
    <div class="row">
      <!--Product 1-->
      <div class="col-md-3 col-sm-6 col-6 Bord" style="margin-bottom: 10px">
        <div class="product-grid">
          <div class="product-image" style="align-content: center">
            <center>
              <a href="./Detail.html">
                <img class="pic-1 img1" src="./Images/Ariel.webp" />
              </a>
              <h2 class="fs-6">
                <a href="#!" class="text-inherit text-dark text-decoration-none">
                  <h1>Airel</h1>
                </a>

                <div class="price">
                  <h4>PKR 150/- Per Kg</h4>
                </div>
                <button class="Mybtn">
                  <a href="./Detail.html" style="color: black; text-decoration: none">Show Details</a>
                </button>
              </h2>
            </center>
          </div>
        </div>
      </div>

      <!--Product 1-->
      <div class="col-md-3 col-sm-6 col-6 Bord" style="margin-bottom: 10px">
        <div class="product-grid">
          <div class="product-image" style="align-content: center">
            <center>
              <a href="./Detail.html">
                <img class="pic-1 img1" src="./Images/Harpic.webp" />
              </a>
              <h2 class="fs-6">
                <a href="#!" class="text-inherit text-dark text-decoration-none">
                  <h1>Harpic</h1>
                </a>

                <div class="price">
                  <h4>PKR 100/-</h4>
                </div>
                <button class="Mybtn">
                  <a href="./Detail.html" style="color: black; text-decoration: none">Show Details</a>
                </button>
              </h2>
            </center>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-6 Bord" style="margin-bottom: 10px">
        <div class="product-grid">
          <div class="product-image" style="align-content: center">
            <center>
              <a href="./Detail.html">
                <img class="pic-1 img1" src="./Images/Ariel.webp" />
              </a>
              <h2 class="fs-6">
                <a href="#!" class="text-inherit text-dark text-decoration-none">
                  <h1>Airel</h1>
                </a>

                <div class="price">
                  <h4>PKR 150/- Per Kg</h4>
                </div>
                <button class="Mybtn">
                  <a href="./Detail.html" style="color: black; text-decoration: none">Show Details</a>
                </button>
              </h2>
            </center>
          </div>
        </div>
      </div>

      <!--Product 1-->
      <div class="col-md-3 col-sm-6 col-6 Bord" style="margin-bottom: 10px">
        <div class="product-grid">
          <div class="product-image" style="align-content: center">
            <center>
              <a href="./Detail.html">
                <img class="pic-1 img1" src="./Images/Prime.webp" />
              </a>
              <h2 class="fs-6">
                <a href="#!" class="text-inherit text-dark text-decoration-none">
                  <h1>Prime</h1>
                </a>

                <div class="price">
                  <h4>PKR 150/-</h4>
                </div>
                <button class="Mybtn">
                  <a href="./Detail.html" style="color: black; text-decoration: none">Show Details</a>
                </button>
              </h2>
            </center>
          </div>
        </div>
      </div>

      <!--End-->
    </div>
  </div>

  <div style="text-align: center; margin-top: 30px" class="mb-5">
    <a href="#" class="btn btn-dark p-4">BACK TO TOP</a>
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
            <a type="button" class="btn btn-light btn-lg"><i class="fab fa-facebook-f"></i></a>
            <!-- Instagram -->
            <a type="button" class="btn btn-light btn-lg"><i class="fab fa-instagram"></i></a>
            <!-- Twitter -->
            <a type="button" class="btn btn-light btn-lg"><i class="fab fa-twitter"></i></a>
          </div>
        </div>

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
      ?? 2022 E-Mart.&nbspAll Rights Reserved.
    </p>
  </div>
</body>

</html>