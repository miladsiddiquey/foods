<?php
session_start(); 

include "./admin/config.php"; 

$obj = new Database(); 

$error = ''; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitize email
    $password = $_POST['password']; // Password from form input

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Invalid email format';
        header("Location: http://localhost/foods/order-online.php?error={$error}");
        exit();
    }

    // Fetch user data from the database based on email
    $obj->select('user_data', '*', null, "email='{$email}'", null, null);
    $result = $obj->getResult();

    if (!empty($result)) {
        $user = $result[0];

        // Verify password using password_verify
        if (password_verify($password, $user['password'])) {
            // Successful login, set session and redirect
            $_SESSION['user_id'] = $user['id']; // Set session variable upon successful login
            header("Location: http://localhost/foods/order-online.php");
            exit();
        } else {
            $error = 'Incorrect password';
            header("Location: http://localhost/foods/order-online.php?error={$error}");
            exit();
        }
    } else {
        $error = 'User not found';
        header("Location: http://localhost/foods/order-online.php?error={$error}");
        exit();
    }
} else {

    header("Location: http://localhost/foods/order-online.php");
    exit();
}
?>
