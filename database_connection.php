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


    // public function editadmin($id){
    //     $DBC=new DBC();
    //     $pdo=$DBC->Connect();

    //     $edit_recipe=$pdo->prepare("Select * from `admin` where id=:id");
    //     $edit_recipe->bindParam(":id",$id);
    //     $edit=$edit_recipe->fetchAll(PDO::FETCH_OBJ);
    //     // return $read;

    //     foreach($edit as $e){
    //         echo $e->r1."-".$e->r2."-".$e->r3."-"."<br>";
    //     }
        
    // }

    // public function updateadmin($id,$r1,$r2,$r3){
    //     $DBC=new DBC();
    //     $pdo=$DBC->Connect();

    //     $update_recipe=$pdo->prepare("Update `recipe` set `r1`='$r1',r2='$r2',r3='$r3' where id=$id");
    //     if($update_recipe){
    //         echo "Update Successful!";
    //     }
    //     else{
    //         echo "Update Failed!";
    //     }
    // }

    // public function deleteadmin($id){
    //     $DBC=new DBC();
    //     $pdo=$DBC->Connect();

    //     $delete_recipe=$pdo->prepare("Delete From `recipe` where `id`=$id");
    //     if($delete_recipe){
    //         echo "Delete Successful!";
    //     }
    //     else{
    //         echo "Delete Failed!";
    //     }
    // }

