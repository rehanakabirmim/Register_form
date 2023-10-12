<?php
class Registation{
    private $con;

    public function __construct(){

        define("LOCALHOST","localhost");
        define("USERNAME","root");
        define("PASSWORD","");
        define("DBNAME","users");
        $this->con = mysqli_connect(LOCALHOST,USERNAME,PASSWORD,DBNAME);
        

    }

    public function register($data){
        $Rname = $data['name'];
        $Remail=$data['email'];
        $Rphone = $data['phone'];
        $Rpassword = md5($data['password']);


        $sql="INSERT INTO `register`(`reg_name`, `reg_email`,`reg_phone`, `reg_pass`)Values('$Rname','$Remail','$Rphone','$Rpassword')";
        $res=mysqli_query($this->con,$sql);

        if($res){
           header('Location: add_user.php');
        }

    }

}



?>