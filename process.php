<?php
require 'included.php';


if(isset($_POST['save-student'])){
    $name = $_POST['student-name'];
    $age = $_POST['student-age'];
    $gender = $_POST['student-gender'];
}

 $put_data = mysqli_query($connection, "INSERT INTO students (name,age,gender) VALUES('$name','$age','$gender')" );

        if($put_data){
     header("Location: all-students.php");
        }
?>