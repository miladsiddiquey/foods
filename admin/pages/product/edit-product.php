<?php
include "../include/header.php";
include "../../config.php";

$obj = new Database();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Fetch the specific record for the given ID
    $obj->select('food_menu', '*', null, "id=$id", null, null);
    $result = $obj->getResult();
    if (count($result) > 0) {
        $row = $result[0];
    } else {
        echo "No record found for the given ID";
        exit;
    }
} else {
    echo "ID parameter is missing";
    exit;
}

if (isset($_POST['submit'])) {
    $faq_id = $_POST['faq_id'];
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $price = $_POST['price'];
    $product_filename = $_FILES['product_image']['name'];
    $product_tempfile = $_FILES['product_image']['tmp_name'];
    $product_folder = "../../../upload-image/" . $product_filename;
    

    $update_data = [
        'faq_id' => $faq_id,
        'product_name' => $product_name,
        'product_description' => $product_description,
        'price' => $price
        
    ];

    // Only add image to update data if a file is uploaded
    if (!empty($filename)) {
        $update_data['product_image'] = $product_filename;
    }

    $obj->update('food_menu', $update_data, "id=$id");
    $result = $obj->getResult();

    if ($result) {
        if (!empty($product_filename)) {
            move_uploaded_file($product_tempfile, $product_folder);
        }
        ?>
        <script>
            alert("Data updated successfully");
            window.open('http://localhost/foods/admin/pages/product/add-product.php?id=<?= $faq_id; ?>', '_self');
        </script>
        <?php
    } else {
        $error = $obj->getResult();
        ?>
        <script>
            alert("Please try again. Error: <?php echo json_encode($error); ?>");
        </script>
        <?php
    }
}
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Products </h3>
              <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav> -->
              <button class="btn btn-primary" onclick="window.history.back()">Go Back</button>
            </div>
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="edit-product.php?id=<?= isset($_GET['id']) ? $_GET['id'] : ''; ?>" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Product Name</label>
                        <input type="hidden" name="faq_id" class="form-control" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
                        <input type="text" name="product_name" value=<?= $row['product_name'] ?> class="form-control" id="exampleInputUsername1"  placeholder="Product Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Product Description</label>
                        <input  type="text" name="product_description" value=<?= $row['product_description'] ?> class="form-control"  id="exampleInputEmail1" rows="2">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Price</label>
                        <input type="number" name="price" value=<?= $row['price'] ?> class="form-control" id="exampleInputUsername1" placeholder="price">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Product Image</label>
                        <input type="file" name="product_image" value=<?= $row['product_image'] ?> class="form-control" id="exampleInputPassword1">
                        <img src="<?= "../../../upload-image/" . $row['product_image']; ?>" style="width: 35px; height: 35px; border-radius: 0;" alt="">
                      </div>
                      <button type="submit" name="submit" class="btn btn-primary mr-2">Update</button>
                    </form>
                  </div>
                </div>
              </div>
              <!-- <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List Product</h4>   
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th> Product Name </th>  
                            <th> description </th>  
                            <th> price </th>  
                            <th> Image </th>
                            <th> Action </th>
                          </tr>
                          </thead>
                    <?php 
                    $limit = 4;
                    $obj->select('food_menu', '*', null, "faq_id = $faq_id", null, $limit);
                    $result = $obj->getResult();

                    
                   
                    foreach ($result as $row) {
                  ?>
                  <tr>
                    <td><a href="./add-subproduct.php?id=<?= $row['id']; ?>" style="font-size: 20px; padding-right: 10px;">Configer</a></td>
                    <td><?= substr($row['product_name'],0,40). '...'; ?></td>
                    <td><?=  substr($row['product_description'],0,40). '...'; ?></td>
                    <td><?= $row['price']; ?></td>
                    <td><img src="<?= "../../../upload-image/" . $row['product_image']; ?>" style="width: 35px; height: 35px; border-radius: 0;" alt=""></td>
                    <td>
                      <a href="./edit-product.php?id=<?= $row['id']; ?>" style="font-size: 20px; padding-right: 10px;"><i class="mdi mdi-lead-pencil"></i></a>
                      <a onclick="return confirm('Are you sure?')" href="./delate-product.php?id=<?= $row['id']; ?>" style="font-size: 20px; padding-left: 10px;"><i class="mdi mdi-delete"></i></a>
                    </td>
                  </tr>
                  
                  <?php } ?>
                      </table>
                      
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
        
          <?php include '../include/footer.php' ?>