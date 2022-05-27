<?php
namespace App\Core;
abstract class Model implements IModel{
     //redefinition des fonctions 
 
    protected static  $database=null;
 
    protected static function database(){
        return self::$database=new Database();
    }

     public static function table():string {
        $table=get_called_class();
        $table=str_replace("App\\Model\\","",$table);
        $table=($table=="User" or $table=="AC" or $table=="RP" or $table=="Professeur")?"personne":strtolower($table);
        return $table;
     }

     public function __construct(){

     } 

     public function insert():int{
        return 0;
    }
    public function update(int $id):int{
        $db=self::database();
        $db->connexionBD();
        $sql="Update ".self::table(). " where id = $id";
        $result=$db->executeUpdate($sql);
        $db->closeConnexion();  
        return $result;
    }
    public static function delete(int $id):int{
        
        //requete non preparée la variable est injecté loes de lécriture de la requete
        $sql="delete from ".self::table(). " where id = $id";
            $result=$db->executeUpdate($sql);
        $db->closeConnexion();  
        return $result;
    }
    public static function findAll(){
        $db=self::database();
        $db->connexionBD();
            $sql="select * from ".self::table();
            $result=$db->executeSelect($sql);
        $db->closeConnexion();  
        return $result;
    }
    public static function findById(int $id){
        $db=self::database();
        $db->connexionBD();
        //requete preparée la variable est injecté lors de l'exécution de la requete
        //la variable est remplacé par un joker  ?=>0 ?=>1
            $sql="select * from " .self::table(). " where id=?";
            $result=$db->executeSelect($sql,[$id]);
        $db->closeConnexion();  
        return $result;
    }
    public static function findBy(string $sql,array $data=null,$single=false){
        $db=self::database();
        $db->connexionBD();
            $result=$db->executeSelect($sql,$data,$single);
        $db->closeConnexion();  
        return $result;
    }
} 