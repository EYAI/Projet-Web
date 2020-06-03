<?php 
include "C:\wamp64\www\melodyo\Core\config.php";
include "C:\wamp64\www\melodyo\Core\promotionOps.php";

if (isset($_POST['RefP']) and isset($_POST['DateL']) and isset($_POST['Discount'])){
    $promotion = new promotion($_POST['RefP'],$_POST['DateL'],$_POST['Discount']);
    $promotionOps = new promotionOps();
    $promotionOps->modifierPromotion($promotion);
    }else{
        echo "vérifier les champs";
    }
    ?>
