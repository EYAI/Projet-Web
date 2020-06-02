<?php 
include "C:\wamp64\www\Melodyo\Core\config.php";
include "C:\wamp64\www\Melodyo\Core\FactureOps.php";

  $FactureOps=new FactureOps();
  
  $FactureOps->supprimerfacture($_GET["Code"]);
 
   header("location: AfficherFacture.php");



?>