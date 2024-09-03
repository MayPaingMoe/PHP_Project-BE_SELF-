<?php

require_once "database_connection.php";

if($_SERVER['REQUEST_METHOD']==="POST"){
    
  $ename=$_POST['ename'];
    $name=$_POST['name'];
    $Cid=$_POST['Cid']; 
    $type=$_POST['type'];
    $instructions=$_POST['instructions'];
    $ingredient=$_POST['ingredient'];
    $pre_time=(int)$_POST['pre_time'];
    $cook_time=(int)$_POST['cook_time'];
    $photo=$_FILES['photo'];   

    $pre_time1= sprintf('%02d:%02d:00', floor($pre_time / 60), $pre_time % 60);  
    $cook_time1= sprintf('%02d:%02d:00', floor($cook_time / 60), $cook_time % 60);  

   $insert =new CRUD();
   
 
   $insert->insert_desMY($instructions,$ingredient,$pre_time1,$cook_time1,$photo);
   $EN_id=$insert->lastIDEn();
   $MY_id=$insert->lastIDMy();

  //  echo "Type: '$type'<br>";
// var_dump($EN_id);
// var_dump($MY_id);

   if($type === 'meal '){
    $insert->insert_meal($ename,$Cid,$EN_id,$MY_id);
    header("Location:index.php?msg=Insert New Meal Successful.");
    exit();
   }
   elseif($type ==='dessert '){
    $insert->insert_dessert($ename,$Cid,$EN_id,$MY_id);
    header("Location:index.php?msg=Insert New Dessert Successful.");
    exit();
   }
   else{
    echo "No Menu Type";
   } 
  

}