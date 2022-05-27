<?php
namespace App\Model;
use App\Core\Model;
class RP extends User{
    //fonctions navigationnels
    //mAnyToMany => Classe
    
    public function __construct(){
       self::$role="ROLE_RP";
    }

    public function insert():int{
        $db=parent::database(); 
        $db->connexionBD();
        $sql= "INSERT INTO `personne` (`nom_complet`,`role`,`login`,`password`) VALUES (?,?,?,?)"; 
        $result=$db->executeUpdate($sql,[$this->nomComplet, parent::$role,$this->login,$this->password]);
        $db->closeConnexion();  
        return $result;
    }
    public static function findAll():array{
        $sql="select * from ".self::table()." where `role` = $role";
        // $sql="SELECT * FROM" `personne` WHERE `role` = "ROLE_RP"";
        echo $sql;
        return [];
    } 
}