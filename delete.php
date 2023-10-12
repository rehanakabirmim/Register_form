<?php
require_once("classes/Users.php");
$ou1 = new Users();


$id =$_GET['id'];
if(isset($_GET)){
    $ou1->delete($id);  

}


?>