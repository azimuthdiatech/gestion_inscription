<?php

namespace App\Core;

class Role{
  
    public function __construct(Session $session){
        
    }
    public  static function isConnect(){
        return isset(Session::get_current_user["user"]);
    }
    public  static function isRP(){
        return self::isConnect() && $_SESSION['user']->role=="ROLE_RP";
    }
    public  static function isAC(){
        return self::isConnect() && $_SESSION['user']->role=="ROLE_AC";
    }
    public  static function isEtudiant(){
        return self::isConnect() && $_SESSION['user']->role=="ROLE_ETUDIANT";
    }
}