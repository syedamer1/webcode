<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="A newly found e-commerce website to make your daily life easier. We have everything, just name it. With excellent services."
    />
    <meta
      name="keywords"
      content="Grocery, Food, Snacks, Beverages, Home Delivery, Offer, Shopping"
    />
    <title>About | E-Mart</title>
    <link rel="icon" href="Images/favicon.webp" />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom js file link  -->
    <script src="Script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="Style.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>

  <body>
    <header style="width: 100%" class="justify-content-center">
      <nav
        class="navbar navbar-expand pt-10 mt-0 border-top-0 w-100"
        style="width: 100%"
      >
        <div class="container-fluid align-content-center" style="width: 100%">
          <a class="navbar-brand" href="Home.php"
            ><img
              src="Images/Logo.png"
              alt="Images Not Found."
              style="margin-left: 15px; width: 130px; padding: 3px"
          /></a>

          <div class="mb-2" style="right: 0px">
            <!-- Facebook -->
            <a type="button" class="btn btn-floating btn-light"
              ><i
                class="fab fa-facebook-f"
                style="font-size: x-large; width: 100%"
              ></i
            ></a>
            <!-- Instagram -->
            <a type="button" class="btn btn-floating btn-light"
              ><i
                class="fab fa-instagram"
                style="font-size: x-large; width: 100%"
              ></i
            ></a>

            <!-- Twitter -->
            <a type="button" class="btn btn-floating btn-light"
              ><i
                class="fab fa-twitter"
                style="font-size: x-large; width: 100%"
              ></i
            ></a>
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
          </button>
        </li>
        '; } else { echo '
        <li class="nav-item">
          <button onclick="openloginpage()" class="nav-link btn-group">
            Login
          </button>
        </li>
        '; } ?>
      </ul>
    </nav>

    <div class="about-banner">
      <div class="content">
        <h1>About Us | E-Mart</h1>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <p style="font-weight: bolder; font-size: 250%; margin-top: 5%">
            About Company
          </p>
          <span style="font-size: small"
            >Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
            mollitia, nisi corrupti molestiae provident, sit porro quia facere
            eum facilis ducimus beatae eos obcaecati amet, ex exercitationem
            alias sapiente fuga? Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Ea nostrum quisquam, possimus vel aut fugit
            perspiciatis autem, officiis unde deleniti inventore alias tenetur
            cum, ullam facere neque beatae. Minima, nobis. Lorem ipsum dolor sit
            amet consectetur adipisicing elit. Adipisci, ipsa dolorum unde
            dolores illo libero necessitatibus minus praesentium odit natus vel
            odio nulla accusantium commodi ipsam nesciunt, architecto porro ut!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora,
            facere magnam iure doloremque sint labore nihil quasi quam eius
            nesciunt sunt sequi tenetur quas ipsam vitae necessitatibus in,
            numquam maiores! Lorem ipsum, dolor sit amet consectetur adipisicing
            elit. Qui enim assumenda commodi quas aperiam voluptatem fuga
            corporis inventore, ea, iusto dolorum quod nisi nihil ipsum, nam
            dolorem! Nihil, distinctio quae. Lorem ipsum dolor sit amet,
            consectetur adipisicing elit. Culpa veniam, velit voluptatum
            aliquid, voluptas ipsum atque fugit harum cupiditate numquam quas,
            necessitatibus nam. Nobis molestias quos mollitia ipsum assumenda
            animi. Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Repellendus harum unde, ullam eligendi soluta enim praesentium
            laborum! Temporibus sapiente accusantium fugit aliquam aspernatur,
            harum repellat voluptate nobis ipsum! Doloremque, praesentium! Lorem
            ipsum dolor sit amet consectetur adipisicing elit. Doloribus error
            quaerat dicta adipisci eos voluptatem fuga debitis veritatis,
            explicabo mollitia atque voluptates dolores exercitationem, placeat
            expedita, officia corrupti ducimus eaque! Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Nisi corrupti, dicta dolores maiores
            illum, quod sunt rem, suscipit similique quos officia non error vel
            animi consequuntur ut ad molestias voluptate. Lorem ipsum dolor sit
            amet consectetur adipisicing elit. Quos incidunt assumenda deserunt
            harum quasi totam rem culpa? Quasi sequi, ducimus autem
            exercitationem, sed quibusdam voluptates atque ullam eos, ipsa
            nostrum? Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Mollitia ut corrupti possimus dignissimos non, sapiente in,
            reiciendis incidunt nostrum omnis deserunt tempore. Adipisci
            repudiandae similique quidem ex consequatur repellat corporis?
          </span>
        </div>

        <div class="col-sm-12 text-center">
          <p style="font-weight: bolder; font-size: 250%; margin-top: 8%">
            Why E-mart?
          </p>
        </div>
        <div class="col-sm-4">
          <i class="fas fa-shipping-fast"></i>
          <p>Fast Delivery</p>
          <span
            >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus
            laborum enim accusamus odit molestias beatae magni quidem, impedit,
            porro dolorum commodi natus id quasi saepe et ipsum accusantium
            aspernatur pariatur.</span
          >
        </div>
        <div class="col-sm-4">
          <i class="fas fa-money-bill-alt"></i>
          <p>Affordable Prices</p>
          <span
            >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus
            laborum enim accusamus odit molestias beatae magni quidem, impedit,
            porro dolorum commodi natus id quasi saepe et ipsum accusantium
            aspernatur pariatur.</span
          >
        </div>
        <div class="col-sm-4">
          <i class="fas fa-sync-alt"></i>
          <p>Quick Refund</p>
          <span
            >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus
            laborum enim accusamus odit molestias beatae magni quidem, impedit,
            porro dolorum commodi natus id quasi saepe et ipsum accusantium
            aspernatur pariatur.</span
          >
        </div>
      </div>
    </div>

    <footer class="text-white text-center text-lg-start footer-bg mt-5">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row mt-4 mb-5">
          <!--Grid column-->
          <div class="col-xs-12 col-sm-12 col-lg-6 col-md-12">
            <img src="Images/Logo2.png" alt="" width="45%" />
            <!-- <p style="margin-top: 40px;">
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
              voluptatum deleniti atque corrupti.
            </p> -->

            <!-- <p style="margin-top: 10%; font-size:4%;">Stay in touch with us</p> -->
            <p class="mt-5 mb-4">Stay in touch with us</p>
            <div>
              <!-- Facebook -->
              <a type="button" class="btn btn-floating btn-light btn-lg"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <!-- Instagram -->
              <a type="button" class="btn btn-floating btn-light btn-lg"
                ><i class="fab fa-instagram"></i
              ></a>
              <!-- Twitter -->
              <a type="button" class="btn btn-floating btn-light btn-lg"
                ><i class="fab fa-twitter"></i
              ></a>
              <!-- Github  -->
              <a type="button" class="btn btn-floating btn-light btn-lg"
                ><i class="fab fa-github"></i
              ></a>
              <!-- Linkedin -->
              <a type="button" class="btn btn-floating btn-light btn-lg"
                ><i class="fab fa-linkedin"></i
              ></a>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-xs-6 col-sm-6 col-lg-3 col-md-6 mt-5">
            <p style="font-size: x-large; font-weight: bold">Contact Us</p>

            <ul class="fa-ul" style="margin-left: 0px">
              <li class="mb-3 text-decoration-none">
                <p>
                  <i class="fas fa-home m-2"></i
                  ><span>DHA PHASE 3, Lahore, Pakistan</span>
                </p>
              </li>
              <li class="mb-3">
                <p>
                  <i class="fas fa-envelope m-2"></i
                  ><span>emartoffical@gmail.com</span>
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
</html>
