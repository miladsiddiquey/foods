<?php
include "../../config.php";
$obj = new Database();

$id = (int)$_GET['id'];
if ($id > 0) {
    
    $obj->select('product_faq', '*', null, "id='$id'", null, null);
    $result = $obj->getResult();

    if ($result && count($result) > 0) {
        $row = $result[0];
        $image = $row['image'];

        $deleteQuery = "DELETE FROM product_faq WHERE id='$id'";

        // Delete the record from the database
        $deleteResult = $obj->delete('product_faq', "id='$id'");

        if ($deleteResult) {
            // Delete the image file from the server
            if (file_exists("../../../upload-image/".$image)) {
                unlink("../../../upload-image/".$image);
            }
            ?>
            <script>
                alert("Data deleted successfully");
                window.open('http://localhost/foods/admin/pages/product/add-prod-faq.php', '_self');
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