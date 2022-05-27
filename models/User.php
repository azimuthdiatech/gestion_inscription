<?php
namespace App\Model;
use App\Core\Model;

abstract class User extends Personne{
    protected string $login;
    protected string $password;
 
    //Getters 
    public function getLogin():string{
        return $this->login;
    }
    public function getPassword():string{
        return $this->password;
    }

    //Setters
    public function setLogin(string $login):self{
        $this->login = $login;
        return $this;
    }

    public function setPassword(string $password):self{
        $this->password = $password;
        return $this; 
    }

    public static function findUserByLoginAndPassword(string $login,string $password){
        $db=parent::database(); 
        $db->connexionBD();
        $sql="select * from personne where login=? and password=?";
        $result=$db->executeSelect($sql,[$login,$password],true);
        $db->closeConnexion(); 
       return $result;
    }
    
    public static function findAll():array{
        $db=parent::database(); 
        $db->connexionBD();
        $sql="select * from ".parent::table()." where role not like 'ROLE_PROFESSEUR'";
        $result=$db->excuteSelect($sql);
        $db->closeConnexion(); 
        return $result;
    }
} 