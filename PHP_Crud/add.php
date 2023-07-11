<?php
$servername = "localhost";
$username = "root";
$password = "";
$mydbname = "test";
// connection a database
$conn = new mysqli($servername, $username, $password, $mydbname);
// check database connecation

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
// echo "connection successfully";

// sql to create table
// $sql = "CREATE TABLE crudop (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(30) NOT NULL,
//     phone INT(10) NOT NULL,
//     email VARCHAR(30) NOT NULL,
//     location VARCHAR (30) NOT NULL)";
// if($conn->query($sql) == TRUE) {
//     echo " created successfully";
// } else {
//     echo "error" . $conn->error;
// }
// $conn->close();

if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $Location = $_POST['location'];
    // echo "Name :". $Name. '<br>';
    // echo "Email :". $Phone. '<br>';
    // echo "Phone :". $Email. '<br>';
    // echo "Location :". $Location.'<br>';

    $sql = "insert into crudop(name,phone,email,location)values('$Name','$Phone','$Email','$Location')";

    if (mysqli_query($conn, $sql)) {
        echo '<script> location.replace("index.php")</script>';
    }
    echo ('Error');
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <form class="needs-validation" method="post" action="add.php">
            <div class="row g-5">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="mb-2">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder=" Enter Name" name="name" required>
                    </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputPassword1" class="mb-2">Phone</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder=" Enter Phone"
                            name="phone" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="mb-2">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email" name="email" required>
                    </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputPassword1" class="mb-2">Location</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=" Enter Location"
                            name="location" required>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <button type="submit" class="btn btn-primary mt-0 " name="submit">Submit</button>
                <a href="index.php" class="px-4 py-2 bg-danger text-white rounded-3 text-decoration-none">back</a>
            </div>
        </form>
    </div>
</body>