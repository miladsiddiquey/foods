<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>

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

    <section class="user-profile">
      <div class="container">
        <div class="order-food-left-title">
          <h3>Profile</h3>
        </div>

        <div class="profile-content">
          <div class="profile-card-header profile-img">
            <img
              src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png"
              alt="profile"
            />
          </div>

          <div class="profile-card">
            <div class="profile-card-header">
              <div>
                <h4>Ali Khan Uddin</h4>
                <small>Joined April 2020</small>
              </div>
            </div>
            <ul class="profile-card-body">
              <li>
                <i class="fa-regular fa-envelope"></i>
                <span>email@email.com</span>
              </li>
              <li>
                <i class="fa-solid fa-phone"></i>
                <span>+880-105-5405541</span>
              </li>
              <li>
                <i class="fa-regular fa-calendar-days"></i>
                <span>12-04-2000</span>
              </li>
              <li>
                <i class="fa-solid fa-location-dot"></i>
                <span>Sylhet,Bangladesh</span>
              </li>
            </ul>
            <div class="text-end">
              <button
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#profileedit"
              >
                Edit
              </button>
            </div>
          </div>
        </div>

        <div class="profile-edit-modal">
          <div
            class="modal fade"
            id="profileedit"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content" style="border-radius: 20px">
                <div class="modal-header">
                  <h5
                    class="modal-title"
                    id="exampleModalLabel"
                    style="font-size: var(--small-font)"
                  >
                    Edit Profile
                  </h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body pb-4">
                  <form action="#" method="post" class="signup-form-content">
                    <div class="form-grid gap-2 mb-3">
                      <div class="form-input">
                        <input
                          type="text"
                          name="fname"
                          id="fname "
                          placeholder="Type your First Name "
                        />
                      </div>
                      <div class="form-input">
                        <input
                          type="text"
                          name="lname"
                          id="lname "
                          placeholder="Type your Last Name "
                        />
                      </div>
                      <div class="form-input">
                        <input
                          type="email"
                          name="email"
                          id="email "
                          placeholder="Type your Email "
                        />
                      </div>

                      <div class="form-input">
                        <input
                          type="tel"
                          name="phone"
                          id="phone "
                          placeholder="Type your Phone"
                        />
                      </div>
                      <div class="form-input">
                        <input
                          type="date"
                          name="date"
                          id="date "
                          placeholder="Type your date"
                        />
                      </div>
                      <div class="form-input">
                        <input
                          type="text"
                          name="city"
                          id="city "
                          placeholder="Type your city"
                        />
                      </div>
                      <div class="form-input">
                        <input
                          type="text"
                          name="States"
                          id="States "
                          placeholder="Type your States"
                        />
                      </div>
                      <div class="form-input">
                        <input
                          type="text"
                          name="Zip"
                          id="Zip "
                          placeholder="Type your Zip"
                        />
                      </div>
                    </div>

                    <div class="form-btn gap-2">
                      <button
                        class="form-cancel-btn"
                        type="reset"
                        style="
                          border-radius: 10px;
                          font-size: var(--small-font);
                        "
                      >
                        Cancel
                      </button>
                      <button
                        type="submit"
                        style="
                          border-radius: 10px;
                          font-size: var(--small-font);
                        "
                      >
                        Confirm
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="order-list pt-5">
      <div class="container">
        <div class="order-food-left-title">
          <h3>Recent Orders</h3>
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
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- for profile   -->
    <style>
      .user-profile {
        padding-top: 120px;
      }
      .profile-card {
        border: 1px solid var(--text-color);
        background: #fff;
        padding: 30px 20px 30px;
        border-radius: 10px;
      }

      ::placeholder {
        font-size: var(--small-font);
      }

      .profile-card-header {
        display: flex;
        align-items: center;
        gap: 10px;
      }
      .profile-card-header img {
        width: 100%;
        /* height: 250px; */
        aspect-ratio: 4/3;
        object-fit: cover;
        background: #fff;
        border-radius: 10px;
      }

      .profile-img {
        background: #fff;
        border: 1px solid var(--text-color);
        padding: 10px;
        border-radius: 10px;
      }

      .profile-card-header h5 {
        color: #111;
        font-size: var(--normal-font);
        font-weight: 600;
      }

      .profile-card-header small {
        color: #555;
        font-size: var(--smallest-font);
        font-weight: 400;
      }

      .profile-content {
        display: grid;
        grid-template-columns: 400px 1fr;
        gap: 20px;
      }

      .profile-content button {
        padding: 7px 15px;
        color: var(--white);
        background: var(--main-color);
        font-size: var(--small-font);
        font-weight: 500;
        border-radius: 5px;
        border: none;
      }

      .profile-card-body {
        margin-top: 15px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
        margin-bottom: 15px;
      }

      .profile-card-body li {
        padding: 10px;
        border-radius: 10px;
        background: #ffc40062;
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .profile-card-body li i {
        color: var(--white);
        background: var(--main-color);
        width: 40px;
        height: 40px;
        border-radius: 10px;
        text-align: center;
        line-height: 40px;
        font-size: 18px;
      }

      .profile-card-body li span {
        color: #111;
        font-size: var(--small-font);
        font-weight: 500;
      }

      @media (max-width: 992px) {
        .profile-content {
          grid-template-columns: 250px 1fr;
        }
        .profile-img {
          align-self: baseline;
        }
      }
      @media (max-width: 768px) {
        .profile-content {
          grid-template-columns: 1fr;
        }
      }
      @media (max-width: 500px) {
        .profile-card-body {
          grid-template-columns: 1fr;
        }
      }
    </style>
    <!-- for profile end  -->

    <!--  this one is for table order  -->

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

    <!--  this one is for table order  -->

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
