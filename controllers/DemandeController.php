<?php
namespace App\Controller;
use App\Model\Demande;
use App\Core\Controller;
class DemandeController extends Controller{
    public function ajouterDemande(){
       
        $this->render("demande/ajouterDemande.html.php");

    }
    public function listerdemande(){

            $mod = Demande::findAll();
            
            $data=[
                'libelle'=>'Liste des Demandes',
                'mod'=>$mod
            ] ;
            $this->render("demande/listerDemande.html.php", $data);
    }
} 