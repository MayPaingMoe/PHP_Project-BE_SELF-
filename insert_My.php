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
session_start();
$store=$_SESSION['selectedMeal'];
if($_SERVER['REQUEST_METHOD']==="POST"){
    
    $name=$_POST['name'];
    $instructions=$_POST['instructions'];
    $ingredient=$_POST['ingredient'];
    $pre_time=(int)$_POST['pre_time'];
    $cook_time=(int)$_POST['cook_time'];
    $photo=$_FILES['photo'];   

    $pre_time1= sprintf('%02d:%02d:00', floor($pre_time / 60), $pre_time % 60);  
    $cook_time1= sprintf('%02d:%02d:00', floor($cook_time / 60), $cook_time % 60);  

}
// echo $photo.$instructions.$ingredient,$pre_time,$cook_time;

   $insert =new CRUD();
   
 
   $insert->insert_desMY($instructions,$ingredient,$pre_time1,$cook_time1,$photo);
//    else{
//     $insert->insert_desMY($instructions,$ingredient,$pre_time1,$cook_time1,$photo);
//    }
   
//    $read_desEn=$insert->read_desEn();

 header("Location:index.php");
exit();


