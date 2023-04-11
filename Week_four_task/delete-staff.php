

<?php
require 'connectiondb.php';

$id = $_GET['id'];
$delete = mysqli_query($connection, "DELETE FROM users WHERE id = '$id'");

if ($delete) {
    header("Location: all-staffs.php");
}



?>