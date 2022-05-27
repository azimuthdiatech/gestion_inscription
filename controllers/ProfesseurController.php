<?php
namespace App\Controller;
use App\Model\Professeur;
use App\Core\Controller;
class ProfesseurController extends Controller{
    public function affecterClasse(){ 
        $this->render("professeur/ajoutProf.html.php");
    }
    public function listerProfesseur(){ 

        $mod = Professeur::findAll();
        $data = [
            'libelle'=>'Liste des Professeurs',
                'mod'=>$mod
        ];
        $this->render("professeur/listerProfesseur.html.php", $data);
    }
}