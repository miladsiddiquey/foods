<!-- old code  -->
<?php
session_start();
// session_destroy();
$productName = $_POST['cart_product_name'] ?? '';
$productPrice = $_POST['cart_product_price'] ?? '';
$subTitle = $_POST['cart_sub_title'] ?? ''; // Default value if not set
$foodItems = $_POST['cart_food-sel'] ?? ''; // Default value if not set
$foodQuentity = $_POST['quantity'] ?? 1; // Default value if not set

if (isset($_POST['order'])) {
    // Initialize the cart if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $check_product = array_column($_SESSION['cart'], 'pName');
    if(in_array($productName, $check_product)){
        echo "<script>alert('Product already added'); window.history.back();</script>";
    } else {
        $_SESSION['cart'][] = array(
            'pName' => $productName, 
            'price' => $productPrice,
            'sTitle' => $subTitle,
            'fItem' => $foodItems,
            'fQuentity' => $foodQuentity,
        );
    
        // print_r($_SESSION['cart']);
        header("location: order-online.php");
    }
}

if(isset($_POST['remove'])){
    foreach ($_SESSION['cart'] as $key => $value) {
        if($value['pName'] === $_POST['remove_item']){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header('location: order-online.php');
        }
    }
}
?>