<?php
include "./admin/config.php";

$obj = new Database();

$error = '';

if (isset($_POST['submit'])) {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $phone = htmlspecialchars($_POST['phone']);
    $date = htmlspecialchars($_POST['date']);
    $city = htmlspecialchars($_POST['city']);
    $states = htmlspecialchars($_POST['states']);
    $zip = htmlspecialchars($_POST['zip']);
    $check_privacy = htmlspecialchars($_POST['check']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'invalidemail';
    }

    // Password validation (min length, match with confirm password)
    if (strlen($password) < 4) {
        $error = 'passwordlength';
    }

    if ($password !== $cpassword) {
        $error = 'passwordmatch';
    }

    if ($error) {
        header("Location: http://localhost/foods/signup.php?error=$error");
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into database
    $obj->insert('user_data', [
        'fname' => $fname,
        'lname' => $lname,
        'email' => $email,
        'password' => $hashed_password,
        'phone' => $phone,
        'date' => $date,
        'city' => $city,
        'states' => $states,
        'zip' => $zip,
        'check_privacy' => $check_privacy,
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
