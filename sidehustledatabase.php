<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataBase Link And Use</title>
</head>
<body>
    <?php
        function times3 (a, b, c=5){
            echo 'a*b*c';
            }
    ?>
    <?php
        include 'included.php'
    ?>
    <p>Let's get started with Connecting our page to our DataBase</p>
    <?php
        if ($connection) {
            echo "Connected to the Database successfully";
        }else{
        echo "Unable to connect";
    }

    $put_data = mysqli_query($connection, "INSERT INTO alex (name,password) VALUES('King','dan123')");

        if($put_data){
            echo "data saved successfully";
        }else{
            echo "We are not There yet:";
        }
    ?>
    
</body>
</html>
