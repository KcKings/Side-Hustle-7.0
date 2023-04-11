
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Staffs</title>
</head>

<body>
    <?php
    require "included.php";
    $staffs = mysqli_query($connection, 'SELECT * FROM  users');
    ?>
    <a href="./all-students.php">All Students</a>
    <a href="logout.php">Log Out</a>
    <br><br>
    <h2>All Students</h2>
    <table>
        <thead>
            <th>S/N</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach ($staffs as $staff) : ?>
                <tr>
                    <td><?= $staff['id'] ?></td>
                    <td><?= $staff['first_name'] ?></td>
                    <td><?= $staff['last_name'] ?></td>
                    <td><?= $staff['username'] ?></td>
                    <td><?= $staff['email'] ?></td>
                    <td><?= $staff['gender'] ?></td>
                    <td>
                        <a href="view-staff-log.php?id=<?= $staff['id'] ?>">View</a>
                        <a href="edit-staff.php?id=<?= $staff['id'] ?>">Edit</a>
                        <a href="delete-staff.php?id=<?= $staff['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

</body>

</html>