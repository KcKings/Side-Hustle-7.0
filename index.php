<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
<?php
    include 'included.php';
  ?>

  <h2>Login</h2>
  <form action="process.php" method="post">
      <label for="email"></label>
      <input type="email" name="email" required >
      <br><br>

      <label for="password"></label>
      <input type="password" name="password" required>
      <br><br>

      <input type="submit" value="Login" name="login_user">


  </form>





</body>
</html>