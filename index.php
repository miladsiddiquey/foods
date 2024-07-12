<?php
include "./admin/config.php";

$obj = new Database();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- inter font  -->
    <link rel="stylesheet" href="font/inter-font.css" />
    <!-- lato font  -->
    <link rel="stylesheet" href="font/lato-font.css" />
    <!-- css link  -->
    <link rel="stylesheet" href="icon/css/all.min.css" />
    <link rel="stylesheet" href="css/tiny-slider.css" />
    <!-- <link rel="stylesheet" href="/css/tom-select.default.css" /> -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- preloader  -->
    <div class="preloader">
      <img src="icon/loader.gif" alt="loader" />
    </div>

    <!-- preloader end -->

    <!-- ==================== header ======================== -->

    <header>
      <div class="container">
        <div class="header-content">
          <h1 class="logo">
            <a href="index.php"><img src="img/logo.png" alt="img" /></a>
          </h1>
          <ul class="nav-bar">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="store-info.php">Store Info</a></li>
            <li><a href="order-online.php">Online Order</a></li>
            <ul>
              <li><a href="#" class="login-modal-btn">Login</a></li>
              <li><a href="signup.php">Sign up</a></li>
            </ul>
          </ul>
          <i class="fa-solid fa-bars" id="menu-bar"></i>
        </div>
      </div>
    </header>

    <!-- start alert  -->

    <div class="home-modal-first">
      <div class="container">
        <div class="home-modal-first-box">
          <i
            class="fa-solid fa-xmark"
            onclick="parentElement.parentElement.parentElement.remove();"
          ></i>

          <?php
            $obj->select('model_data', '*', null, null, null, null);
            $result = $obj->getResult();
           
            foreach ($result as $row) {
          ?>
         <img src="<?= "./upload-image/" . $row['image']; ?>" alt="img" />
          <h4><?= $row['title'] ?></h4>
          <p><?= $row['paragraph'] ?></p>
          
         <?php } ?>

          
        </div>
      </div>
    </div>

    <!-- start alert end -->

    <div class="login-modal">
      <div class="login-modal-box">
        <div class="login-modal-box-header">
          <h5>Login</h5>
          <i class="fa-solid fa-xmark"></i>
        </div>
        <div class="login-modal-box-body">
          <div class="login-modal-input">
            <label for="email">E-mail*</label>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Enter Your Email"
            />
          </div>
          <div class="login-modal-input">
            <label for="pass">Password*</label>
            <input
              type="password"
              name="password"
              id="pass"
              placeholder="Enter Your Password "
            />
          </div>
          <a href="#">Forgot your password?</a>
          <button type="submit">Login</button>
        </div>
      </div>
    </div>

    <!-- ==================== header end======================== -->

    <!--===================== main banner=============================  -->

    <main class="main-banner">
      <div class="container">
        <div class="main-banner-content">
          <div class="main-banner-content-left">
            <h2>We Believe good food offer great smile</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi.
            </p>
            <a href="order-online.php">Order Online</a>
          </div>
          <div class="main-banner-content-right">
            <div class="main-banner-content-odder-box">
              <img src="img/Rectangle 147.png" alt="img" />
              <a href="order-online.php">Order Online</a>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!--===================== main banner end=============================  -->

    <!-- ================== home info ============================== -->

    <section class="home-info">
      <div class="container">
        <div class="section-header">
          <h2 class="text-center">Information</h2>
        </div>

        <div class="home-info-content grid-3">
          <div class="home-info-box">
            <div class="home-info-box-img">
              <i class="fa-solid fa-hand-point-up"></i>
            </div>
            <h4>Quick Link</h4>
            <ul class="text-center">
              <li><a href="Home.php">Home</a></li>
              <li><a href="store-info.php">Store Info</a></li>
              <li><a href="order-online.php">Online Order</a></li>
            </ul>
          </div>
          <div class="home-info-box">
            <div class="home-info-box-img">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <h4>Our Address</h4>
            <ul class="text-center">
              <li>3500 Main St Suite 230 Buffalo, NY 14226</li>
            </ul>
          </div>
          <div class="home-info-box">
            <div class="home-info-box-img">
              <i class="fa-regular fa-comments"></i>
            </div>
            <h4>Contact us</h4>
            <ul>
              <li class="info-grid">
                <i class="fa-solid fa-phone-volume"></i>
                <a href="#">Phone: 203-275-8798</a>
              </li>
              <li class="info-grid">
                <i class="fa-solid fa-phone-volume"></i>
                <a href="#">Phone: 203-275-8033</a>
              </li>
              <!-- <li class="info-grid">
                <i class="fa-regular fa-envelope"></i>
                <a href="#">Email: info@gmail.com</a>
              </li>
              <li class="info-grid">
                <i class="fa-solid fa-globe"></i>
                <a href="#">Website: www.web.com</a>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- ================== home info end============================== -->

    <!-- ============================== footer -----------------------------==== -->

    <footer>
      <div class="container">
        <ul class="footer-social">
          <li>
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa-brands fa-facebook-messenger"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
          </li>
        </ul>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Consectetur adipiscing elit pellentesque habitant morbi tristique
          senectus. Feugiat vivamus at augue eget arcu dictum.
        </p>
      </div>
      <h6>ALL RIGHTS RESERVED © AMERICA'S BEST WINGS BUFFALO</h6>
    </footer>

    <!-- ============================== footer end-----------------------------==== -->

    <!-- js link js  -->
    <script src="js/jq.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <!-- <script src="/js/tom-select.complete.js"></script> -->
    <script src="js/script.js"></script>
  </body>
</html>
