<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil </title>
    <link rel="icon" href="<?=$Constantes::WEB_ROOT.'img/pp.jpg'?>">
    <link rel="stylesheet" href="<?=$Constantes::WEB_ROOT.'bootstrap/dist/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?=$Constantes::WEB_ROOT.'css/style.css'?>">
<script src="<?=$Constantes::WEB_ROOT.'bootstrap/dist/js/bootstrap.min.js'?>"></script>

</head>
<body background-color="red">
<div>
    <img src="<?=$Constantes::WEB_ROOT.'img/b1.jpg'?>" class="entete">
</div>
<nav>
    <ul>
        <li class="deroulant"><a href="#">Classe &ensp;</a>
            <ul class="sous">
                <li><a href="<?=$Constantes::WEB_ROOT.'classes'?>" class="dropdown-item">lister Classe</a></li>
                <li><a href="<?=$Constantes::WEB_ROOT.'add-classe'?>" class="dropdown-item">Ajouter Classe</a></li>
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
        <li class="deroulant"><a href="#">Modules &ensp;</a>
            <ul class="sous">
                <li><a href="<?=$Constantes::WEB_ROOT.'modules'?>" class="dropdown-item">Lister les modules</a></li>
            </ul>
        </li>
        <li class="decon"><a href="<?=$Constantes::WEB_ROOT.'logout'?>">Deconnexion</a></li>
  </ul>
</nav>

<?php
?>

</body> 
</html>