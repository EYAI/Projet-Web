<?php
include "C:\wamp64\www\melodyo\Core\config.php";
include "C:\wamp64\www\melodyo\Core\commentaireOps.php";

$commentaireOps = new commentaireOps();
$commentaireOps->supprimerCommentaire($_GET['MSG']);
    header("location: ListeCommentaire.php");
    
?>