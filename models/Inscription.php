<?php
namespace App\Model;
use App\Core\Model;
class Inscription extends Model{

    private int $id;

    public function __construct(){
        self::$table="inscription";
    }

    //ManyToOne => AC
    public function ac():AC{
        $sql="select p.* from ".parent::table()."i,personne
                        p where p.id=ac_ id 
                        and p.role like 'ROLE_AC'
                        and i.id=".$this->id;
        return new AC();
    }
    //ManyToOne => AnneeScolaire
    public function anneeScolaire():AnneeScolaire{
        $sql="select p.* from ".parent::table()."a,inscription i
                        where a.id=i.annee_id 
                        and i.id=".$this->id;
        return new AnneeScolaire();
    }
}