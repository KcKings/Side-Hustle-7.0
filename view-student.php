<?php
    require "session-start.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT VIEW</title>
</head>

<body>
    <a href="./all-students.php">All Students</a>
    <?php
    include 'included.php';

    $id = $_GET['id'];
    $student = mysqli_query($connection, "SELECT * FROM students WHERE id = '$id'");
    $student_details = mysqli_fetch_assoc($student);
    if (!$student_details) {
        exit('Student Not Found');
    }
    ?>
    <h2>Student Details</h2>
    <p>Name: <?= $student_details['name'] ?></p>
    <p>Age: <?= $student_details['age'] ?></p>
    <p>Gender: <?= $student_details['gender'] ?></p>

</body>

</html>