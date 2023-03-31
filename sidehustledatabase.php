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
    function times($a, $b, $c=5){
        $d = $a*$b*$c;
        echo $d;
    }
    times(2, 4);   '/n'
    ?>
    
    <br><br>
    
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
            
    $put_data = mysqli_query($connection, "INSERT INTO students (name,age,gender) VALUES('Bose','20','F')" );

        if(!$put_data){
            echo "We are not There yet:". mysqli_error($connection);
           
        }
        else{
            echo "Data saved successfully".'<br>';
        }
    ?>-
    
</body>
</html>
