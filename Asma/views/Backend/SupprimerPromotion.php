<?php 
include "C:\wamp64\www\melodyo\Core\config.php";
include "C:\wamp64\www\melodyo\Core\promotionOps.php";


    $promotionOps = new promotionOps();
    $promotionOps->supprimerPromotion($_GET['RefP']);
    header("location: ListePromotion.php");
    ?>
