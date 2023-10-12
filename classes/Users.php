<?php
class Users{
    private $con;

    public function __construct(){

        define("LOCALHOST","localhost");
        define("USERNAME","root");
        define("PASSWORD","");
        define("DBNAME","users");
        $this->con = mysqli_connect(LOCALHOST,USERNAME,PASSWORD,DBNAME);
        

    }

    //insert into database user table
    public function insert($data){
        $name=ucwords($data['name']);//ucwords works lower case to uppercase.
        $email=$data['email'];
        $pass=$data['password'];

        $sql="INSERT INTO `user`( `user_name`, `user_email`, `user_password`) VALUES ('$name','$email','$pass')";
        $OK=mysqli_query( $this->con ,$sql);
        if($OK){
           header("Location:show.php");
        }
       

    }
    //show data
    public function show_data(){
        $sql="SELECT * FROM `user`";
        return  mysqli_query($this->con ,$sql);
       
    }

    //delete from show.php
    public function delete($uid){
        $del="DELETE  FROM `user` WHERE user_id='$uid'";
        $res=mysqli_query($this->con,$del);
        if($res){
            header("Location: show.php");
        }


    }
    //edit user

    public function edit($uid){
        $edit="SELECT * FROM `user` WHERE user_id='$uid'";
        return $res=mysqli_query($this->con,$edit);
    }
    //update user
    public function update_user($info, $id){
      

        $name=ucwords($info['name']);//ucwords works lower case to uppercase.
        $email=$info['email'];
        $pass=$info['password'];
        $sql="UPDATE `user` SET `user_name`='$name',`user_email`='$email',`user_password`='$pass' WHERE user_id='$id'";
        $res1=mysqli_query($this->con,$sql);
        header('Location: show.php');
        
        

    }

   

}




?>