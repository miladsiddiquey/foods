<?php
include "../include/header.php";
include "../../config.php";


$obj = new Database();

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $para = $_POST['paragraph'];
    $filename = $_FILES['image']['name'];
    $tempfile = $_FILES['image']['tmp_name'];
    $folder = "../../../uplode-image/" .$filename;

    $obj->insert('model_data', [
        'title' => $title,
        'paragraph' => $para,
        'image' => $filename
    ]);
    $result = $obj->getResult();

    if ($result) {
        move_uploaded_file($tempfile, $folder);
        ?>
        <script>
            alert("Data added successfully");
            window.open('http://localhost/food/admin/pages/home/list_home_model.php', '_self');
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
                    <h4 class="card-title">Default form</h4>
                    
                    <form class="forms-sample" action="add_home_model.php" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" name="sub_title" class="form-control" id="exampleInputUsername1" placeholder="title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea  type="text" name="sub_description" class="form-control" id="exampleInputEmail1" rows="2"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Price</label>
                        <input type="number" name="sub_price" class="form-control" id="exampleInputUsername1" placeholder="Price">
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
                                  <input type="text" placeholder="Item" name="items[]" class="input-box">
                                  <input type="text" placeholder="Price" name="items_price[]" class="input-box">
                                  <button class="delete-btn" onclick="deleteInputBox(this.parentElement)">✖</button>
                              </div>
                      </div>
                      <div class="form-group mt-3">
                        <label for="exampleInputUsername1">Select Maximum & Minimum Item</label>
                        <div class="d-flex">
                        <input type="number" name="max_number" class="form-control mr-2" id="exampleInputUsername1" placeholder="max number">
                        <input type="number" name="min_number" class="form-control " id="exampleInputUsername1" placeholder="min number">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Image</label>
                        <input type="file" name="sub_image" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
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
                            <th> # </th>
                            <th> Title </th>
                            <th> Paragraph </th>  
                            <th> Image </th>
                            <th> Action </th>
                          </tr>
                          </thead>
                    <?php 
                    $limit = 3;
                    $obj->select('model_data', '*', null, null, null, $limit);
                    $result = $obj->getResult();

                    foreach ($result as $row) {
                  ?>
                  <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= substr($row['title'],0,10). '...'; ?></td>
                    <td><?=  substr($row['paragraph'],0,10). '...'; ?></td>
                    <td><img src="<?= "../../../uplode-image/" . $row['image']; ?>" style="width: 35px; height: 35px; border-radius: 0;" alt=""></td>
                    <td>
                      <a href="./edit_home_model.php?id=<?= $row['id']; ?>" style="font-size: 20px; padding-right: 10px;"><i class="mdi mdi-lead-pencil"></i></a>
                      <a onclick="return confirm('Are you sure?')" href="./delate_home_model.php?id=<?= $row['id']; ?>" style="font-size: 20px; padding-left: 10px;"><i class="mdi mdi-delete"></i></a>
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
        inputBox.className = 'input-box';
        inputBox.name = 'items[]'; // Set the name attribute for form submission

        const priceBox = document.createElement('input');
        priceBox.type = 'text';
        priceBox.placeholder = 'Price';
        priceBox.className = 'input-box';
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
         