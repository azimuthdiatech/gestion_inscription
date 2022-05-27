<?php
namespace App\Controller;
use App\Model\Module;
use App\Core\Controller;
class ModuleController extends Controller{
    public function ajouterModule(){
        $this->render("module/ajoutModule.html.php");
    }
    public function listerModule(){
        
        $mod=Module::findAll();

    $data=[
                'libelle'=>'Liste des Modules',
                'mod'=>$mod
    ];
            $this->render("module/listerModule.html.php", $data);
    }
} 