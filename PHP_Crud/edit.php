<?php
$servername = "localhost";
$username = "root";
$password = "";
$mydbname = "test";
// connection a database
$conn = new mysqli($servername, $username, $password, $mydbname);
$edit = $_GET['edit'];
$sql = "select * from crudop where id ='$edit'";
$run = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($run)) {
    $uid = $row['id'];
    $Name = $row['name'];
    $Phone = $row['phone'];
    $Email = $row['email'];
    $Location = $row['location'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <form class="needs-validation" method="post" action="update.php">
            <div class="row g-5">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="mb-2">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder=" Enter Name" name="name" value="<?php echo $Name ?>" required>
                        <input type="hidden" name="id" value="<?php echo $uid ?>">
                    </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputPassword1" class="mb-2">Phone</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder=" Enter Phone"
                            name="phone" value="<?php echo $Phone ?>" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="mb-2">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email" name="email" value="<?php echo $Email ?>" required>
                    </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputPassword1" class="mb-2">Location</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=" Enter Location"
                            name="location" value="<?php echo $Location ?>" required>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <button type="submit" class="btn btn-primary" name="update" value="Update">Update</button>
                <a href="index.php" class="px-4 py-2 bg-danger text-white rounded-3 text-decoration-none">back</a>
            </div>
        </form>
    </div>
</body>