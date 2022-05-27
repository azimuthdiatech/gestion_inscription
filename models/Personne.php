<?php
namespace App\Model;
use App\Core\Model;

/*class concrete 
    -produit des objets
    -contient que des méthodes concrete
    -on connait sa définition
class abstraite 
    -ne produit pas d'objets
    -contient des méthodes concrete et abstraite
    on ne connait pas sa définition
class final
    -ne peut pas avoir de class fille
    -pas de spécialisation
    */

abstract class Personne extends Model{
     //attributs d'instances
    protected int $id;
    protected string $nomComplet;
    protected static string $role;
    

    //attributs classe ou static 
    private static int $nbrePersonne;
    //Methodes abstraite

    //Constructeur
    public function __construct(){
        parent::$table="personne";
    }
  
  
    //Getters 
    public function getId():int{
        return $this->id;
    }
    public function getNomComplet():string{
        return $this->nomComplet;
    }
    //les 2 deux point sont des opérateur de portée de classe
    public static function getNbrePersonne():int{
        return self::$nbrePersonne;
    }
    public function getRole():string{
        return $this->role;
    }
    //Setters
    public function setId(int $id):self{
        $this->id=$id;
        return $this;
    }
    public function setNomComplet(string $nomComplet):self{
        $this->nomComplet=$nomComplet;
        return $this;
    }
    public static function setNbrePersonne(int $nbrePersonne):void{
        self::$nbrePersonne=$nbrePersonne;
    }
    public function setRole(string $role):self{
        $this->role = $role;
        return $this;
    }
     
    //redefinition
    
   
}