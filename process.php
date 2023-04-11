<?php
    session_start();

?>
<?php
    require 'included.php';
 //--------------------Save Student info---------//

    if (isset($_POST['save_student'])) {
        $name = $_POST['student_name'];
        $age = $_POST['student_age'];
        $gender = $_POST['student_gender'];

        $create_student = mysqli_query($connection, "INSERT INTO students(name,age,gender) VALUES('$name','$age','$gender')");

        if ($create_student) {
            header("Location: all-students.php");
        }
    }
    //--------------------Update Student info---------//

    if (isset($_POST['update_student'])) {
        $id = $_POST['student_id'];
        $name = $_POST['student_name'];
        $age = $_POST['student_age'];
        $gender = $_POST['student_gender'];

        $update_student = mysqli_query($connection, "UPDATE students SET name='$name', age='$age', gender='$gender' WHERE id='$id'");

        if ($update_student) {
            header("Location: all-students.php");
        }
    }

 ///-----------User Registration----------//

    if (isset($_POST['save_user'])) {
        $name = $_POST['user_name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $confirm_pass = $_POST['confirm_pass'];

        if ($pass !== $confirm_pass) {
            exit("<p>Passwords do not Match</p><a href='register.php'>Go Back</a>");
        }

        $user_exist = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'");

        if (mysqli_num_rows($user_exist) > 0) {
            exit("<p>Email already Used.</p><a href='login.php'>Login</a>");
        }

        $encode_pass = md5($pass);
        

        $insert_user = mysqli_query($connection, "INSERT INTO users(name,email,password) VALUES('$name','$email','$encode_pass')");

        if ($insert_user) {
            header("Location: all-students.php");
        }
    }

    //--------------Login User----------//
    if (isset($_POST['login_user'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $user_exist = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'");

        

        if (!mysqli_num_rows($user_exist)) {
            exit("<p>User not found.</p><a href='register.php'>Register</a><p><a href='index.php'>Go Back</a></p>");
        }
        $encode_pass = md5($pass);

        $user_details = mysqli_fetch_assoc($user_exist);

        if ($encode_pass !== $user_details['password']) {
            exit("<p>Incorrect Password</p><p><a href='index.php'>Login</a></p>");
        }
        $_SESSION["login"] = true;
        $_SESSION["id"] = $user_details['id'];
            
        header("Location: all-students.php");
        
    }


?>