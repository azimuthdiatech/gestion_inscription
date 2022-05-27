<?php
namespace App\Model;
use App\Core\Model;
class Etudiant extends User{
    private string $matricule;
    private string $sexe;
    private string $adresse; 

    public function __construct(){
        self::$role="ROLE_ETUDIANT";
    }

         //Getters 
    public function getMatricule():string{
        return $this->matricule;
    }
    public function getSexe():string{
        return $this->sexe;
    }
    public function getAdresse():string{
        return $this->adresse;
    }

        //Setters
    public function setMatricule(string $matricule):self{
        $this->matricule = $matricule;
        return $this;
    }
    public function setSexe(string $matricule):self{
        $this->sexe = $sexe;
        return $this;
    }
    public function setAdresse(string $matricule):self{
        $this->adresse = $adresse;
        return $this;
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
        $sql="select * from ".self::$table."where role like ".self::$role."";
        echo $sql;
        return [];
    } 
}