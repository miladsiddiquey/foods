<?php
include "./admin/config.php";

$obj = new Database();

if (isset($_POST['submit'])) {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = password_hash($_POST['password']);
    $cpassword = password_hash($_POST['cpassword']);
    $phone = htmlspecialchars($_POST['phone']);
    $date = htmlspecialchars($_POST['date']);
    $city = htmlspecialchars($_POST['city']);
    $states = htmlspecialchars($_POST['states']);
    $zip = htmlspecialchars($_POST['zip']);
    $check_privacy  = htmlspecialchars($_POST['check']);

    // Validate email
    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     // Handle invalid email format
    //     // Example: Redirect back with an error message
    //     header("Location: http://localhost/foods/signup.php?error=invalidemail");
    //     exit();
    // }

    // // Example: Password validation (min length, match with confirm password)
    // if (strlen($password) < 8) {
    //     // Password length validation failed
    //     // Example: Redirect back with an error message
    //     header("Location: http://localhost/foods/signup.php?error=passwordlength");
    //     exit();
    // }

    // if ($password !== $cpassword) {
    //     // Password and confirm password do not match
    //     // Example: Redirect back with an error message
    //     header("Location: http://localhost/foods/signup.php?error=passwordmatch");
    //     exit();
    // }
    

    $obj->insert('user_data', [
        'fname' => $fname,
        'lname' => $lname,
        'email' => $email,
        'password' => $password,
        'cpassword' => $cpassword,
        'phone' => $phone,
        'date' => $date,
        'city' => $city,
        'states' => $states,
        'zip' => $zip,
        'check_privacy ' => $check_privacy ,
    ]);
    
    $result = $obj->getResult();

    if ($result) {
        ?>
        <script>
            alert("Data added successfully");
            window.open('http://localhost/foods/order-online.php', '_self');
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