<?php
require 'included.php';

//---------Save student info-------//
if(isset($_POST['save-student'])){
    $name = $_POST['student-name'];
    $age = $_POST['student-age'];
    $gender = $_POST['student-gender'];
}

 $put_data = mysqli_query($connection, "INSERT INTO students (name,age,gender) VALUES('$name','$age','$gender')" );

        if($put_data){
     header("Location: all-students.php");
        }

//--------------------Update Student info---------//

        if(isset($_POST['edit-student'])){
            $id = $_POST['student-id'];
            $name = $_POST['student-name'];
            $age = $_POST['student-age'];
            $gender = $_POST['student-gender'];

            $update_student = mysqli_query($connection, "UPDATE students SET name = '$name', age = '$age', gender = '$gender' WHERE id = '$id'");

            if($update_student){
                header("Location: all-student.php");
            }
        }

?>