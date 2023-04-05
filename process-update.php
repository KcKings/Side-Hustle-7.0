<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Details</title>
</head>

<body>
    <?php
    require 'included.php';
    //--------------------Update Student info---------//

    if (isset($_POST['edit_student'])) {
        $id = $_POST['student_id'];
        $name = $_POST['student_name'];
        $age = $_POST['student_age'];
        $gender = $_POST['student_gender'];

        $update_student = mysqli_query($connection, "UPDATE students SET name='$name', age='$age', gender='$gender' WHERE id='$id'");

        if ($update_student) {
            header("Location: all-students.php");
        }
    }




    ?>
</body>

</html>