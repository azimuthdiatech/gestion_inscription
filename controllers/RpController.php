<?php
namespace App\Controller;
use App\Model\RP;
use App\Core\Controller;
class RpController extends Controller{
   
    public function rpAccueil(){ 

        $mod = RP::findAll();
        $data = [
            'libelle'=>'Liste des RP',
                'mod'=>$mod
        ];
        $this->render("rp/rp.html.php", $data);
    }
}