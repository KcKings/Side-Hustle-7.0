
<?php
    require "session-start.php"
?>

<?php
require 'included.php';

$id = $_GET['id'];
$delete = mysqli_query($connection, "DELETE FROM students WHERE id = '$id'");

if ($delete) {
    header("Location: all-students.php");
}



?>