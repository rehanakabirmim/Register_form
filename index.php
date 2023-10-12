<?php
require_once("classes/Registation.php");
$reg = new Registation();

if (isset($_POST['reg'])) {
    $reg->register($_POST);

}
?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Information||OOP Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

   <div class="conatiner  ">
        <div class="row align-items-center vh-100">
            <div class="col-md-4">
                
            </div>
           
            <div class="col-md-2 offset-3 shadow d-2  bg-light text-center mt-3  ">
            
                
                <form method="POST" action=" ">
                    <div class="form-group ">
                        <input type="text" class="form-control text-center p-2 mb-1" placeholder="Enter Your Name" name="name"
                            required>
                        <label for="name"></label>
                    </div>
                    
                    <div class="form-group ">
                        <input type="email" class="form-control text-center p-2 mb-1" placeholder="Enter Your Email" name="email"
                            required>
                        <label for="email"></label>
                    </div>



                    <div class="form-group">
                        <input type="text" class="form-control text-center p-2 mb-1" placeholder="Enter Your Phone Number"
                            name="phone" required>
                        <label for="phone"> </label>
                    </div>


                    <div class="form-group">
                        <input type="password" class="form-control  text-center w-100 p-2 mb-1"
                            placeholder="Enter Your  Password" name="password" required>
                        <label for="password"></label>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-dark text-white form-control  text-center w-100 mt-2 p-2"
                            name="reg">Register</button>
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