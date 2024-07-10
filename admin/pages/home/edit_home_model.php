<?php
include "../include/header.php";
include "../../config.php";

$obj = new Database();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Fetch the specific record for the given ID
    $obj->select('model_data', '*', null, "id=$id", null, null);
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
    $title = $_POST['title'];
    $para = $_POST['paragraph'];
    $filename = $_FILES['image']['name'];
    $tempfile = $_FILES['image']['tmp_name'];
    $folder = "../../../uploade-images/" . $filename;

    $update_data = [
        'title' => $title,
        'paragraph' => $para,
    ];

    // Only add image to update data if a file is uploaded
    if (!empty($filename)) {
        $update_data['image'] = $filename;
    }

    $obj->update('model_data', $update_data, "id=$id");
    $result = $obj->getResult();

    if ($result) {
        if (!empty($filename)) {
            move_uploaded_file($tempfile, $folder);
        }
        ?>
        <script>
            alert("Data updated successfully");
            window.open('http://localhost/foods/admin/pages/home/list_home_model.php?id=<?php echo $row['id']; ?>', '_self');
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
      <h3 class="page-title">Edit Model Data</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
          <li class="breadcrumb-item active" aria-current="page">Form elements</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Model Data</h4>
            <p class="card-description">Basic form elements</p>
            <form class="forms-sample" action="edit_home_model.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputName1">Title</label>
                <input type="text" name="title" value="<?php echo $row['title']; ?>" class="form-control" id="exampleInputName1" placeholder="Title">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Paragraph</label>
                <textarea name="paragraph" class="form-control" id="exampleInputEmail3" rows="5"><?php echo $row['paragraph']; ?></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail3" placeholder="Image">
              </div>
              <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include '../include/footer.php'?>