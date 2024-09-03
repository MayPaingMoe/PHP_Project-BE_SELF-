
<?php 
require_once "database_connection.php";



if($_SERVER['REQUEST_METHOD']==="POST"){
    
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
    // echo  $pre_time1, $cook_time1,$name,$Cid,$type;
}
// echo $photo.$instructions.$ingredient,$pre_time,$cook_time;

   $insert =new CRUD();
   $insert->insert_desEN($instructions,$ingredient,$pre_time1,$cook_time1,$photo);
 header("Location:insertMY.php?msg=Please Enter Myanmar Language && Cid=$Cid && type=$type && ename=$name");
exit();


