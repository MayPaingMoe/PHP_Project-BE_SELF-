<?php

require_once "database_connection.php";
// die(var_dump($_POST));
// if($_SERVER['REQUEST_METHOD']==="POST"){
//     $name=$_POST['name'];
//     $email=$_POST['email'];
//     $pw=$_POST['password'];
// }
//    $insert=new CRUD();
//    $insert->insertAdmin($name,$email,$pw);

//    header("Location:index.php");
//    exit();


if($_SERVER['REQUEST_METHOD']==="POST"){
    $instructions=$_POST['instructions'];
    $ingredient=$_POST['ingredient'];
    $pre_time=(int)$_POST['pre_time'];
    $cook_time=(int)$_POST['cook_time'];
    $photo=$_FILES['photo'];   
}
// echo $photo.$instructions.$ingredient,$pre_time,$cook_time;
   $insert =new CRUD();
   $insert->insert_desEN($instructions,$ingredient,$pre_time,$cook_time,$photo);
  
// header("Location:index.php");
exit();


