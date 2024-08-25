<?php

require_once "database_connection.php";
// die(var_dump($_POST));
if($_SERVER['REQUEST_METHOD']==="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pw=$_POST['password'];
}
   $insert=new CRUD();
   $insert->insertAdmin($name,$email,$pw);

   header("Location:index.php");
   exit();
   ?>

   