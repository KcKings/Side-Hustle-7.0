<?php
require "session-start.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataBase Link And Use</title>
</head>

<body>
    <?php
    include 'included.php'
    ?>
    <h2>Students</h2>
    <form action="process.php" method="post">
        <label for="">Name:</label>
        <input type="text" name="student_name" required><br><br>
        <label for="">Age:</label>
        <input type="text" name="student_age" required><br><br>
        <label for="student_gender">Gender</label>
        <select name="student_gender" required>
            <option value="">Select Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select><br><br>
        <input type="submit" value="Save" name="save_student">
    </form>

</body>

</html>