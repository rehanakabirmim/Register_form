<?php
require_once("classes/Users.php");
$ou1 = new Users();

if (isset($_POST['add_user'])) {
    $ou1->insert($_POST);

}
?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-2 ">
        <h2 class="py-4 d-2 text-center text-white bg-danger">Crud operations </h2>
    </div>
    

    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-2 ">
                <table class="table stripped border">
                    <tr>
                        <th>#SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>

                    </tr>


                    <?php
                    // $i = 1;
                    $data = $ou1->show_data();
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($data)){ ?>

                                
                        <tr>
                           
                           <td><?php echo $i++; ?></td>
                           <td><?php echo $row['user_name']; ?></td>
                           <td><?php echo $row['user_email']; ?></td>
                           <td><?php echo  md5($row['user_password']); ?></td>
                           <td><a href="edit.php?e= <?php echo $row['user_id']; ?>" class="btn btn-info btn-sm">Edit</a></td>
                           <td><a href="delete.php?id= <?php echo $row['user_id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>


                          
                       </tr>
                      
                     <?php } ?>  

                </table>

            </div>
            <div class="col-md-4">
                <a href="add_user.php" class="btn btn-info btn-sm">Add</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>