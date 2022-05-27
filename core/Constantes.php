<?php
namespace App\Core;
class Constantes{

    public const ROLE_PROFESSEUR = "ROLE_PROFESSEUR";
    public const ROLE_ETUDIANT = "ROLE_ETUDIANT";
    public const ROLE_AC = "ROLE_AC";
    public const ROLE_RP = "ROLE_RP";
    public const WEB_ROOT="http://localhost:8002/";

    public static function getWebRoot(){
        return (self::ROOT()."/public");
    }
    public static function ROOT(){

    return str_replace("public/index.php","",$_SERVER["SCRIPT_FILENAME"]);

    }
    
    
}
