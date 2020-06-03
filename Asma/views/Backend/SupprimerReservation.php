<?php
include "C:\wamp64\www\melodyo\Core\config.php";
include "C:\wamp64\www\melodyo\Core\ReservationOps.php";

$reservationOps = new reservationOps();
$reservationOps->supprimerReservation($_GET['RefR']);
    header("location: ListeReservation.php");
    
?>
