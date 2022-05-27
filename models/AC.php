<?php
namespace App\Model;
use App\Core\Model;
use App\Core\Database;
class AC extends User{
     

    //attributs navigationnels => attributs issus des associations
        //OneToMany => Inscription
        //1ere approche
        private array $inscriptions;

        //2ere approche
    //fonctions navigationnels => fonctions issus des associations
    
    public function inscriptions():array{
        return [];
    }
    public function __construct(){
        parent::$role="ROLE_AC";
        $this->inscriptions= [];
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
        $db=parent::database();
        $db->connexionBD();  
        $sql="select `id`,`nom_complet`,`role`, `login`, `password` from ".parent::table()." where role like 'ROLE_AC'";
        $results=$db->executeSelect($sql);
        $db->closeConnexion();
        return $results;
    } 


} 