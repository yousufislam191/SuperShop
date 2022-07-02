<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <!-- Favicons -->
  <link href="assets/icons/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/vendor/hero-animate/css/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/vendor/hero-animate/css/flaticon.css" />
  <link rel="stylesheet" href="assets/vendor/hero-animate/css/slicknav.min.css" />
  <link rel="stylesheet" href="assets/vendor/hero-animate/css/jquery-ui.min.css" />
  <link rel="stylesheet" href="assets/vendor/hero-animate/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/vendor/hero-animate/css/animate.css" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Catagory</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Juice</a></li>
              <li><a href="#">Burger</a></li>
              <li><a href="#">Coffee</a></li>
              <li><a href="#">Soup</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Reviews</a></li>
          <li><a class="nav-link scrollto" href="#team">Our Team</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" id="home-login-btn" data-bs-toggle="modal" data-bs-target="#modalLogin" style="cursor: pointer;">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!-- login bootstrap -->
  <div class="modal" tabindex="-1" id="modalLogin">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header justify-content-center d-flex">
          <h5 class="modal-title">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="serverSite/loginSubmit.php" method="POST" id="loginForm">
            <div class="form-group">
              <label for="loginEmail">Email Address</label>
              <input type="email" class="form-control" id="login-email" name="loginEmail" placeholder="Enter email">
              <span id="erroremail" style="color: red;"></span>
            </div><br>
            <div class="form-group">
              <label for="loginPassword">Password</label>
              <input type="text" class="form-control" id="login-password" name="loginPassword" placeholder="Password">
              <span id="errorpass" style="color: red;"></span>
            </div><br>
            <div class="d-grid col-6 mx-auto">
              <button type="submit" class="btn btn-outline-primary text-uppercase btn-block" style="font-weight: 600; transition: .3s;" onclick="return loginValidation()">Login</button>
            </div>
          </form><br>
          <div class="justify-content-center d-flex">
            <p class="d-inline">I have not an account?</p>
            <p class="signin-end-text d-inline" id="reg-btn" data-bs-toggle="modal" data-bs-target="#modalRegistration" data-bs-dismiss="modal" aria-label="Close">Register now</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End login -->

  <!-- registration bootstrap -->
  <div class="modal" tabindex="-1" id="modalRegistration">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header justify-content-center d-flex">
          <h5 class="modal-title">Registration</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="serverSite/registrationSubmit.php" method="POST" id="registrationForm">
            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" class="form-control" id="registration-name" name="name" placeholder="Enter your name">
              <span id="errorname" style="color: red;"></span>
            </div><br>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" id="registration-email" name="email" placeholder="Enter email">
              <span id="erroremail" style="color: red;"></span>
            </div><br>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" id="registration-password" name="password" placeholder="Password">
              <span id="errorpass" style="color: red;"></span>
            </div><br>
            <div class="d-grid col-6 mx-auto">
              <button type="submit" class="btn btn-outline-success text-uppercase btn-block" style="font-weight: 600; transition: .3s;" onclick="return registrationValidation()">Register</button>
            </div>
          </form><br>
          <div class="justify-content-center d-flex">
            <p class="d-inline">I have an account?</p>
            <p class="signin-end-text d-inline" id="login-btn" data-bs-toggle="modal" data-bs-target="#modalLogin" data-bs-dismiss="modal" aria-label="Close">Login now</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End registration -->

  <!-- Hero section -->
  <section class="hero-section">
    <div class="hero-slider owl-carousel">
      <div class="hs-item set-bg" data-setbg="assets/images/bg.jpg">
        <div class="container txt-area">
          <div class="row">
            <div class="col-xl-6 col-lg-7 text-white">
              <span>New Arrivals</span>
              <h2>denim jackets</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
              <a href="#" class="site-btn sb-line">DISCOVER</a>
              <a href="#" class="site-btn sb-white">ADD TO CART</a>
            </div>
          </div>
          <div class="offer-card text-white">
            <span>from</span>
            <h2>$29</h2>
            <p>SHOP NOW</p>
          </div>
        </div>
      </div>
      <div class="hs-item set-bg" data-setbg="assets/images/bg-2.jpg">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-7 text-white">
              <span>New Arrivals</span>
              <h2>denim jackets</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
              <a href="#" class="site-btn sb-line">DISCOVER</a>
              <a href="#" class="site-btn sb-white">ADD TO CART</a>
            </div>
          </div>
          <div class="offer-card text-white">
            <span>from</span>
            <h2>$29</h2>
            <p>SHOP NOW</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="slide-num-holder" id="snh-1"></div>
    </div>
  </section>
  <!-- Hero section end -->

  <!-- letest product section -->
  <section class="top-letest-product-section">
    <div class="container">
      <div class="section-title">
        <h2>LATEST PRODUCTS</h2>
      </div>
      <div class="product-slider owl-carousel">
        <div class="product-item">
          <div class="pi-pic">
            <img src="assets/product/1.jpg" alt="">
            <div class="pi-links">
              <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
          </div>
          <div class="pi-text">
            <h6>$35,00</h6>
            <p>Flamboyant Pink Top </p>
          </div>
        </div>
        <div class="product-item">
          <div class="pi-pic">
            <div class="tag-new">New</div>
            <img src="assets/product/2.jpg" alt="">
            <div class="pi-links">
              <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
          </div>
          <div class="pi-text">
            <h6>$35,00</h6>
            <p>Flamboyant Pink Top </p>
          </div>
        </div>
        <div class="product-item">
          <div class="pi-pic">
            <img src="assets/product/3.jpg" alt="">
            <div class="pi-links">
              <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
          </div>
          <div class="pi-text">
            <h6>$35,00</h6>
            <p>Flamboyant Pink Top </p>
          </div>
        </div>
        <div class="product-item">
          <div class="pi-pic">
            <img src="assets/product/4.jpg" alt="">
            <div class="pi-links">
              <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
          </div>
          <div class="pi-text">
            <h6>$35,00</h6>
            <p>Flamboyant Pink Top </p>
          </div>
        </div>
        <div class="product-item">
          <div class="pi-pic">
            <img src="assets/product/6.jpg" alt="">
            <div class="pi-links">
              <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
          </div>
          <div class="pi-text">
            <h6>$35,00</h6>
            <p>Flamboyant Pink Top </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- letest product section end -->

  <!-- Product filter section -->
  <section class="product-filter-section">
    <div class="container">
      <div class="section-title">
        <h2>BROWSE TOP SELLING PRODUCTS</h2>
      </div>
      <ul class="product-filter-menu">
        <li><a href="#">TOPS</a></li>
        <li><a href="#">JUMPSUITS</a></li>
        <li><a href="#">LINGERIE</a></li>
        <li><a href="#">JEANS</a></li>
        <li><a href="#">DRESSES</a></li>
        <li><a href="#">COATS</a></li>
        <li><a href="#">JUMPERS</a></li>
        <li><a href="#">LEGGINGS</a></li>
      </ul>

      <div class="row g-4">
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <img src="assets/product/5.jpg" class="card-img-top" alt="...">
            <div class="pl-links">
              <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
            <div class="card-body pi-text">
              <div class="d-flex justify-content-between">
                <p>Flamboyant Pink Top</p>
                <h5>$35,00</h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <img src="assets/product/6.jpg" class="card-img-top" alt="...">
            <div class="pl-links">
              <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
            <div class="card-body pi-text">
              <div class="d-flex justify-content-between">
                <p>Flamboyant Pink Top </p>
                <h5>$35,00</h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <img src="assets/product/7.jpg" class="card-img-top" alt="...">
            <div class="pl-links">
              <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
            <div class="card-body pi-text">
              <div class="d-flex justify-content-between">
                <p>Flamboyant Pink Top </p>
                <h5>$35,00</h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <img src="assets/product/8.jpg" class="card-img-top" alt="...">
            <div class="pl-links">
              <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
            <div class="card-body pi-text">
              <div class="d-flex justify-content-between">
                <p>Flamboyant Pink Top </p>
                <h5>$35,00</h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <img src="assets/product/9.jpg" class="card-img-top" alt="...">
            <div class="pl-links">
              <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
            <div class="card-body pi-text">
              <div class="d-flex justify-content-between">
                <p>Flamboyant Pink Top </p>
                <h5>$35,00</h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <img src="assets/product/10.jpg" class="card-img-top" alt="...">
            <div class="pl-links">
              <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
            <div class="card-body pi-text">
              <div class="d-flex justify-content-between">
                <p>Flamboyant Pink Top </p>
                <h5>$35,00</h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <img src="assets/product/11.jpg" class="card-img-top" alt="...">
            <div class="pl-links">
              <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
            <div class="card-body pi-text">
              <div class="d-flex justify-content-between">
                <p>Flamboyant Pink Top </p>
                <h5>$35,00</h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <img src="assets/product/12.jpg" class="card-img-top" alt="...">
            <div class="pl-links">
              <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
            <div class="card-body pi-text">
              <div class="d-flex justify-content-between">
                <p>Flamboyant Pink Top </p>
                <h5>$35,00</h5>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center pt-5">
          <button class="site-btn sb-line sb-dark">LOAD MORE</button>
        </div>
      </div>
  </section>
  <!-- Product filter section end -->


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Arsha</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Yousuf</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <script src="assets/vendor/hero-animate/js/jquery-3.2.1.min.js"></script>
  <script src="assets/vendor/hero-animate/js/bootstrap.min.js"></script>
  <script src="assets/vendor/hero-animate/js/jquery.slicknav.min.js"></script>
  <script src="assets/vendor/hero-animate/js/owl.carousel.min.js"></script>
  <script src="assets/vendor/hero-animate/js/jquery.nicescroll.min.js"></script>
  <script src="assets/vendor/hero-animate/js/jquery.zoom.min.js"></script>
  <script src="assets/vendor/hero-animate/js/jquery-ui.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
  <script src="js/login.js"></script>
  <script src="js/registration.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>