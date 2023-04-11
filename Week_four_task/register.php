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

    include 'connectiondb.php';
    ?>


    <h2>Register Here</h2><br>

    <form action="processadmin.php" method="post">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" placeholder="Enter Your First Name.." required><br><br>

        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" placeholder="Enter Your Last Name.." required><br><br>

        <label for="user_name">Username</label>
        <input type="text" name="user_name" placeholder="Choose a Username.." required><br><br>

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter Your Email" required> <br><br>

        <label for="gender">Gender</label>
        <select name="gender" required>
            <option value="">Select Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select><br><br>

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter A New Password" required><br><br>

        <label for="confirm_pass">Confirm Password</label>
        <input type="password" name="confirm_pass" placeholder="Confirm Your Password" required><br><br>

        <input type="submit" value="Register" name="reg_staff">

    </form><br><br>

    <p>Already have an account? <a href="index.php">Login Here</a></p>

</body>

</html>