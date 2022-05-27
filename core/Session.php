<?php
namespace App\Core;
use App\Model\User;
abstract class Session{

    
    public function __construct()
    {
       
    }
    //demarrer session
    public static function openSession():void{
        if(session_status()==PHP_SESSION_NONE){
            session_start();
        }
    }
    //Ajouter une donnee dans la session
    public function set(string $key,$data){
        $_SESSION[$key]=$data;
    }
    public function get(string $key){
       return $_SESSION[$key];
    }



    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
}