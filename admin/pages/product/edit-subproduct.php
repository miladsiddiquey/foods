<?php
include "../include/header.php";
include "../../config.php";

$obj = new Database();

$food_id = isset($_POST['food_id']) ? $_POST['food_id'] : (isset($_GET['id']) ? $_GET['id'] : '');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Fetch the specific record for the given ID
    $obj->select('sub_product', '*', null, "id=$id", null, null);
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
    $food_id = $_POST['food_id'];
    $sub_title = $_POST['sub_title'];
    $sub_description = $_POST['sub_description'];
    $items = $_POST['items'];
    $items_price = $_POST['items_price'];
    $max_number = $_POST['max_number'];
    $min_number = $_POST['min_number'];
    $required = isset($_POST['required']) ? $_POST['required'] : '';
    // $filename = $_FILES['sub_image']['name'];
    // $tempfile = $_FILES['sub_image']['tmp_name'];
    // $folder = "../../../upload-image/" .$filename;

    $obj->insert('sub_product', [
        'food_id' => $food_id,
        'sub_title' => $sub_title,
        'sub_description' => $sub_description,
        'items' => json_encode($items),
        'items_price' => json_encode($items_price),
        'max_number' => $max_number,
        'min_number' => $min_number,
        'required' => $required,
        // 'sub_image' => $filename
    ]);
    $result = $obj->getResult();

    if ($result) {
        // move_uploaded_file($tempfile, $folder);
        ?>
        <script>
            alert("Data added successfully");
            window.open('http://localhost/foods/admin/pages/product/add-subproduct.php?id=<?= $food_id; ?>', '_self');
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
              <h3 class="page-title"> Add sub product </h3>
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
                    <h4 class="card-title">Default form</h4>
                    
                    <form class="forms-sample" action="edit-subproduct.php?id=<?= isset($_GET['id']) ? $_GET['id'] : ''; ?>" method="post" >
                      <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="hidden" name="food_id" class="form-control" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
                        <input type="text" name="sub_title" class="form-control" value="<?php echo $row['sub_title'] ?>" id="exampleInputUsername1" placeholder="title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input  type="text" name="sub_description" class="form-control" value="<?php echo $row['sub_description'] ?>" id="exampleInputEmail1" rows="2">
                      </div>
                       <!-- Button to add new input group -->
                        <div>
                          <button type="button" class="add-btn" onclick="addInputBox()">+</button>
                          <label for="exampleInputPassword1">Items</label>
                        </div>
                       
                      <!-- Container for dynamic inputs -->
                      <div id="input-container" class="input-container">
                              <!-- Existing static input group -->
                              <div class="input-group ">
                                  <input type="text" placeholder="Item" name="items[]" value="<?php echo $row['items'] ?>" class="form-control mr-2">
                                  <input type="text" placeholder="Price" name="items_price[]" value="<?php echo $row['price'] ?>" class="form-control mr-2">
                                  <button class="delete-btn" onclick="deleteInputBox(this.parentElement)">✖</button>
                              </div>
                      </div>
                      <div class="form-group mt-3">
                        <label for="exampleInputUsername1">Select Maximum & Minimum Item</label>
                        <div class="d-flex">
                        <input type="number" name="max_number" value="<?php echo $row['max_number'] ?>" class="form-control mr-2" id="exampleInputUsername1" placeholder="max number">
                        <input type="number" name="min_number" value="<?php echo $row['min_number'] ?>" class="form-control " id="exampleInputUsername1" placeholder="min number">
                        </div>
                      </div>
                      <!-- <div class="form-group">
                        <label for="exampleInputPassword1">Image</label>
                        <input type="file" name="sub_image" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div> -->
                      <div class="form-check">
                              <label class="form-check-label">
                              <input type="checkbox" name="required" value="required" class="form-check-input" checked> Required </label>
                        </div>
                      <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                     
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List sub product</h4>   
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> sub_title </th>
                            <th> sub_description </th>  
                            <th> items </th>  
                            <th> items_price </th>  
                            <th> max_number </th>  
                            <th> min_number </th>  
                            <th> required </th>  
                            <!-- <th> sub_image </th>                            -->
                            <th> Action </th>
                          </tr>
                          </thead>
                    <?php 
                    
                    $limit = 4;
                    $obj->select('sub_product', "*", null, "food_id = $food_id", null, $limit);
                    $result = $obj->getResult();

                    foreach ($result as $row) {
                  ?>
                  <tr>
                    <td><?= substr($row['sub_title'],0,10). '...'; ?></td>
                    <td><?=  substr($row['sub_description'],0,10). '...'; ?></td>
                    <td><?=  $row['items']; ?></td>
                    <td><?=  $row['items_price']; ?></td>
                    <td><?=  $row['max_number']; ?></td>
                    <td><?=  $row['min_number']; ?></td>
                    <td><?=  $row['required']; ?></td>
                    <!-- <td><img src="<?= "../../../upload-image/" . $row['sub_image']; ?>" style="width: 35px; height: 35px; border-radius: 0;" alt=""></td> -->
                    <td>
                      <a href="./edit-subproduct.php?id=<?= $row['id']; ?>" style="font-size: 20px; padding-right: 10px;"><i class="mdi mdi-lead-pencil"></i></a>
                      <a onclick="return confirm('Are you sure?')" href="./delate-subproduct.php?id=<?= $row['id']; ?>" style="font-size: 20px; padding-left: 10px;"><i class="mdi mdi-delete"></i></a>
                    </td>
                  </tr>
                  
                  <?php } ?>
                      </table>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
 <!-- script for item -->
    <script>
    function addInputBox() {
        const container = document.getElementById('input-container');
        const inputGroup = document.createElement('div');
        inputGroup.className = 'input-group';

        const inputBox = document.createElement('input');
        inputBox.type = 'text';
        inputBox.placeholder = 'Item';
        inputBox.className = 'form-control mr-2';
        inputBox.value = '<?php echo $row['items'] ?>';
        inputBox.name = 'items[]'; // Set the name attribute for form submission

        const priceBox = document.createElement('input');
        priceBox.type = 'text';
        priceBox.placeholder = 'Price';
        priceBox.className = 'form-control mr-2';
        priceBox.value = '<?php echo $row['items_price'] ?>';
        priceBox.name = 'items_price[]'; // Set the name attribute for form submission

        const deleteBtn = document.createElement('button');
        deleteBtn.innerHTML = '✖';
        deleteBtn.className = 'delete-btn';
        deleteBtn.onclick = function() {
            container.removeChild(inputGroup);
        };

        inputGroup.appendChild(inputBox);
        inputGroup.appendChild(priceBox);
        inputGroup.appendChild(deleteBtn);
        container.appendChild(inputGroup);
    }

    function deleteInputBox(inputGroup) {
        const container = document.getElementById('input-container');
        container.removeChild(inputGroup);
    }
</script> 
                   
                    
<?php include '../include/footer.php'?>    