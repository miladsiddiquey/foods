<?php
include "../include/header.php";
include "../../config.php";

$obj = new Database();

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $paragraph = $_POST['paragraph']; 
    $filename = $_FILES['image']['name'];
    $tempfile = $_FILES['image']['tmp_name'];
    $folder = "../../../uploade-images" . $filename;

    $obj->insert('model_data', [
        'title' => $title,
        'paragraph' => $paragraph,
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
              <!-- <h3 class="page-title"> Form elements </h3> -->
              <a href="../home/list_home_model.php" class="btn btn-primary mr-2">Dodel Data List</a>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
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
                        <label for="exampleInputEmail1">Paragraph</label>
                        <textarea  type="text" name="paragraph" class="form-control" id="exampleInputEmail1" rows="5"></textarea>
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
            </div>
          </div>
          <?php include '../include/footer.php' ?>