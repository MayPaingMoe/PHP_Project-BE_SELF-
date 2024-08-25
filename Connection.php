<?php

class DBC{
    public function Connect(){
       try{
        $pdo=new PDO("mysql:host=localhost;dbname=php_project","root","");
        // echo "Connection Successful.";
        return $pdo;
        // die(var_dump($pdo));
      
       }
       catch (PDOException $e){
        var_dump($e->getMessage());
       }
       catch (Exception $e){
        var_dump($e->getMessage());
       }
    }
} 

// $dbconnect=new DBC();
// $dbconnect->Connect();