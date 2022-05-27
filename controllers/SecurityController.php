<?php
namespace App\Controller;
use App\Core\Controller;
use App\Core\Session;
use App\Model\User;
use App\Core\Role;

class SecurityController extends Controller{
    public function authentification(){
        if ($this->request->isGet()){
            $this->render("security/login.html.php");
        }
        if ($this->request->isPost()){
            extract($_POST);
            $user=User::findUserByLoginAndPassword($login,$password);
            if($user!=NULL){
                
                $this->redirecToRoute("lister-professeur");
            }else{
                $this->session->set("user",$user);

                $this->render("security/login.html.php");
            }
        }
    }
    public function deconnexion(){
        session_unset();
        unset($_COOKIE);
        $this->redirecToRoute("login");
        exit();
    }
} 