<?php 
include "C:\wamp64\www\Melodyo\Core\config.php";
include "C:\wamp64\www\Melodyo\Core\FactureOps.php";


$facture = new facture($_POST['ID'], $_POST['Montant'],$_POST['Code']);

    $FactureOps = new FactureOps();
   
    $FactureOps->modifierfacture($facture);
    header("Location:..\Backend\ModifierFacture.php");

?>