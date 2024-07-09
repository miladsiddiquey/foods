<?php include "../include/header.php" ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <!-- <h3 class="page-title"> Form elements </h3> -->
              <a href="./add_home_model.php" class="btn btn-primary mr-2">Add Data</a>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bordered table</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code>
                    </p>
                    
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
                    include "../../config.php";
                    $obj = new Database();
                    $limit = 3;
                    $obj->select('model_data', '*', null, null, null, $limit);
                    $result = $obj->getResult();

                    
                   
                    foreach ($result as $row) {
                  ?>
                  <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= substr($row['title'],0,40). '...'; ?></td>
                    <td><?=  substr($row['paragraph'],0,40). '...'; ?></td>
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
          <?php include "../include/footer.php" ?>