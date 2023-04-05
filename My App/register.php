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

        include 'included.php'
    
    
    ?>


    <h2>Register with us</h2><br>

    <form action="process.php" method="post" autocomplete="off">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter Your Name.." required><br><br>

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter Your Email" required> <br><br>

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter A New Password" required><br><br>

        <label for="confirmpass">Confirm Password</label>
        <input type="password" name="confirmpass" placeholder="Confirm Your Password" required><br>

        <button type="submit" name="register">Register</button>

    </form><br><br>

    <p>Already have an account? <a href="login.php">Login</a> Here</p>

</body>

</html>