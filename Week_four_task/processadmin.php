<?php
//---------Registering an Admin----------//
    include 'connectiondb.php';

if (isset($_POST['reg_staff'])) {
    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirm_pass'];

    if ($pass !== $confirm_pass) {
        exit("<p>Passwords do not Match</p><a href='register.php'>Go Back</a>");
    }

    $admin_username_exist = mysqli_query($connection, "SELECT * FROM weeklast WHERE username = '$username'");
    $admin_email_exist = mysqli_query($connection, "SELECT * FROM weeklast WHERE email = '$email'");

    if (mysqli_num_rows($admin_email_exist) > 0) {
        exit("<p>Email already Used.</p><a href='index.php'>Login</a>");
    } elseif (mysqli_num_rows($admin_username_exist) > 0) {
        exit("<p>Username already taken.</p><p>Please choose another username<a href='register.php'>Go back</a></p>");

    }

    $encode_pass = md5($pass);


    $insert_admin = mysqli_query($connection, "INSERT INTO weeklast(first_name,last_name,username,email,gender,password) VALUES('$f_name','$l_name','$username','$email','$gender','$encode_pass')");

    if ($insert_admin) {
        header("Location: index.php");
    }
}




?>