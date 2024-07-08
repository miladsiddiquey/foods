<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Store Info Page</title>

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
            <li><a href="index.php">Home</a></li>
            <li><a href="store-info.php" class="active">Store Info</a></li>
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

    <!--===================== store info =============================  -->
    <main class="store-info">
      <div class="container">
        <div class="store-info-map">
          <h3>Our Location</h3>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2919.9249964743994!2d-78.82119512385967!3d42.95878497114361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d3729466a7288b%3A0x72b0c4ff3042a065!2s3500%20Main%20St%2C%20Buffalo%2C%20NY%2014226%2C%20USA!5e0!3m2!1sen!2sbd!4v1703144122162!5m2!1sen!2sbd"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>

        <div class="store-info-more">
          <div class="store-info-more-box">
            <h4>Contact Info</h4>
            <ul class="store-info-box-shadow">
              <li>3500 Main St Suite 230 Buffalo, NY 14226 (716) 275-5555</li>
              <li>Phone: 203-275-8798</li>
              <li>Phone: 203-275-8033</li>
            </ul>
          </div>
          <div class="store-info-more-box">
            <h4>Opening Day</h4>
            <div class="store-info-more-grid store-info-box-shadow">
              <ul class="store-info-more-grid-left">
                <li><span>Monday</span> <span>11:00 am - 11:30 pm</span></li>
                <li><span>Monday</span> <span>11:00 am - 11:30 pm</span></li>
                <li><span>Monday</span> <span>11:00 am - 11:30 pm</span></li>
              </ul>
              <ul class="store-info-more-grid-right">
                <li><span>Monday</span> <span>11:00 am - 11:30 pm</span></li>
                <li><span>Monday</span> <span>11:00 am - 11:30 pm</span></li>
                <li><span>Monday</span> <span>11:00 am - 11:30 pm</span></li>
                <li><span>Monday</span> <span>11:00 am - 11:30 pm</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!--===================== store info  end=============================  -->

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
