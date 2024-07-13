<?php
include "../../config.php";
$obj = new Database();

$id = (int)$_GET['id'];
if ($id > 0) {
    
    $obj->select('sub_product', '*', null, "id='$id'", null, null);
    $result = $obj->getResult();

    if ($result && count($result) > 0) {
        $row = $result[0];
        $image = $row['image'];

        $deleteQuery = "DELETE FROM sub_product WHERE id='$id'";

        // Delete the record from the database
        $deleteResult = $obj->delete('sub_product', "id='$id'");

        if ($deleteResult) {
            // Delete the image file from the server
            if (file_exists("../../../upload-image/".$image)) {
                unlink("../../../upload-image/".$image);
            }
            ?>
            <script>
                alert("Data deleted successfully");
                window.open('http://localhost/foods/admin/pages/product/add-subproduct.php', '_self');
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