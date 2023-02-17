<!DOCTYPE html>
<html lang="en">

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
            <a class="navbar-brand" href="./Home.html">
                <img src="./images/Logo.png" class="me-2 m-0 p-0" height="35" alt="" loading="lazy" />
            </a>
            <img src="./images/Top.png" class="me-2 m-0 p-0" id="topb" height="25" alt="" loading="lazy" />

            <section class="mt-2 mb-2 d-inline-block justify-content-end">
                <a class="btn btn-outline-light btn-floating m-0" href="./loginpage.php" role="button"><i
                        class="fa fa-sign-in"> Admin Page [Login]</i></a>
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

    <!--Image Slider Start-->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="./images/B1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="./images/B2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="./images/B3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="./images/B4.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Image Slider End-->

    <hr style="padding: 0px; margin:4px">
    <center>
        <h3><em>Welcome to O'Clock </em></h3>
    </center>
    <hr style="padding: 0px; margin-bottom:8px; margin-top:4px">

    <h3>Latest Products</h3>
    <div class="container">
        <div class="row">
            <!--Product-->
            <?php
            $databaseHost = 'localhost';
            $databaseName = 'OCLOCK';
            $databaseUsername = 'root';
            $databasePassword = ''; 
                                    
            $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
                                    
            $result = mysqli_query($mysqli, "Select * from products");

            $i = 0;
            while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                if($i<4)
                {
                    echo '<div class="col-md-3 col-sm-6 col-6">'."\n";
                    echo '    <div class="product-grid">'."\n";
                    echo '        <div class="product-image">'."\n";
                    echo '            <a href="./Detail.html">'."\n";
                    echo '                <img class="pic-1" src="./Images/'.$row["image"].'">'."\n";
                    echo '            </a>'."\n";
                    echo '            <span class="product-new-label">New</span>'."\n";
                    echo '            <span class="product-discount-label">Arrival</span>'."\n";
                    echo '            <h3 class="title"><a href="./Detail.html">'.$row["name"].'</a></h3>'."\n";
                    echo '        </div>'."\n";
                    echo '    </div>'."\n";
                    echo '</div>'."\n";
                }
                else
                {
                    break;
                }
                $i++;
            }
            ?>
            <!--Product End-->
        </div>
    </div>
    <!--Products Section End-->

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