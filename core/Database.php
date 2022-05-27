<?php
namespace App\Core;
use PDO;
class Database {
    private  $pdo;

    public function connexionBD():void{
      try{
          $this->pdo= new \PDO("mysql:dbname=gestion_inscription;host=127.0.0.1:3308","root","");
          
      } catch(\Exception $e) {
          echo $e->getMessage();
      } 
    }
    public function closeConnexion():void{
        $this->pdo=null;
    }

    public function executeSelect(string $sql,$data=[],bool $single=false){
        $query=$this->pdo->prepare($sql);
        $query->execute($data); 

        if($single){    
            $result=$query->fetch(\PDO::FETCH_OBJ);
            
            if($query->rowCount()==0){
                // dd("dlkmlkmdg");
                return $result;
            }
        }else{

            $result=$query->fetchAll(\PDO::FETCH_OBJ);

        }
        return $result;
    }
    public function executeUpdate(string $sql,array $data=[]):int{
        $query=$this->pdo->prepare($sql);
        $query->execute($data); 
        return $query->rowCount();
    }
 
} 