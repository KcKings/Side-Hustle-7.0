<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Students</title>
</head>
<body>
    <?php
    require "included.php";
    
    $students = mysqli_query($connection, 'SELECT * FROM  students');
    ?>
    <a href="./createstudent.php">Add New Student</a>
    <h2>All Students</h2>
    <table>
        <thead>
            <td>S/N</td>
            <td>Name</td>
            <td>Age</td>
            <td>Gender</td>
            <td>Actions</td>
        </thead>
        <tbody>
            <?php foreach($students as $student): ?>
                <tr>
                    <td><?= $student['id']?></td>
                    <td><?= $student['name']?></td>
                    <td><?= $student['age']?></td>
                    <td><?= $student['gender']?></td>
                    <td>
                        <a href="view-student.php?id=<? $student['id'] ?>">View</a>
                        <a href="edit-student.php?id=<? $student['id'] ?>">Edit</a>
                        <a href="delete-student.php?id=<? $student['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

</body>
</html>