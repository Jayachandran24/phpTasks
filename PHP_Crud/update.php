<?php

$servername = "localhost";
$username = "root";
$password = "";  
$mydbname = "test";
// connection a database
$conn = new mysqli($servername, $username, $password, $mydbname);
$edit = $_GET ['edit'];
if(isset($_POST['update']))
{   $uid =$_POST['id'];
    $Name = $_POST['name'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $Location = $_POST['location'];
    // echo "Name :". $Name. '<br>';
    // echo "Email :". $Phone. '<br>';
    // echo "Phone :". $Email. '<br>';
    // echo "Location :". $Location.'<br>';

    $sql = "update crudop set name= '$Name', phone='$Phone', email='$Email', location='$Location' where id='$uid'";
       
    if(mysqli_query($conn,$sql))
    {
        echo '<script> location.replace("index.php")</script>';
    }
    echo('Error');
}


?>