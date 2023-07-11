<?php

$servername = "localhost";
$username = "root";
$password = "";  
$mydbname = "test";
// connection a database
$conn = new mysqli($servername, $username, $password, $mydbname);

$delete = $_GET['del'];

    $sql = "delete from crudop where id = '$delete'";

    if(mysqli_query($conn,$sql))
    {
        echo '<script> location.replace("index.php")</script>';
    }
    echo('Error');

?>