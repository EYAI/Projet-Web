<?php

include "D:\wamp64\www\Melodyo\Core\CompositeurOPS.php";
include "D:\wamp64\www\Melodyo\Core\config.php";

    $CompositeurOPS = new CompositeurOPS();

    $CompositeurOPS->supprimerCompositeur($_GET['IdCom']);
    header("location: AfficherComp.php");

?>