<?php
namespace App\Controller;
use App\Model\Professeur;
use App\Core\Controller;
class InscriptionController extends Controller{
    public function inscrire(){ 
        $this->render("inscription/addInsc.html.php");
    }
    public function listerInscription(){ 

        $mod = Professeur::findAll();
        $data = [
            'libelle'=>'Liste des Professeurs',
                'mod'=>$mod
        ];
        $this->render("professeur/listerInsc.html.php", $data);
    }
}