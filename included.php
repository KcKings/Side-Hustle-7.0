<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>included</title>
</head>
<body>

<p>Let's get started with Connecting our page to our DataBase</p>
    <?php
    echo "Welcome";

    $connection = mysqli_connect("localhost", "root", "", "alexdb");

        
     if ($connection) {
            echo "Connected to the Database successfully";
        }else{
        echo "Unable to connect";
        }
?>
</body>
</html>