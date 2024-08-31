<?php
// echo "<pre/>";
require_once "Connection.php";

class CRUD extends DBC{

//-----------------------------------------admin table----------------------------

    public function insertAdmin($name,$email,$password){

        // if($_SERVER['REQUEST_METHOD']==="POST"){
        //     $name=$_POST['name'];
        //     $email=$_POST['email'];
        //     $pw=$_POST['password'];
        // }
        //    $insert=new CRUD();
        //    $insert->insertAdmin($name,$email,$pw);
        
        //    header("Location:index.php");
        //    exit();

        $DBC=new DBC();
        $pdo=$DBC->Connect();

        $insert_admin=$pdo->prepare("Insert into `admin`(name,email,password) values (:name,:email,:password);");
        $insert_admin->bindParam(":name",$name);
        $insert_admin->bindParam(":email",$email);
        $insert_admin->bindParam(":password",$password);

        if($insert_admin->execute()){
            echo "Insert Admin Successful.";
        }
        else{
            echo "Insert Admin Failed.";
        }

    }


    public function readAdmin(){
        $DBC=new DBC();
        $pdo=$DBC->Connect();

        $read_admin=$pdo->prepare("Select * from `admin`;");
        $read_admin->execute();
        
        $read=$read_admin->fetchAll(PDO::FETCH_OBJ);
        return $read;

        // foreach($read as $r){
        //     echo $r->Aid."-".$r->name."-".$r->email."-".$r->password."<br>";
       // }

    }


    public function editadmin($id){
        $DBC=new DBC();
        $pdo=$DBC->Connect();

        $edit_recipe=$pdo->prepare("Select * from `recipe` where id=:id");
        $edit_recipe->bindParam(":id",$id);
        $edit=$edit_recipe->fetchAll(PDO::FETCH_OBJ);
        // return $read;

        foreach($edit as $e){
            echo $e->r1."-".$e->r2."-".$e->r3."-"."<br>";
        }
        
    }

    public function updateadmin($id,$r1,$r2,$r3){
        $DBC=new DBC();
        $pdo=$DBC->Connect();

        $update_recipe=$pdo->prepare("Update `recipe` set `r1`='$r1',r2='$r2',r3='$r3' where id=$id");
        if($update_recipe){
            echo "Update Successful!";
        }
        else{
            echo "Update Failed!";
        }
    }

