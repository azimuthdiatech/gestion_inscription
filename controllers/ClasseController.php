<?php
namespace App\Controller;
use App\Model\Classe;
use App\Core\Controller;
use App\Core\Constantes;

class ClasseController extends Controller{


    // ********************creer classe***********************

    public function creerClasse(){
        if ($this->request->isGet()){
            $this->render("classe/createClasse.html.php",$data=[
                "action"=>Constantes::WEB_ROOT.'add-classe'
            ]);
        }else{
            extract($_POST);
            $mod= new Classe();
            $mod->setLibelle($libelle);
            $mod->setFiliere($filiere);
            $mod->setNiveau($niveau);            
            $mod->insert();
            
            $mod=Classe::findAll();
                $this->render("classe/listerClasse.html.php", $data=[
                    "classes"=>$mod
                ]);
        }
    }

    // ********************modifier classe***********************

    public function modifierClasse(){
        if ($this->request->isGet()){
            $id=$this->request->getUri()[1];
            //dd($id);
            $classe = Classe::findById($id);
            $this->render('classe/createClasse.html.php', $data=[
                "classe" => $classe[0],
                "action" =>Constantes::WEB_ROOT."modify-classe/".$classe[0]->id
            ]);
        }
        if($this->request->isPost()){
            $id=$this->request->getUri()[1];
        //dd($id);
            $mod= new Classe();
            extract($_POST);
            $mod->setId($id);
            $mod->setLibelle($libelle);
            $mod->setFiliere($filiere);
            $mod->setNiveau($niveau);            
            $mod->update($id);
            $mod=Classe::findAll();
                $this->render("classe/listerClasse.html.php", $data=[
                    "classes"=>$mod
                ]);
        } 
    }

    // ********************supprimer classe***********************

    public function supprimerClasse(){
        if ($this->request->isPost()){
            // $idsup = (int) $_POST['id'];
            extract($_POST);

            $data=new Classe();
            $data = Classe::delete($id);
            
            $mod=Classe::findAll();
                $this->render("classe/listerClasse.html.php", $data=[
                    "classes"=>$mod
                ]);
            
        }   
    }
    // ********************lister classe***********************

    public function listerClasse(){
        $mod=new Classe();
        $mod=Classe::findAll();
       
        $this->render("classe/listerClasse.html.php", $data=[
            "classes"=>$mod
        ]);
    }
        
}