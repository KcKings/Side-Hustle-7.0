<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <?php

    include 'included.php';
    ?>


    <h2>Register with us</h2><br>

    <form action="process.php" method="post">
        <label for="user_name">Name</label>
        <input type="text" name="user_name" placeholder="Enter Your Name.." required><br><br>

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter Your Email" required> <br><br>

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter A New Password" required><br><br>

        <label for="confirm_pass">Confirm Password</label>
        <input type="password" name="confirm_pass" placeholder="Confirm Your Password" required><br><br>

        <input type="submit" value="Register" name="save_user">

    </form><br><br>

    <p>Already have an account? <a href="index.php">Login Here</a></p>

</body>

</html>