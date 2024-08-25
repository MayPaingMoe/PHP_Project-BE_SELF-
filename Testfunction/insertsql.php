<?php
require_once "Connection.php";

class insert{
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

}