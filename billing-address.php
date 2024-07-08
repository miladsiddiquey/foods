<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Food</title>

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

    <!-- ==================== header end======================== -->
    <section class="order-food">
      <div class="container">
        <div class="order-food-content">
          <div class="order-food-left">
            <div class="billing">
              <div class="order-food-left-title mb-3">
                <h3>Billing Address</h3>
              </div>

              <div class="your-recent-add">
                <div class="address-box">
                  <input type="radio" name="billadress" id="bill1" />
                  <label for="bill1">
                    <h5>Home</h5>
                    <small>Sylhet, Bangladesh</small>
                  </label>
                  <button
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                  >
                    <i class="fa-solid fa-pen-to-square"></i> Edit
                  </button>
                </div>
                <div class="address-box">
                  <input type="radio" name="billadress" id="bill2" />
                  <label for="bill2">
                    <h5>Office</h5>
                    <small>Sylhet, Bangladesh</small>
                  </label>
                  <button
                    type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                  >
                    <i class="fa-solid fa-pen-to-square"></i> Edit
                  </button>
                </div>
              </div>

              <form action="/" class="billing-address mt-3">
                <div class="form-input mb-2">
                  <input
                    type="text"
                    name="naem"
                    id="naem"
                    placeholder="Enter Your Full Name "
                  />
                </div>

                <div class="form-input">
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Enter Your Email Address"
                  />
                </div>

                <div class="form-grid gap-2 mt-2 mb-2">
                  <div class="form-input">
                    <select name="country" id="Country">
                      <option value="ban">Bangladesh</option>
                      <option value="ban">Bangladesh</option>
                      <option value="ban">Bangladesh</option>
                      <option value="ban">Bangladesh</option>
                    </select>
                  </div>

                  <div class="form-input">
                    <input
                      type="text"
                      name="city"
                      id="city"
                      placeholder="Enter Your City Name "
                    />
                  </div>

                  <div class="form-input">
                    <input
                      type="number"
                      name="zip-code"
                      placeholder="Enter Your Zip Code"
                      oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');"
                    />
                  </div>
                  <div class="form-input">
                    <input
                      type="tel"
                      name="tel"
                      placeholder="Enter Your Phone Number "
                      oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');"
                    />
                  </div>
                </div>

                <div class="form-input mb-4">
                  <input
                    type="text"
                    name="naem"
                    id="naem"
                    placeholder="Enter Your Full Address "
                  />
                </div>

                <div class="sign-for-order" style="text-align: left">
                  <button type="button">ADD</button>
                </div>
              </form>

              <div class="edit-address-modal">
                <div
                  class="modal fade"
                  id="exampleModal"
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
                          style="font-size: var(--normal-font)"
                        >
                          Edit Your Address
                        </h5>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <form action="/" class="billing-address mt-3">
                          <div class="form-input mb-2">
                            <input
                              type="text"
                              name="naem"
                              id="naem"
                              placeholder="Enter Your Full Name "
                            />
                          </div>

                          <div class="form-input">
                            <input
                              type="email"
                              name="email"
                              id="email"
                              placeholder="Enter Your Email Address"
                            />
                          </div>

                          <div class="form-grid gap-2 mt-2 mb-2">
                            <div class="form-input">
                              <select name="country" id="Country">
                                <option value="ban">Bangladesh</option>
                                <option value="ban">Bangladesh</option>
                                <option value="ban">Bangladesh</option>
                                <option value="ban">Bangladesh</option>
                              </select>
                            </div>

                            <div class="form-input">
                              <input
                                type="text"
                                name="city"
                                id="city"
                                placeholder="Enter Your City Name "
                              />
                            </div>

                            <div class="form-input">
                              <input
                                type="number"
                                name="zip-code"
                                placeholder="Enter Your Zip Code"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');"
                              />
                            </div>
                            <div class="form-input">
                              <input
                                type="tel"
                                name="tel"
                                placeholder="Enter Your Phone Number "
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');"
                              />
                            </div>
                          </div>

                          <div class="form-input mb-4">
                            <input
                              type="text"
                              name="naem"
                              id="naem"
                              placeholder="Enter Your Full Address "
                            />
                          </div>

                          <div class="sign-for-order" style="text-align: left">
                            <button type="button">Confirm</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- contact  -->

            <!-- contact  end  -->
          </div>
          <div class="order-food-right">
            <div class="your-order-box">
              <div class="your-order-box-header">
                <h4>Your Order</h4>
              </div>

              <div class="sign-for-order">
                <button type="button" class="login-modal-btn">Sign In</button>
              </div>

              <div class="your-order-box-content"></div>

              <div class="your-order-price">
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
                  <a href="#" class="sure-modal-btn">Confirm Order </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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

    <!-- style for billling  -->

    <style>
      .form-input select {
        width: 100%;
        border: 1px solid var(--border-color);
        background: var(--white);
        padding: 14px 20px;
        margin-top: 5px;
        outline: none;
      }
      .address-box {
        padding: 15px 20px;
        border-radius: 10px;
        background: #fff;

        display: grid;
        grid-template-columns: 20px 1fr;

        margin-bottom: 15px;
        border: 1px solid var(--text-color);
        gap: 15px;
        position: relative;
      }

      .address-box button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 20px;
        padding: 8px 15px;
        border-radius: 20px;
        color: var(--white);
        background: var(--main-color);
        border: none;
        font-size: var(--smallest-font);
        display: flex;
        align-items: center;
        gap: 5px;
        font-weight: 600;
      }

      .address-box h5 {
        color: #111;
        font-size: var(--small-font);
        font-weight: 600;
        margin-bottom: -2px;
      }

      .address-box small {
        font-size: var(--smallest-font);
      }
    </style>
    <!-- style for billling  end  -->

    <!-- js link js  -->
    <script src="js/jq.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <!-- <script src="/js/tom-select.complete.js"></script> -->
    <script src="js/script.js"></script>
  </body>
</html>
