
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
    <!-- <div class="preloader">
      <img src="icon/loader.gif" alt="loader" />
    </div> -->

    <!-- preloader end -->

    <!-- ==================== header ======================== -->

    <header>
      <div class="container position-relative">
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
              <li>
                <a href="#" class="busket-pc" id="busket-btn"
                  ><i class="fa-solid fa-cart-shopping"></i
                ></a>
              </li>
            </ul>
          </ul>
          <i class="fa-solid fa-bars" id="menu-bar"></i>
        </div>

        <div class="food-busket">
          <div class="your-order-box">
            <div
              class="your-order-box-header d-flex align-items-center justify-content-between"
            >
              <h4>Your Order</h4>
              <i id="busket-close" class="fa-solid fa-xmark"></i>
            </div>

            <div class="sign-for-order">
              <button type="button" class="login-modal-btn">Sign In</button>
            </div>

            <div class="your-order-box-content">
              <div class="your-order-card">
                <div class="your-order-card-left">
                  <h6>No Food Category</h6>
                  <h5>No Food</h5>
                  <h4>$00.00</h4>
                </div>
                <div class="your-order-card-right">
                  <div class="your-order-card-inc-dec">
                    <i class="fa-solid fa-plus"></i>
                    <span>1</span>
                    <i class="fa-solid fa-minus"></i>
                  </div>
                  <button class="btn-delete">
                    <i class="fa-solid fa-trash-can"></i> Remove
                  </button>
                </div>
              </div>
              <div class="your-order-card">
                <div class="your-order-card-left">
                  <h6>No Food Category</h6>
                  <h5>No Food</h5>
                  <h4>$00.00</h4>
                </div>
                <div class="your-order-card-right">
                  <div class="your-order-card-inc-dec">
                    <i class="fa-solid fa-plus"></i>
                    <span>1</span>
                    <i class="fa-solid fa-minus"></i>
                  </div>
                  <button class="btn-delete">
                    <i class="fa-solid fa-trash-can"></i> Remove
                  </button>
                </div>
              </div>
            </div>

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
    </header>

    <style>
      .food-busket {
        position: absolute;
        top: 70px;
        right: 10px;
        display: none;
      }

      #busket-btn {
        border: 1px solid #ff6112;
        color: #ff6112;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        border-radius: 5px;
        margin-left: 10px;
      }

      #busket-close {
        cursor: pointer;
      }

      @media (max-width: 980px) {
        .food-busket .your-order-box {
          width: 270px;
        }
      }
    </style>





    <!-- <div class="login-modal active">
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
    </div> -->

    <!-- ==================== header end======================== -->

    <section class="order-food">
      <div class="container">
        <div class="order-food-content">
          <div class="order-food-left">
            <div class="order-food-left-title">
              <h3>Our Food Menu</h3>
              <button type="button" class="add-more-btn">Add On Food</button>

              <div class="add-more-food-modal">
                <div class="add-more-food-modal-box">
                  <div class="add-more-food-modal-box-header">
                    <h5>Food Details</h5>
                    <i class="fa-solid fa-xmark"></i>
                  </div>
                  <div class="add-more-food-modal-box-body">
                    <ul>
                      <li
                        class="d-flex align-items-center justify-content-between"
                      >
                        <div class="food-details-left">
                          <div class="food-details-left-img">
                            <img src="img/Rectangle 93.png" alt="img" />
                          </div>
                          <div class="food-details-left-text">
                            <h5 class="mb-1">5 PC BUFFALO Wings</h5>

                            <h6>$6.57</h6>
                          </div>
                        </div>
                        <div class="food-details-right">
                          <div class="food-add-plus">
                            <i class="fa-solid fa-plus"></i>
                          </div>
                        </div>
                      </li>

                      <li
                        class="d-flex align-items-center justify-content-between"
                      >
                        <div class="food-details-left">
                          <div class="food-details-left-img">
                            <img src="img/Rectangle 93.png" alt="img" />
                          </div>
                          <div class="food-details-left-text">
                            <h5 class="mb-1">5 PC BUFFALO Wings</h5>

                            <h6>$6.57</h6>
                          </div>
                        </div>
                        <div class="food-details-right">
                          <div class="food-add-plus">
                            <i class="fa-solid fa-plus"></i>
                          </div>
                        </div>
                      </li>
                      <li
                        class="d-flex align-items-center justify-content-between"
                      >
                        <div class="food-details-left">
                          <div class="food-details-left-img">
                            <img src="img/Rectangle 93.png" alt="img" />
                          </div>
                          <div class="food-details-left-text">
                            <h5 class="mb-1">5 PC BUFFALO Wings</h5>

                            <h6>$6.57</h6>
                          </div>
                        </div>
                        <div class="food-details-right">
                          <div class="food-add-plus">
                            <i class="fa-solid fa-plus"></i>
                          </div>
                        </div>
                      </li>
                      <li
                        class="d-flex align-items-center justify-content-between"
                      >
                        <div class="food-details-left">
                          <div class="food-details-left-img">
                            <img src="img/Rectangle 93.png" alt="img" />
                          </div>
                          <div class="food-details-left-text">
                            <h5 class="mb-1">5 PC BUFFALO Wings</h5>

                            <h6>$6.57</h6>
                          </div>
                        </div>
                        <div class="food-details-right">
                          <div class="food-add-plus">
                            <i class="fa-solid fa-plus"></i>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div class="confirm-btn">
                      <button>Confirm Add</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="accordion accordion-flush" id="accordionFlushExample">
              <!-- faq start  -->
              <?php 
                $limit = 4;
                $obj->select('product_faq', "*", null, null, null, $limit);
                $result = $obj->getResult();  

                foreach ($result as $row) {
              ?>

              <div
                class="accordion-item"
                style="border-top: 1px solid var(--text-color)"
              >
                <h2 class="accordion-header" id="heading<?= $row['id'] ?>">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapse<?= $row['id'] ?>"
                    aria-expanded="false"
                    aria-controls="collapse<?= $row['id'] ?>"
                  >
                    <div class="faq-title">
                      <img src="<?= "./upload-image/" . $row['header_image']; ?>" alt="img" />
                      <h4><?= $row['header_title'] ?></h4>
                    </div>
                  </button>
                </h2>
                <div
                  id="collapse<?= $row['id'] ?>"
                  class="accordion-collapse collapse"
                  aria-labelledby="heading<?= $row['id'] ?>"
                  data-bs-parent="#accordionFlushExample"
                >
               
                <?php 
                
                $obj->select('food_menu', "*", null, null, null, null);
                $result = $obj->getResult();  

                foreach ($result as $row) {
              ?>
                <!-- sub category start -->
               
                  <div class="accordion-body">
                    <ul class="food-details">
                      <li>
                        <div class="food-details-left">
                          <div class="food-details-left-img">
                            <img src="img/Rectangle 93.png" alt="img" />
                          </div>
                          <div class="food-details-left-text">
                            <h5><?= $row['product_name'] ?></h5>
                            <small><?= $row['product_description'] ?></small>
                            <h6>$<?= $row['price'] ?></h6>
                          </div>                        
                        </div>                      
                        <div class="food-details-right">
                          <div class="food-add-plus">
                            <i class="fa-solid fa-plus"></i>
                          </div>

                          <button
                            class="view-product simple-modal-btn"
                            date-info="food-modal-main-1"
                          >
                            View Product
                          </button>
                        </div>
                    
                        <div class="simple-modal" id="food-modal-main-1">
                          <div class="simple-modal-box">
                            <div class="simple-modal-header">
                              <h5>Food Details</h5>
                              <i class="fa-solid fa-xmark"></i>
                            </div>

                            <div class="simple-modal-body">
                              <div class="add-more-item-modal">
                                <img src="img/Rectangle 93.png" alt="img" />

                                <div class="add-more-modal-header">
                                  <h4><?= $row['product_name'] ?></h4>
                                  <h5>$<?= $row['price'] ?></h5>
                                </div>
                                <p> <?= $row['product_description'] ?></p>

                                

                                <!-- sub sub faq -->
                                <?php 
                
                                  $obj->select('sub_product', "*", null, null, null, null);
                                  $result = $obj->getResult();  

                                  foreach ($result as $row) {
                                ?>


                                <div class="food-modal-faq">
                                  <div
                                    class="accordion accordion-flush"
                                    id="food-modal-faq"
                                  >
                                    <div class="accordion-item">
                                      <h2
                                        class="accordion-header"
                                        id="food-modal-faq-header-1"
                                      >
                                        <button
                                          class="accordion-button collapsed"
                                          type="button"
                                          data-bs-toggle="collapse"
                                          data-bs-target="#food-modal-faq-body-1"
                                          aria-expanded="false"
                                          aria-controls="food-modal-faq-body-1"
                                        >
                                          Select your wing ( flavor 1)
                                          <span>Required</span>
                                          <small>(Choose 1 item.)</small>
                                        </button>
                                      </h2>
                                      <div
                                        id="food-modal-faq-body-1"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="food-modal-faq-header-1"
                                        data-bs-parent="#food-modal-faq-body-1"
                                      >
                                        <div class="accordion-body">
                                          <div
                                            class="food-input-content food-input-content-1"
                                          >
                                            <div class="food-input-box">
                                              <input
                                                type="checkbox"
                                                name="food-sel"
                                                id="food-sel-1"
                                                value="10"
                                              />
                                              <label for="food-sel-1"
                                                >BBQ</label
                                              >
                                            </div>
                                            <!-- <div class="food-input-box">
                                              <input
                                                type="checkbox"
                                                name="food-sel"
                                                id="food-sel-2"
                                                value="10"
                                              />
                                              <label for="food-sel-2"
                                                >Half Baked</label
                                              >
                                            </div>
                                            <div class="food-input-box">
                                              <input
                                                type="checkbox"
                                                name="food-sel"
                                                id="food-sel-3"
                                                value="10"
                                              />
                                              <label for="food-sel-3"
                                                >Half Baked</label
                                              >
                                            </div>
                                            <div class="food-input-box">
                                              <input
                                                type="checkbox"
                                                name="food-sel"
                                                id="food-sel-4"
                                                value="10"
                                              />
                                              <label for="food-sel-4"
                                                >Half Baked</label
                                              >
                                            </div> -->
                                          </div>
                                        </div>
                                      </div>
                                    </div>



                                  </div>
                                </div>
                                <div class="comment-about-food">
                                  <textarea
                                    name="comment"
                                    id=""
                                    cols="30"
                                    rows="5"
                                    class="food-comment"
                                    placeholder="Spacial Comment"
                                  ></textarea>
                                </div>
                                <div class="__food-price">
                                  <i class="fa-solid fa-minus"></i>
                                  <span>1</span>
                                  <i class="fa-solid fa-plus"></i>
                                </div>

                                <button type="button">
                                  Order Now
                                  <span class="total-price-in-modal"
                                    >$9.99</span
                                  >
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    
                  </div>
                </div>
              </div>

              <?php } ?>
              <?php } ?>
              <?php } ?>
              

            </div>
          </div>
          <div class="order-food-right">
            <div class="your-order-box">
              <div class="your-order-box-header">
                <h4>Your Order</h4>
              </div>

              <div class="sign-for-order">
                <button type="button" class="login-modal-btn">Sign In</button>
              </div>

              <div class="your-order-box-content">
                <div class="your-order-card">
                  <div class="your-order-card-left">
                    <h6>No Food Category</h6>
                    <h5>No Food</h5>
                    <h4>$00.00</h4>
                  </div>
                  <div class="your-order-card-right">
                    <div class="your-order-card-inc-dec">
                      <i class="fa-solid fa-plus"></i>
                      <span>1</span>
                      <i class="fa-solid fa-minus"></i>
                    </div>
                    <button class="btn-delete">
                      <i class="fa-solid fa-trash-can"></i> Remove
                    </button>
                  </div>
                </div>
                <div class="your-order-card">
                  <div class="your-order-card-left">
                    <h6>No Food Category</h6>
                    <h5>No Food</h5>
                    <h4>$00.00</h4>
                  </div>
                  <div class="your-order-card-right">
                    <div class="your-order-card-inc-dec">
                      <i class="fa-solid fa-plus"></i>
                      <span>1</span>
                      <i class="fa-solid fa-minus"></i>
                    </div>
                    <button class="btn-delete">
                      <i class="fa-solid fa-trash-can"></i> Remove
                    </button>
                  </div>
                </div>
              </div>

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

    <!-- ================== add item modal =================== -->

    <div class="simple-modal">
      <div class="simple-modal-box">
        <div class="simple-modal-header">
          <h5>Food Details</h5>
          <i class="fa-solid fa-xmark"></i>
        </div>

        <div class="simple-modal-body">
          <div class="add-more-item-modal">
            <img src="img/Rectangle 93.png" alt="img" />

            <div class="add-more-modal-header">
              <h4>Food Name Here !!</h4>
              <h5>$12.98</h5>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur.
            </p>
            <button type="button">Order Now</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ================== add item modal  end=================== -->

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

    <!-- sure order modal  -->

    <div class="sure-modal">
      <div class="sure-modal-box">
        <i class="fa-solid fa-question"></i>
        <h2>Are You Sure ?</h2>
        <p>Lorem ipsum dolor sit amet.</p>
        <div class="d-flex justify-content-center gap-2">
          <button
            type="button"
            class="success-modal-btn"
            style="--btn-back: var(--main-color)"
          >
            Confirm
          </button>
          <button
            type="button"
            class="close-modal-sure"
            style="--btn-back: #f00"
          >
            Close
          </button>
        </div>
      </div>
    </div>

    <div class="succ-modal">
      <div class="succ-modal-box">
        <i class="fa-solid fa-check"></i>
        <h2>Successfull</h2>
        <p>Lorem ipsum dolor sit amet.</p>
        <div class="d-flex justify-content-center gap-2">
          <button type="button" style="--btn-back: var(--main-color)">
            Close
          </button>
        </div>
      </div>
    </div>

    <!-- sure order modal end   -->

    <!-- Button trigger modal -->
    <button
      type="button"
      class="btn btn-primary"
      data-bs-toggle="modal"
      data-bs-target="#login-req-modal"
    >
      Launch demo modal
    </button>

    <!-- Modal -->
    <div
      class="modal fade"
      id="login-req-modal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <!-- <div class="modal-content">
          
        </div> -->
        <div class="sure-modal-box m-auto">
          <i class="fa-solid fa-exclamation"></i>
          <h2>Please Login</h2>
          <p>To Confirm this order, You Need To Login.</p>
          <div class="d-flex justify-content-center gap-2">
            <button
              type="button"
              class="login-modal-btn"
              style="--btn-back: var(--main-color)"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              Login
            </button>
            <button
              type="button"
              class="close-modal-sure"
              style="--btn-back: #f00"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

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
      // function checkboxLimit(item, limit) {
      //   $(`${item} input:checkbox`).click(function () {
      //     var bol = $(`${item} input:checkbox:checked`).length >= limit;
      //     $(`${item} input:checkbox`).not(":checked").attr("disabled", bol);
      //   });
      // }

      checkboxLimit(".food-input-content-1", 3);
      checkboxLimit(".food-input-content-2", 1);
      checkboxLimit(".food-input-content-3", 1);
      free(".food-input-content-1", 2);

      function checkboxLimit(item, limit) {
        $(item + "  input[type=checkbox]").on("change", function (e) {
          if ($(item + " input[type=checkbox]:checked").length > limit) {
            $(this).prop("checked", false);
            alert("allowed only " + limit);
          }
        });
      }

      function free(item, free) {
        $(item + "  input[type=checkbox]").on("change", function (e) {
          if ($(item + " input[type=checkbox]:checked").length > free) {
            // $(this).prop("checked", false);
            e.target.value = 0;
          }
        });
      }
    </script>

    <script>
      $("#busket-btn").click(function (params) {
        $(".food-busket").toggle(500);
      });
      $("#busket-close").click(function (params) {
        $(".food-busket").hide(500);
      });
    </script>
  </body>
</html>