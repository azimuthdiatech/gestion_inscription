<?php
namespace App\Model;
use App\Core\Model;
class AnneeScolaire extends Model{
    //fonctions navigationnels => fonctions issus des associations

    //OneToMany => Inscription 
    public function inscriptions():array{
        return [];
    }


}