//-------------------------------------------meal table--------------------------------
public function read_meal(){
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

public function edit_meal($mid){
    $DBC=new DBC();
    $pdo=$DBC->Connect();

    $edit_meal=$pdo->prepare("Select * from meal where Mid='$mid';");
    $edit_meal->execute();
    $edit=$edit_meal->fetchAll(PDO::FETCH_OBJ);
    return $edit;
}

public function update_meal($name,$mid){
    $DBC=new DBC();
    $pdo=$DBC->Connect();

    $update_meal=$pdo->prepare("Update meal set name='$name' where Mid='$mid';");
   if( $update_meal->execute()){
    echo "Update meal Successfully.";
   }
   else{
    echo "Update meal Failed.";
   }

}

public function delete_meal($mid){
    $DBC=new DBC();
    $pdo=$DBC->Connect();
    $delete_meal=$pdo->prepare("Delete from meal where Mid='$mid';");
   if( $delete_meal->execute()){
    echo "Delete meal successfully.";
   }
   else{
    echo "Delete meal failed.";
   }
}
//-----------------------------------------------dessert table------------------------------------------------
public function read_dessert(){
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

public function edit_dessert($did){
    $DBC=new DBC();
    $pdo=$DBC->Connect();

    $edit_dessert=$pdo->prepare("Select * from dessert where Did='$did';");
    $edit_dessert->execute();
    $edit=$edit_dessert->fetchAll(PDO::FETCH_OBJ);
    return $edit;
}

public function update_dessert($name,$did){
    $DBC=new DBC();
    $pdo=$DBC->Connect();
    $update_dessert=$pdo->prepare("Update dessert set name='$name' where Did='$did';");
    if($update_dessert->execute()){
        echo "Update dessert successfully.";
    }
    else{
        echo "Update dessert failed.";
    }
}

public function delete_dessert($did){
    $DBC=new DBC();
    $pdo=$DBC->Connect();

    $delete_dessert=$pdo->prepare("Delete from dessert where Did='$did';");
    if($delete_dessert->execute()){
        echo "Delect dessert successfully.";
    }
    else{
        echo "Delete dessert failed.";
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

public function insertCatalog(){
    $DBC=new DBC();
    $pdo=$DBC->Connect();

    $insert_catalog=$pdo->prepare("Insert into Catalog() values ();");
    $insert_catalog->execute();

    if(!$insert_catalog){
        echo "Insert Catalog Failed.";
    }
}

public function edit_catalog($cid){
    $DBC=new DBC();
    $pdo=$DBC->Connect();

    $edit_catalog=$pdo->prepare("Select * from catalog where Cid='$cid';");
    $edit_catalog->execute();

    $edit=$edit_catalog->fetchAll(PDO::FETCH_OBJ);
    return $edit;
}

public function update_catalog($name,$cid){
    $DBC=new DBC();
    $pdo=$DBC->Connect();

    $update_catalog=$pdo->prepare("Update catalog set name='$name' where Cid='$cid';");
    if($update_catalog->execute()){
        echo "Update catalog successfully.";
    }
    else{
        echo "Update catalog failed.";
    }
}

public function delete_catalog($cid){
    $DBC=new DBC();
    $pdo=$DBC->Connect();

    $delete_catalog=$pdo->prepare("Delete from catalog where Cid='$cid';");
    if($delete_catalog->execute()){
        echo "Delete Catalog Successfully.";
    }
    else{
        echo "Delete Catalog Failed.";
    }
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
// header("Location:index.php");
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

   
    public function lastIDEn() {  
        $DBC = new DBC();  
        $pdo = $DBC->Connect();  
    
        // Prepare and execute the query  
        $lastIDQuery = $pdo->prepare("SELECT MAX(EN_id) AS last_id FROM description_en");  
        $lastIDQuery->execute();  
        
        // Fetch the result  
        $result = $lastIDQuery->fetch(PDO::FETCH_ASSOC);  
        
        // Return the last ID, use a null coalescing operator to default to 0 if it doesn't exist  
        return $result['last_id'] ?? 0;  
    }

    public function edit_desEn($id){
        $DBC=new DBC();
    $pdo=$DBC->Connect();

    $edit_desEn=$pdo->prepare("Select * from description_en where EN_id='$id';");
    $edit_desEn->execute();
    $edit=$edit_desEn->fetchAll(PDO::FETCH_OBJ);
    return $edit;
    }

    public function update_desEn($id,$inst,$ingr,$prt,$cot){
        $DBC=new DBC();
    $pdo=$DBC->Connect();

    $update_desEn=$pdo->prepare("Update description_en set instruction='$inst',ingredient='$ingr',pre_time='$prt',cook_time='$cot' where EN_id='$id';");
    if($update_desEn->execute()){
        echo "Update description_en Successfully.";
    }
    else{
        echo "Update description_en Failed.";
    }
    }
    
    public function delete_desEn($id){
        $DBC=new DBC();
    $pdo=$DBC->Connect();

    $delete_desEn=$pdo->prepare("Delete from description_en where EN_id='$id';");
    if($delete_desEn->execute()){
        echo "Delete from description_en successfully.";
    }
    else{
        echo "Delete form description_en failed.";
    }
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
// header("Location:index.php");
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

    public function lastIDMy() {  
        $DBC = new DBC();  
        $pdo = $DBC->Connect();  
    
        // Prepare and execute the query  
        $lastIDQuery = $pdo->prepare("SELECT MAX(MY_id) AS last_id FROM description_my");  
        $lastIDQuery->execute();  
        
        // Fetch the result  
        $result = $lastIDQuery->fetch(PDO::FETCH_ASSOC);  
        
        // Return the last ID, use a null coalescing operator to default to 0 if it doesn't exist  
        return $result['last_id'] ?? 0;  
    }

    public function edit_desMy($id){
        $DBC=new DBC();
    $pdo=$DBC->Connect();

    $edit_desMy=$pdo->prepare("Select * from description_my where EN_id='$id';");
    $edit_desMy->execute();
    $edit=$edit_desMy->fetchAll(PDO::FETCH_OBJ);
    return $edit;
    }

    public function update_desMy($id,$inst,$ingr,$prt,$cot){
        $DBC=new DBC();
    $pdo=$DBC->Connect();

    $update_desMy=$pdo->prepare("Update description_my set instruction='$inst',ingredient='$ingr',pre_time='$prt',cook_time='$cot' where EN_id='$id';");
    if($update_desMy->execute()){
        echo "Update description_my Successfully.";
    }
    else{
        echo "Update description_my Failed.";
    }
    }
    
    public function delete_desMy($id){
        $DBC=new DBC();
    $pdo=$DBC->Connect();

    $delete_desMy=$pdo->prepare("Delete from description_my where EN_id='$id';");
    if($delete_desMy->execute()){
        echo "Delete from description_my successfully.";
    }
    else{
        echo "Delete form description_my failed.";
    }
    }

//--------------------------------------------user table-----------------------------------
    public function read_user(){
        $DBC=new DBC();
    $pdo=$DBC->Connect();
        $read_user=$pdo->prepare("Select * from `user`;");
        $read_user->execute();
        
        $read=$read_user->fetchAll(PDO::FETCH_OBJ);
        return $read;
    }

    public function insert_user($name,$email,$pwd){
        $DBC=new DBC();
    $pdo=$DBC->Connect();

    $insert_user=$pdo->prepare("Insert into user(name,email,password) values('$name','$email','$pwd');");
    if($insert_user->execute()){
        echo "Insert user successfully.";
    }
    else{
        echo "Insert user failed.";
    }
    }

    public function edit_user($id){
        $DBC=new DBC();
        $pdo=$DBC->Connect();

        $edit_user=$pdo->prepare("Select * from user where Uid='$id';");
        $edit_user->execute();
        $edit=$edit_user->fetchAll(PDO::FETCH_OBJ);
        return $edit;
    }

    public function update_user($id,$name,$pwd){
        $DBC=new DBC();
        $pdo=$DBC->Connect();

        $update_user=$pdo->prepare("Update user set name='$name',password='$pwd' wher Uid='$id';");
        if($update_user->execute()){
            echo "Update User successfully.";
        }
        else{
            echo "Update failed.";
        }
    }

    public function delete_user($id){
        $DBC=new DBC();
        $pdo=$DBC->Connect();

        $delete_user=$pdo->prepare("Delete from user where Uid='$id';");
        if($delete_user->execute()){
            echo "Delete user successfully.";
        }
        else{
            echo "Delete user failed.";
        }
    }
}