<?php
namespace App\Model;
use App\Core\Model;
use App\Core\DataBase;
class Professeur extends Personne{
    //fonctions navigationnels
    //mAnyToMany => Classe
    public function classes():array{
        return[];
    }

    private string $grade;

    public function __construct(){
        parent::$role="ROLE_PROFESSEUR";
    }

    
    public static function findAll(){
        $db=parent::database();
        $db->connexionBD();  
        // dd(parent::table());
        $sql="select * from ".parent::table()." where role like 'ROLE_PROFESSEUR'";
        // dd($sql);
            $results=$db->executeSelect($sql);
        $db->closeConnexion();  
        return $results;
    } 

    public function insert():int{
        $db=parent::database(); 
        $db->connexionBD();
        $sql= "INSERT INTO `personne` (`nom_complet`,`role`,`grade`) VALUES (?,?,?)"; 
        $result=$db->executeUpdate($sql,[$this->nomComplet, parent::$role,$this->grade]);
        $db->closeConnexion();  
        return $result;
        
    }

    public function getGrade(): string{
        return $this->grade;
    }

    public function setGrade(string $grade): self{
        $this->grade = $grade;
        return $this;
    }
}  