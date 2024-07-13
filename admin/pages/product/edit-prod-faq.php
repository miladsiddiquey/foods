<?php
include "../include/header.php";
include "../../config.php";

$obj = new Database();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Fetch the specific record for the given ID
    $obj->select('product_faq', '*', null, "id=$id", null, null);
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
    $header_title = $_POST['header_title'];
    $filename = $_FILES['header_image']['name'];
    $tempfile = $_FILES['header_image']['tmp_name'];
    $folder = "../../../upload-image/" . $filename;

    $obj->insert('product_faq', [
        'header_title' => $header_title,
        'header_image' => $filename
    ]);
    $result = $obj->getResult();

    if ($result) {
        move_uploaded_file($tempfile, $folder);
        ?>
        <script>
            alert("Data added successfully");
            window.open('http://localhost/foods/admin/pages/product/add-prod-faq.php', '_self');
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
    <h3 class="page-title"> Product Heading </h3>
      <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
     </nav>
    </div>
    <div class="row">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" action="edit-prod-faq.php?=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Header Title</label>
                        <input type="text" name="header_title" value="<?php echo $row['header_title']; ?>" class="form-control" id="exampleInputUsername1"  placeholder="Header Title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Header Image</label>
                        <input type="file" name="header_image" value="<?php echo $row['header_image']; ?>"  class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List Product</h4>   
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th> Title </th>  
                            <th> Image </th>
                            <th> Action </th>
                          </tr>
                          </thead>
                    <?php 
                    $limit = 4;
                    $obj->select('product_faq', '*', null, null, null, $limit);
                    $result = $obj->getResult();

                    
                   
                    foreach ($result as $row) {
                  ?>
                  <tr>
                    <td><a href="./add-product.php?id=<?= $row['id']; ?>" style="font-size: 20px; padding-right: 10px;">Add Product</a></td>
                    <td><?= substr($row['header_title'],0,40). '...'; ?></td>
                    <td><img src="<?= "../../../upload-image/" . $row['header_image']; ?>" style="width: 35px; height: 35px; border-radius: 0;" alt=""></td>
                    <td>
                      <a href="./edit-prod-faq.php?id=<?= $row['id']; ?>" style="font-size: 20px; padding-right: 10px;"><i class="mdi mdi-lead-pencil"></i></a>
                      <a onclick="return confirm('Are you sure?')" href="./delate-prod-faq.php?id=<?= $row['id']; ?>" style="font-size: 20px; padding-left: 10px;"><i class="mdi mdi-delete"></i></a>
                    </td>
                  </tr>
                  
                  <?php } ?>
                      </table>
                      
                    </div>
                  </div>
                </div>
            </div>
  </div>
  <?php include '../include/footer.php'?>