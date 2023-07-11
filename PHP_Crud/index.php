<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">PHP Crud</h1>
        <a href="add.php" class="p-2 mb-3 bg-danger text-white rounded-3 text-decoration-none"> ADD + </a>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Id</th>
                    <th scope="col" class="text-center">Name</th>
                    <th scope="col" class="text-center">Phone</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">location</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $servername="localhost" ; $username="root" ; $password="" ; $mydbname="test" ; 
                $conn=new mysqli($servername, $username, $password, $mydbname); 
                $sql = "select * from crudop";
                $run = mysqli_query($conn,$sql);

            $id=1;

            while($row = mysqli_fetch_array($run))
            {
                $uid = $row['id'];
                $Name = $row['name'];
                $Phone = $row['phone'];
                $Email = $row['email'];
                $Location = $row['location'];
            
                
                ?>
                    <tr>
                        <th><?php echo $id ?></th>
                        <td><?php echo $Name?></td>
                        <td><?php echo $Phone?></td>
                        <td><?php echo $Email?></td>
                        <td><?php echo $Location?></td>
                        <td class="text-center"><button class="bg-success rounded-3"><a href="edit.php?edit=<?php echo $uid ?>" class="p-2 text-white text-decoration-none">Edit</a></button>
                            <button class="bg-danger rounded-3"><a href="delete.php?del=<?php echo $uid ?>" class="p-2 text-white text-decoration-none">Delete</a></button></td>
                    </tr>
                <?php $id++; } ?>
            </tbody>
        </table>
    </div>
</body>

</html>