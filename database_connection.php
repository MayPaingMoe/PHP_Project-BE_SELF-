<?php
// echo "<pre/>";
require_once "Connection.php";

class CRUD extends DBC{

//-----------------------------------------admin table----------------------------

    public function insertAdmin($name,$email,$password){
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

public function insert($instructions,$ingredient,$pre_time,$cook_time,$photo){
    $DBC=new DBC();
    $pdo=$DBC->Connect();

    $insert_desEN=$pdo->prepare("insert into `description_en(instructions,ingredient,pre_time,cook_time,photo) values();");
    $insert_desEN->bindParam("",$instructions);
    $insert_desEN->bindParam("",$ingredient);
    $insert_desEN->bindParam("",$pre_time);
    $insert_desEN->bindParam("",$cook_time);
    $insert_desEN->bindParam("",$photo);

    $