<?php
   include "C:\wamp64\www\Melodyo\Core\config.php";
   include "C:\wamp64\www\Melodyo\Core\categorieOps.php"; 

    $categorie = new categorie($_POST['idCategorie'],$_POST['nomCategorie']);

    $categorieOps = new categorieOps();

    $liste = $categorieOps->ajouterCategorie($categorie);
    header("Location:..\Backend\AjouterCategorie1.html ");
    
?>