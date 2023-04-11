
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Staff</title>
</head>

<body>
    <a href="all-staffs.php">All Staffs</a>
    <br><br>
    <?php
    include 'connectiondb.php';

    $id = $_GET['id'];
    $staff = mysqli_query($connection, "SELECT * FROM users WHERE id = '$id'");
    if (!$staff) {
        exit('Staff Not Found');
    }

    $staff_details = mysqli_fetch_assoc($staff);

    ?>
    <h2>Edit Staff's Details</h2>
    <form action="processadmin.php" method="post">

        <input type="hidden" value="<?php echo $id ?>" name="staff_id">
        
        <label for="">First Name:</label>
        <input type="text" name="first_name" value="<?php echo $staff_details['first_name'] ?>"><br><br>
        
        <label for="">Last Name:</label>
        <input type="text" name="last_name" value="<?php echo $staff_details['last_name'] ?>"><br><br>
        
        <label for="">Username:</label>
        <input type="text" name="username" value="<?php echo $staff_details['username'] ?>"><br><br>
        
        <label for="">Email:</label>
        <input type="email" name="email" value="<?php echo $staff_details['email'] ?>"><br><br>

        <label for="">Gender</label>
        <select name="staff_gender" required>
            <option value="">Select Gender</option>
            <option value="M" <?php if ($staff_details['gender'] === 'M') {
                echo "selected";
            } ?>>Male</option>
            <option value="F" <?php if ($staff_details['gender'] === 'F') {
                echo "selected";
            } ?>>Female</option>
        </select><br><br>
        <input type="submit" value="Update" name="update_staff">
    </form>



</body>

</html>