<?php
include "../../config.php";
$obj = new Database();

$id = (int)$_GET['id'];
if ($id > 0) {
    
    $obj->select('model_data', '*', null, "id='$id'", null, null);
    $result = $obj->getResult();

    if ($result && count($result) > 0) {
        $row = $result[0];
        $image = $row['image'];

        $deleteQuery = "DELETE FROM model_data WHERE id='$id'";

        // Delete the record from the database
        $deleteResult = $obj->delete('model_data', "id='$id'");

        if ($deleteResult) {
            // Delete the image file from the server
            if (file_exists("../../../uploade-images/".$image)) {
                unlink("../../../uploade-images/".$image);
            }
            ?>
            <script>
                alert("Data deleted successfully");
                window.open('http://localhost/food/admin/pages/home/list_home_model.php', '_self');
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Error deleting data. Please try again.");
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert("Record not found.");
        </script>
        <?php
    }
} else {
    ?>
    <script>
        alert("Invalid ID.");
    </script>
    <?php
}
?>