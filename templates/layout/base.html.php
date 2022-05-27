<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEST INSC </title>
    <link rel="stylesheet" href="<?=$Constantes::WEB_ROOT.'bootstrap/dist/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?=$Constantes::WEB_ROOT.'css/style.css'?>">
</head>
<body>

<!-- <nav>
    <ul>
        <li class="deroulant"><a href="#">Classe &ensp;</a>
            <ul class="sous">
                <li><a href="<?=$Constantes::WEB_ROOT.'classes'?>" class="dropdown-item">lister Classe</a></li>
                <li><a href="<?=$Constantes::WEB_ROOT.'add-classe'?>" class="dropdown-item">Ajouter Classe</a></li>
                <li><a href="<?=$Constantes::WEB_ROOT.'modify-classe'?>" class="dropdown-item">Modifier Classe</a></li>
            </ul>
        </li>
        <li class="deroulant"><a href="#">Professeur &ensp;</a>
            <ul class="sous">
                <li><a href="<?=$Constantes::WEB_ROOT.'lister-professeur'?>" class="dropdown-item">lister Professeur</a></li>
                <li><a href="<?=$Constantes::WEB_ROOT.'add-prof'?>" class="dropdown-item">Ajouter professeur</a></li>
            </ul>
        </li>
        <li class="deroulant"><a href="#">Demande &ensp;</a>
            <ul class="sous">
                <li><a href="<?=$Constantes::WEB_ROOT.'demandes'?>" class="dropdown-item">Lister les demandes</a></li>
                <li><a href="<?=$Constantes::WEB_ROOT.'add-demand'?>" class="dropdown-item">Ajouter une demande</a></li>
            </ul>
        </li>
        <li><a href="#">Modules</a></li>
        <li><a href="<?=$Constantes::WEB_ROOT.'logout'?>">Deconnexion</a></li>
  </ul>
</nav> -->

    <!-- <ul class="nav justify-content-end mt-1">
        <li class="nav-item dropdown">
            <p class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Professeur</p>
                <div class="dropdown-menu">
        
                </div> 
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Classe</a>
            <div class="dropdown-menu">
                <ul>
                    <li><a href="<?=$Constantes::WEB_ROOT.'classes'?>" class="dropdown-item">lister Classe</a></li>
                    <li><a href="#" class="dropdown-item">Ajouter Classe</a></li>
                    <li><a href="#" class="dropdown-item">Supprimer classe</a></li>
                </ul>
                    </div>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="<?=$Constantes::WEB_ROOT.'modules'?>">Module</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="<?=$Constantes::WEB_ROOT.'demandes'?>">Demande</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="<?=$Constantes::WEB_ROOT.'logout'?>">Inscription</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="<?=$Constantes::WEB_ROOT.'logout'?>">Deconnexion</a>
        </li>
    </ul> -->

<?php
    if($_SERVER["REQUEST_URI"]!=="/login"){
        require_once("nav.html.php");
    } 
?>
<div class="main">
    <div class="contain">
        <?=$content_for_views?>
    </div>
</div>
    
 

<script src=""></script>
</body> 
</html>