    public function deleteadmin($id){
        $DBC=new DBC();
        $pdo=$DBC->Connect();

        $delete_recipe=$pdo->prepare("Delete From `recipe` where `id`=$id");
        if($delete_recipe){
            echo "Delete Successful!";
        }
        else{
            echo "Delete Failed!";
        }
    }

//-------------------------------------------meal table--------------------------------
public function readMeal(){
    $DBC=new DBC();
    $pdo=$DBC->Connect();

    $read_catalog=$pdo->prepare("Select * from `meal`;");
    $read_catalog->execute();
    
    $read=$read_catalog->fetchAll(PDO::FETCH_OBJ);
    return $read;
}

public function insert_meal($name,$Cid,$EN_id,$MY_id){
    $DBC=new DBC();
    $pdo=$DBC->Connect();

    $insert_meal=$pdo->prepare("Insert into `meal`(name,Cid,EN_id,MY_id) values (:name,:Cid,:EN_id,:MY_id);");
    $insert_meal->bindParam(":name",$name);
    $insert_meal->bindParam(":Cid",$Cid);
    $insert_meal->bindParam(":EN_id",$EN_id);
    $insert_meal->bindParam(":MY_id",$MY_id);

        if( $insert_meal->execute()){
            echo "Insert meal Successful.";
        }
        else{
            echo "Insert meal Failed.";
        }

}

//-----------------------------------------------dessert table------------------------------------------------
public function readDessert(){
    $DBC=new DBC();
    $pdo=$DBC->Connect();

    $read_catalog=$pdo->prepare("Select * from `dessert`;");
    $read_catalog->execute();
    
    $read=$read_catalog->fetchAll(PDO::FETCH_OBJ);
    return $read;
}

public function insert_dessert($name,$Cid,$EN_id,$MY_id){
    $DBC=new DBC();
    $pdo=$DBC->Connect();

    $insert_dessert=$pdo->prepare("Insert into `dessert`(name,Cid,EN_id,MY_id) values (:name,:Cid,:EN_id,:MY_id);");
    $insert_dessert->bindParam(":name",$name);
    $insert_dessert->bindParam(":Cid",$Cid);
    $insert_dessert->bindParam(":EN_id",$EN_id);
    $insert_dessert->bindParam(":MY_id",$MY_id);

        if( $insert_dessert->execute()){
            echo "Insert dessert Successful.";
        }
        else{
            echo "Insert dessert Failed.";
        }

}
//--------------------------catalog table -----------------------

public function readCatalog(){
    $DBC=new DBC();
    $pdo=$DBC->Connect();

    $read_catalog=$pdo->prepare("Select * from `catalog`;");
    $read_catalog->execute();
    
    $read=$read_catalog->fetchAll(PDO::FETCH_OBJ);
    return $read;

    // foreach($read as $r){
    //     echo $r->Aid."-".$r->name."-".$r->email."-".$r->password."<br>";
   // }

}


//-----------------------------------------------description_en table-----------------------

public function insert_desEN($instructions,$ingredient,$pre_time,$cook_time,$photo){
    $DBC=new DBC();
    $pdo=$DBC->Connect();

    if($_SERVER['REQUEST_METHOD']==="POST"){
        $instructions=$_POST['instructions'];
        $ingredient=$_POST['ingredient'];
        $pre_time=(int)$_POST['pre_time'];
        $cook_time=(int)$_POST['cook_time'];
        $photo=$_FILES['photo'];   
    }
    
    $photoData=file_get_contents($photo['tmp_name']);
    // echo $instructions,$ingredient,$pre_time,$cook_time;
    // die(var_dump($photoData));
    
try{

    $insert_desEN=$pdo->prepare("insert into `description_en`(instructions,ingredient,pre_time,cook_time,photo) values(:instructions,:ingredient,:pre_time,:cook_time,:photo);");
    $insert_desEN->bindParam(":instructions",$instructions);
    $insert_desEN->bindParam("ingredient",$ingredient);
    $insert_desEN->bindParam("pre_time",$pre_time);
    $insert_desEN->bindParam("cook_time",$cook_time);
    $insert_desEN->bindParam("photo",$photoData,PDO::PARAM_LOB);

    $insert_desEN->execute();
        // echo "Insert Successfully.";
header("Location:index.php");
       }catch (PDOException $e){
        var_dump($e->getMessage());
       }
       catch (Exception $e){
        var_dump($e->getMessage());
       }

    }

    public function read_desEn(){
        $DBC=new DBC();
        $pdo=$DBC->Connect();

        $query=$pdo->prepare("Select * from `description_en`;");
        $query->execute();

        $read=$query->fetchAll(PDO::FETCH_ASSOC);
        return $read;

    }

    
//-----------------------------------------------description_my table-----------------------

public function insert_desMY($instructions,$ingredient,$pre_time,$cook_time,$photo){
    $DBC=new DBC();
    $pdo=$DBC->Connect();

    if($_SERVER['REQUEST_METHOD']==="POST"){
        $instructions=$_POST['instructions'];
        $ingredient=$_POST['ingredient'];
        $pre_time=(int)$_POST['pre_time'];
        $cook_time=(int)$_POST['cook_time'];
        $photo=$_FILES['photo'];   
    }
    
    $photoData=file_get_contents($photo['tmp_name']);
    // echo $instructions,$ingredient,$pre_time,$cook_time;
    // die(var_dump($photoData));
    
try{

    $insert_desEN=$pdo->prepare("insert into `description_my`(instructions,ingredient,pre_time,cook_time,photo) values(:instructions,:ingredient,:pre_time,:cook_time,:photo);");
    $insert_desEN->bindParam(":instructions",$instructions);
    $insert_desEN->bindParam("ingredient",$ingredient);
    $insert_desEN->bindParam("pre_time",$pre_time);
    $insert_desEN->bindParam("cook_time",$cook_time);
    $insert_desEN->bindParam("photo",$photoData,PDO::PARAM_LOB);

    $insert_desEN->execute();
        // echo "Insert Successfully.";
header("Location:index.php");
       }catch (PDOException $e){
        var_dump($e->getMessage());
       }
       catch (Exception $e){
        var_dump($e->getMessage());
       }

    }

    public function read_desMy(){
        $DBC=new DBC();
        $pdo=$DBC->Connect();

        $query=$pdo->prepare("Select * from `description_my`;");
        $query->execute();

        $read=$query->fetchAll(PDO::FETCH_ASSOC);
        return $read;

    }
}