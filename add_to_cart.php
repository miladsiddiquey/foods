<?php
session_start();
// session_destroy();
$productName = $_POST['cart_product_name'];
$productPrice = $_POST['cart_product_price'];
$subTitle = $_POST['cart_sub_title'];
$foodItems = $_POST['cart_food-sel']; 
$foodQuentity = $_POST['quantity'];

if (isset($_POST['order'])) {

    $check_product = array_column($_SESSION['cart'], 'pName');
    if(in_array($productName, $check_product)){
        echo "<script>alert('product already added')</script>";
    }else{
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
?>