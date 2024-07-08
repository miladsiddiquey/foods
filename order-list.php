<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order List</title>

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

    <section class="order-list">
      <div class="container">
        <div class="order-food-left-title">
          <h3>Order List</h3>
          <div class="form-input">
            <input
              type="text"
              name="searchorder"
              id="searchorder"
              placeholder="Search Your Order "
            />
          </div>
        </div>
        <div class="order-table">
          <table class="table table-responsive">
            <thead>
              <tr>
                <th>Order ID</th>
                <th>Date</th>
                <th>Address</th>
                <th>Total</th>
                <th class="text-center">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#1654165153</td>
                <td>June 1, 2020, 08:22 AM</td>
                <td>Bangladesh, 23 Sylhet</td>
                <td>$56</td>
                <td class="text-center">
                  <button type="button" style="--order-sta: #1fbf75">
                    Completed
                  </button>
                </td>
              </tr>
              <tr>
                <td>#1654165153</td>
                <td>June 1, 2020, 08:22 AM</td>
                <td>Bangladesh, 23 Sylhet</td>
                <td>$56</td>
                <td class="text-center">
                  <button type="button" style="--order-sta: #1fbf75">
                    Completed
                  </button>
                </td>
              </tr>
              <tr>
                <td>#1654165153</td>
                <td>June 1, 2020, 08:22 AM</td>
                <td>Bangladesh, 23 Sylhet</td>
                <td>$56</td>
                <td class="text-center">
                  <button type="button" style="--order-sta: #1fbf75">
                    Completed
                  </button>
                </td>
              </tr>
              <tr>
                <td>#1654165153</td>
                <td>June 1, 2020, 08:22 AM</td>
                <td>Bangladesh, 23 Sylhet</td>
                <td>$56</td>
                <td class="text-center">
                  <button type="button" style="--order-sta: #1fbf75">
                    Completed
                  </button>
                </td>
              </tr>
              <tr>
                <td>#1654165153</td>
                <td>June 1, 2020, 08:22 AM</td>
                <td>Bangladesh, 23 Sylhet</td>
                <td>$56</td>
                <td class="text-center">
                  <button type="button" style="--order-sta: #1fbf75">
                    Completed
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <style>
      .order-list {
        padding-top: 120px;
      }

      .order-list input {
        padding: 10px 15px;
      }

      .order-list ::placeholder {
        font-size: var(--small-font);
      }

      .order-list table {
        border: 1px solid var(--text-color);
        border-radius: 10px;
        overflow: hidden;
      }

      .order-list table tr {
        border-bottom: 1px solid var(--text-color);
      }

      .order-list table th,
      .order-list table td {
        border: none;
        padding: 10px 20px;
        font-size: var(--small-font);
        vertical-align: middle;
      }
      .order-list table button {
        background: none;
        border: none;
        white-space: nowrap;
      }
      .order-list table button[type="button"],
      .order-list table a {
        background: var(--order-sta);
        color: var(--white);
        font-size: var(--smallest-font);
        padding: 5px 12px;
        border-radius: 20px;
        border: none;
        font-weight: 600;
        display: inline-block;
        white-space: nowrap;
      }

      @media (max-width: 992px) {
        .order-table {
          overflow-x: auto;
        }
        .order-table table {
          width: 900px;
        }
      }

      @media (max-width: 500px) {
        .order-list input {
          width: 150px;
          padding: 5px 10px;
        }

        .order-table table {
          width: 700px;
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
