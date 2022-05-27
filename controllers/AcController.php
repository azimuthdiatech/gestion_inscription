<?php
namespace App\Controller;
use App\Model\AC;
use App\Core\Controller;
class AcController extends Controller{
   
    public function acAccueil(){ 

        $mod = AC::findAll();
        $data = [
            'libelle'=>'Liste des Professeurs',
                'mod'=>$mod
        ];
        $this->render("ac/ac.html.php", $data);
    }
}