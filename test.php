<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include './admin/config.php';
    $conne = mysqli_connect("localhost","root","","foods") or die("connection faild");

    $sql = "select pf.*,fm.* from product_faq pf, food_menu fm where pf.id = fm.faq_id";
    $result = mysqli_query($conne, $sql);
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <h1><?php echo $row['product_name'] ?></h1>
        <h4><?= $row['header_title'] ?></h4>
        <?php
    }
    ?>
</body>
</html>

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
               $obj->select('product_faq', '*', null, null, null, null);
               $faqResult = $obj->getResult();

                foreach ($faqResult as $faqRow) {
                ?>

              <div
                class="accordion-item"
                style="border-top: 1px solid var(--text-color)"
              >
                <h2 class="accordion-header" id="heading<?= $faqRow['id'] ?>">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapse<?= $faqRow['id'] ?>"
                    aria-expanded="false"
                    aria-controls="collapse<?= $faqRow['id'] ?>"
                  >
                    <div class="faq-title">
                      <img src="<?= "./upload-image/" . $faqRow['header_image']; ?>" alt="img" />
                      <h4><?= $faqRow['header_title'] ?></h4>
                    </div>
                  </button>
                </h2>
                <div
                  id="collapse<?= $faqRow['id'] ?>"
                  class="accordion-collapse collapse"
                  aria-labelledby="heading<?= $faqRow['id'] ?>"
                  data-bs-parent="#accordionFlushExample"
                >
               
                <!-- sub category start -->
               
                <?php 
               $faq_id = $faqRow['id'];
               $obj->select('food_menu', '*', null, "faq_id = $faq_id", null, null);
               $foodResult = $obj->getResult();

                foreach ($foodResult as $foodRow) {
                ?>


                  <div class="accordion-body">
                    <ul class="food-details">
                      <li>
                        <div class="food-details-left">
                          <div class="food-details-left-img">
                            <img src="<?= "./upload-image/" . $foodRow['product_image']; ?>" alt="img" />
                          </div>
                          <div class="food-details-left-text">
                            <h5><?= $foodRow['product_name'] ?></h5>
                            <small><?= $foodRow['product_description'] ?></small>
                             
                            <h6>$<?= $foodRow['price'] ?></h6>
                          </div>                        
                        </div>                      
                        <div class="food-details-right">
                          <div class="food-add-plus">
                            <i class="fa-solid fa-plus"></i>
                          </div>

                          <button
                            class="view-product simple-modal-btn"
                            date-info="view<?= $foodRow['id'] ?>"
                          >
                            View Product
                          </button>
                        </div>
                    
                        <div class="simple-modal" id="view<?= $foodRow['id'] ?>">
                          <div class="simple-modal-box">
                            <div class="simple-modal-header">
                              <h5>Food Details</h5>
                              <i class="fa-solid fa-xmark"></i>
                            </div>

                            <div class="simple-modal-body">
                              <div class="add-more-item-modal">
                                <img src="<?= "./upload-image/" . $foodRow['product_image']; ?>" alt="img" />

                                <div class="add-more-modal-header">
                                  <h4><?= $foodRow['product_name'] ?></h4>
                                  <h5>$<?= $foodRow['price'] ?></h5>
                                </div>
                                <p>
                                <?= $foodRow['product_description'] ?>
                                </p>

                              

                                <!-- sub sub faq -->
                                <?php
                                $food_id = $foodRow['id'];
                                $obj->select('sub_product', '*', null, "food_id = $food_id", null, null);
                                $subFoodResult = $obj->getResult();

                                  foreach ($subFoodResult as $subFoodRow) {
                                    $items = json_decode($subFoodRow['items'], true);
                                  ?>

                                <div class="food-modal-faq">
                                  <div
                                    class="accordion accordion-flush"
                                    id="food-modal-faq-<?= $subFoodRow['id'] ?>"
                                  >
                                    <div class="accordion-item">
                                      <h2
                                        class="accordion-header"
                                        id="food-modal-faq-header-<?= $subFoodRow['id'] ?>"
                                      >
                                        <button
                                          class="accordion-button collapsed"
                                          type="button"
                                          data-bs-toggle="collapse"
                                          data-bs-target="#food-modal-faq-body-<?= $subFoodRow['id'] ?>"
                                          aria-expanded="false"
                                          aria-controls="food-modal-faq-body-<?= $subFoodRow['id'] ?>"
                                        >
                                        <?= $subFoodRow['sub_title'] ?>
                                          <span><?= $subFoodRow['required'] ? 'Required' : 'Optional' ?></span>
                                          <small>(Choose 1 item.)</small>
                                        </button>
                                      </h2>
                                      <div
                                        id="food-modal-faq-body-<?= $subFoodRow['id'] ?>"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="food-modal-faq-header-<?= $subFoodRow['id'] ?>"
                                        data-bs-parent="#food-modal-faq-<?= $subFoodRow['id'] ?>"
                                      >
                                        <div class="accordion-body">
                                          <div
                                            class="food-input-content food-input-content-1"
                                          >
                                          <?php foreach ($items as $index => $item) { ?>
                                               <div class="food-input-box">
                                                <input 
                                                type="checkbox" 
                                                name="food-sel[]" 
                                                value="<?= htmlspecialchars($item) ?>" />
                                                <label><?= htmlspecialchars($item) ?></label>
                                               </div>
                                               <?php } ?>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                                <?php } ?>


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
                                  <span class="total-price-in-modal">$<?= $foodRow['price'];?></span
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
