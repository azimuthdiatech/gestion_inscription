<?php
namespace App\Model;
use App\Core\Model;
use App\Core\DataBase;
class Module extends Model{
    private string $libelle;

    public function __construct(){
    }

    public function insert():int{
        $db=parent::database(); 
        $db->connexionBD();
        $sql= "INSERT INTO `module` (`libelle`) VALUES (?)";
        $result=$db->executeUpdate($sql,[$this->libelle]);
        $db->closeConnexion();  
        return $result;  
    }

    public static function findAll():array{
        $db=parent::database();
        $db->connexionBD();  
        $sql="select * from module";
        $results=$db->executeSelect($sql);
        // dd($results);
        $db->closeConnexion();  
        
        return $results;
    } 




    /**
     * Get the value of libelle
     *
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @param string $libelle
     *
     * @return self
     */
    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }
}

    
   
