<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT VIEW</title>
</head>
<body>
    <?php
        include 'included.php';
        
        $id = $_GET['id'];
        $view = mysqli_query($connection, "SELECT * FROM students WHERE id = '$id'");



    ?>
</body>
</html>