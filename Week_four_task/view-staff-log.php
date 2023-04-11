

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff's VIEW</title>
</head>

<body>
    <a href="./all-staffs.php">All Staffs</a>
    <br><br>
    <a href="./all-students.php">All Students</a>
    <?php
    include 'connectiondb.php';

    $id = $_GET['id'];
    $staff = mysqli_query($connection, "SELECT * FROM weeklast WHERE id = '$id'");
    $staff_details = mysqli_fetch_assoc($staff);
    if (!$staff_details) {
        exit('Staff Not Found');
    }
    ?>
    <h2>Staff Details</h2>
    <p>First Name: <?= $staff_details['first_name'] ?></p>
    <p>Last Name: <?= $staff_details['last_name'] ?></p>
    <p>Emai: <?= $staff_details['email'] ?></p>
    <p>Gender: <?= $staff_details['gender'] ?></p>

</body>

</html>