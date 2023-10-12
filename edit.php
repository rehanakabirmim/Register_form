<?php
require_once("classes/Users.php");
$ou1 = new Users();

$id =$_GET['e'];
if(isset($_GET['e'])){
    $data= $ou1->edit($id);
   $row=mysqli_fetch_assoc($data);
}

if(isset($_POST['update_user'])){
    $ou1->update_user($_POST,$id);
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

   <div class="conatiner ">
        <div class="row align-items-center vh-100">
           
            <div class="col-md-4 offset-4 shadow d-4 mt-3 text-center">
                <h3 class="bg-info p-3"> Update User information</h3>
                <form method="POST">
                    <div class="form-group ">
                        <input type="text" class="form-control text-center p-2 mb-2" placeholder="User Name" name="name"
                            required value="<?= $row['user_name'];?>">
                        <label for="name"></label>
                    </div>


                    <div class="form-group">
                        <input type="email" class="form-control text-center p-2 mb-2" placeholder="User Email"
                            name="email" required value="<?= $row['user_email'];   ?>">
                        <label for="email"> </label>
                    </div>


                    <div class="form-group">
                        <input type="password" class="form-control  text-center w-100 p-2 mb-2"
                            placeholder="User Password" name="password" required value="<?= $row['user_password'];   ?>">
                        <label for="password"></label>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info form-control  text-center w-100 mt-3"
                            name="update_user" type="submit">Update</button>
                    </div>

            </div>

            </form>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>