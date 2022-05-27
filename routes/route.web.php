<?php

use App\Core\Router;
use App\Controller\SecurityController;
use App\Controller\ClasseController;
use App\Controller\PersonneController;
use App\Controller\ProfesseurController;
use App\Controller\ModuleController;
use App\Controller\DemandeController;
use App\Controller\AcController;
use App\Controller\RpController;
use App\Controller\UserController;
use App\Controller\InscriptionController;


use App\Exception\RouteNotFoundException;

$router=new Router();
                        // SecurityController
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);

                        // ClasseController
$router->route('/classes',[ClasseController::class,"listerClasse"]);
$router->route('/add-classe',[ClasseController::class,"creerClasse"]);
$router->route('/delete-classe',[ClasseController::class,"supprimerClasse"]);
$router->route('/modify-classe',[ClasseController::class,"modifierClasse"]);

                        // ProfesseurController
$router->route('/add-prof',[ProfesseurController::class,"affecterClasse"]);
$router->route('/lister-professeur',[ProfesseurController::class,"listerProfesseur"]);

                        // ModuleController
$router->route('/add-module',[ModuleController::class,"ajouterModule"]);
$router->route('/modules',[ModuleController::class,"listerModule"]);

                        // PersonneController
$router->route('/personne',[PersonneController::class,"lister"]);

                        // DemandeController
$router->route('/add-demand',[DemandeController::class,"ajouterDemande"]);
$router->route('/demandes',[DemandeController::class,"listerDemande"]);

                        // InscriptionController
$router->route('/inscrits',[InscriptionController::class,"listerInscription"]);
$router->route('/add-insc',[InscriptionController::class,"inscrire"]);

                        // AcController
$router->route('/ac',[AcController::class,"acAccueil"]);

                        // RpController
$router->route('/rp',[RpController::class,"rpAccueil"]);



// $router->resolve();


 try{
    //essaie de resoude la route
    $router->resolve();

 }catch(RouteNotFoundException $ex){
     //Capture l'exception et affiche
     echo $ex->message;
 }