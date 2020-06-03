<?php
include "C:\wamp64\www\melodyo\Core\config.php";
include "C:\wamp64\www\melodyo\Core\commentaireOps.php";


if (isset($_POST['Name']) and isset($_POST['Email']) and isset($_POST['MSG'])){
    $commentaire = new commentaire($_POST['Name'],$_POST['Email'],$_POST['MSG']);
    $commentaireOps = new commentaireOps();
    $commentaireOps->ajouterCommentaire($commentaire);
    
    } else{
        echo "champs obligatoires";
    }

?>
