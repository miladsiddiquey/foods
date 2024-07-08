<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>

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
            <a href="Home.php"><img src="img/logo.png" alt="img" /></a>
          </h1>
          <ul class="nav-bar">
            <li><a href="index.php">Home</a></li>
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

    <!-- ======================= sign up ============================== -->

    <div class="signup-form">
      <div class="container">
        <form action="#" method="post" class="signup-form-content">
          <h3>Create Your Account</h3>

          <div class="form-grid">
            <div class="form-input">
              <label for="fname">Full Name</label>
              <input
                type="text"
                name="fname"
                id="fname "
                placeholder="Type your First Name "
              />
            </div>
            <div class="form-input">
              <label for="lname">Last Name</label>
              <input
                type="text"
                name="lname"
                id="lname "
                placeholder="Type your Last Name "
              />
            </div>
            <div class="form-input">
              <label for="email">Email</label>
              <input
                type="email"
                name="email"
                id="email "
                placeholder="Type your Email "
              />
            </div>
            <div class="form-input">
              <label for="password">Password</label>
              <input
                type="password"
                name="password"
                id="password "
                placeholder="Type your Password "
              />
            </div>
            <div class="form-input">
              <label for="cpassword">Confirm Password</label>
              <input
                type="password"
                name="cpassword"
                id="cpassword "
                placeholder="Type your Confirm Password "
              />
            </div>
            <div class="form-input">
              <label for="phone">Phone</label>
              <input
                type="tel"
                name="phone"
                id="phone "
                placeholder="Type your Phone"
              />
            </div>
            <div class="form-input">
              <label for="date">Date</label>
              <input
                type="date"
                name="date"
                id="date "
                placeholder="Type your date"
              />
            </div>
            <div class="form-input">
              <label for="city">city</label>
              <input
                type="text"
                name="city"
                id="city "
                placeholder="Type your city"
              />
            </div>
            <div class="form-input">
              <label for="States">States</label>
              <input
                type="text"
                name="States"
                id="States "
                placeholder="Type your States"
              />
            </div>
            <div class="form-input">
              <label for="Zip">Zip</label>
              <input
                type="text"
                name="Zip"
                id="Zip "
                placeholder="Type your Zip"
              />
            </div>
          </div>

          <div class="form-check">
            <input type="checkbox" name="check" id="check" />
            <label for="check"
              >Agree to our Terms of Use & Privacy Policy ?</label
            >
          </div>

          <div class="form-btn">
            <button type="submit">Confirm</button>
            <button class="form-cancel-btn" type="button">Cancel</button>
          </div>
          <div class="form-cancel">
            <div class="form-cancel-box">
              <h5>😞</h5>
              <h4>Do you really want to cancel?</h4>
              <div class="form-cancel-box-btn">
                <button type="reset">Confirm</button>
                <button type="button">Cancel</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- ======================= sign up end============================== -->

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

    <script>
      // ===================== form cancel ==================

      const formCanelBtn = document.querySelector(".form-cancel-btn");
      const formCanelContent = document.querySelector(".form-cancel ");
      const formCanelContentCancel = document.querySelector(
        ".form-cancel button[type='button']"
      );
      const formCanelContentOk = document.querySelector(
        ".form-cancel button[type='reset']"
      );

      addItem(formCanelBtn, formCanelContent);
      addRemove(formCanelContentCancel, formCanelContent);
      addRemove(formCanelContentOk, formCanelContent);
      windowRemove(formCanelContent);

      //  ==================================================
    </script>
  </body>
</html>
