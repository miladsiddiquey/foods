<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Details</title>

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
            <li><a href="store-info.php">Store Info</a></li>
            <li><a href="order-online.php" class="active">Online Order</a></li>
            <ul>
              <li><a href="#" class="login-modal-btn">Login</a></li>
              <li><a href="signup.php">Sign up</a></li>
            </ul>
          </ul>
          <i class="fa-solid fa-bars" id="menu-bar"></i>
        </div>
      </div>
    </header>

    <section class="order-list order-page-content">
      <div class="container">
        <div class="order-page-header">
          <h3 style="font-size: var(--semi-font)">Order Id: #1654165153</h3>
          <small style="font-size: var(--smallest-font)"
            >June 1, 2020, 08:22 AM</small
          >
          <ul class="d-flex gap-2 mt-2 mb-3">
            <li class="btn btn-sm btn-dark">Pending</li>
            <li class="btn btn-sm btn-danger">Unpaid</li>
          </ul>
        </div>

        <div class="order-page-body">
          <h5 style="font-size: var(--medium-font); font-weight: 600">
            Food List
          </h5>

          <div class="order-page-box mt-2">
            <ul class="food-details">
              <li>
                <div class="food-details-left">
                  <div class="food-details-left-img">
                    <img src="img/Rectangle 93.png" alt="img" />
                  </div>
                  <div class="food-details-left-text">
                    <h5>5 PC BUFFALO Wings</h5>
                    <small
                      >Served with some celery , 1 dressing &amp; at most 1
                      Flavors.</small
                    >
                    <h6>$6.57 X 4</h6>
                  </div>
                </div>
                <div class="food-details-right">
                  <h6>$24.57</h6>
                </div>
              </li>
              <li>
                <div class="food-details-left">
                  <div class="food-details-left-img">
                    <img src="img/Rectangle 93.png" alt="img" />
                  </div>
                  <div class="food-details-left-text">
                    <h5>5 PC BUFFALO Wings</h5>
                    <small
                      >Served with some celery , 1 dressing &amp; at most 1
                      Flavors.</small
                    >
                    <h6>$6.57 X 4</h6>
                  </div>
                </div>
                <div class="food-details-right">
                  <h6>$24.57</h6>
                </div>
              </li>
              <li>
                <div class="food-details-left">
                  <div class="food-details-left-img">
                    <img src="img/Rectangle 93.png" alt="img" />
                  </div>
                  <div class="food-details-left-text">
                    <h5>5 PC BUFFALO Wings</h5>
                    <small
                      >Served with some celery , 1 dressing &amp; at most 1
                      Flavors.</small
                    >
                    <h6>$6.57 X 4</h6>
                  </div>
                </div>
                <div class="food-details-right">
                  <h6>$24.57</h6>
                </div>
              </li>
              <li>
                <div class="food-details-left">
                  <div class="food-details-left-img">
                    <img src="img/Rectangle 93.png" alt="img" />
                  </div>
                  <div class="food-details-left-text">
                    <h5>5 PC BUFFALO Wings</h5>
                    <small
                      >Served with some celery , 1 dressing &amp; at most 1
                      Flavors.</small
                    >
                    <h6>$6.57 X 4</h6>
                  </div>
                </div>
                <div class="food-details-right">
                  <h6>$24.57</h6>
                </div>
              </li>
            </ul>
          </div>

          <div class="order-page-final mt-4 row">
            <div class="col-md-8 ">
                <h4 class="mb-3 " style="font-size: var(--medium-font);">Biiling Address</h4>

                <ul>
                    <li class="d-flex mb-2  gap-2"  style="font-size: var(--small-font);"><i class="fa-regular fa-user mt-1" style="color: var(--main-color);"></i> <span>Atr Uddin</span></li>
                    <li class="d-flex mb-2 gap-2" style="font-size: var(--small-font);"><i class="fa-solid fa-location-dot mt-1" style="color: var(--main-color);"></i><span>101 Zindabazar,Sylhet,Bangladesh</span></li>
                    <li class="d-flex mb-2 gap-2" style="font-size: var(--small-font);"><i class="fa-solid fa-phone-volume mt-1" style="color: var(--main-color);"></i><span>+880-156165156</span></i></li>
                </ul>
            </div>
        
            <div class="your-order-price col-md-4 " >
              <div class="your-order-price-s-content">
                <div class="your-order-price-s">
                  <span>Subtotal</span>
                  <span>$19.35</span>
                </div>
                <div class="your-order-price-s">
                  <span>Tax</span>
                  <span>$4.98</span>
                </div>
              </div>
              <div class="total-price">
                <h6>Total :</h6>
                <h5>$21.87</h5>
              </div>
              <div class="confirm-order">
                <a href="#" class="sure-modal-btn">Order Again </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <style>
      .order-page-content .container {
        margin-top: 120px;
        box-shadow: 0 0 9px -1px #00000010;
        padding: 30px 20px 40px;
      }
      .order-page-content .container .food-details {
        box-shadow: 0 0 9px -1px #00000010;
      }

      .order-page-final .your-order-price-s,.order-page-final .total-price {
        grid-template-columns: 1fr 50px ;
        text-align: right;
       
      }

      @media (max-width:768px) {
        .order-page-final .col-md-8 {
            order: 1;
            margin-top: 20px ;
        }
      }

    </style>

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
