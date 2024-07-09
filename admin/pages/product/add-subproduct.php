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
                    <p class="card-description"> Basic form layout </p>
                    <form class="forms-sample" action="add_home_model.php" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputUsername1" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea  type="text" name="description" class="form-control" id="exampleInputEmail1" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Image</label>
                        <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
          
                   
                    
<?php include '../include/footer.php'?>          
         