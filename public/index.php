<?php
//1-Inclure le fichier
require_once("../vendor/autoload.php");
require_once("../core/fonction.php");
require_once("../routes/route.web.php");

use App\Model\Professeur;
use App\Model\Classe;
use App\Model\Module;
use App\Model\Demande;
use App\Model\AC;
use App\Model\RP;
use App\Model\Etudiant;
use App\Model\User;



/******INSERER UN PROF*******/
// $prof= new Professeur();
// $prof->setNomComplet("Thomas Lemar");
// $prof->setGrade("Ingenieur");
// $prof->insert();
// $profs=User::findUserByLoginAndPassword();

/******INSERER UN ac*******/
// $prof= new Etudiant();
// $prof->setNomComplet("Dia Fall");
// $prof->setLogin("etudiant@gmail.com");
// $prof->setPassword("etudiant");
// $prof->setMatricule("1027");
// $prof->setAdresse("Rufisque");
// $prof->setSexe("M");
//$prof->insert();


// /******INSERER Une classe*******/
// $class= new Classe();
// $class->setLibelle("Licence en Management informatisé des orgs");
// $class->setFiliere("LMIO");
// $class->setNiveau("L3");
// $class->insert();

// /******INSERER Un Module*******/
// $class= new Module();
// $class->setLibelle("Cybersécurité");
// $class->insert();

// /******INSERER Une demande*******/
// $class= new Demande();
// $class->setMotif("Anuller Inscription");
// $class->setEtat("Rejeté");
// $class->setInscriptionId(4);
// $class->setEtudiantId(4);
// $class->insert();








/******inserer un AC*******/
// $ac= new AC();
// $ac->setNomComplet("jean");
// $ac->setLogin("acjean");
// $ac->setPassword("jeanac");
// $ac->insert();

// $userConnect=User::findUserByLoginAndPassword("samaac@gmail.com","samaac");
// dd($userConnect);       

// $db=parent::database();
// $pdo = new \PDO("mysql:dbname=gestion_inscription;host=127.0.0.1:3308","root",""); 
// // $db->connexionBD();
// $sql="select * from personne where login like '".$login."' and password like '".$password."'";
// // die($sql);
// // $result= $db->executeSelect($sql,[$login,$password],true);
// $query=$pdo->prepare($sql);
// $query->execute();
// $result = $query->fetch();
// // dd($result);     
// // $db->closeConnexion();
// return $result;