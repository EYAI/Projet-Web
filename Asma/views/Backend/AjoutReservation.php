<?php
include "C:\wamp64\www\melodyo\Core\config.php";
include "C:\wamp64\www\melodyo\Core\ReservationOps.php";


if (isset($_POST['RefR']) and isset($_POST['DateR']) and isset($_POST['DiscountP'])){
    $reservation = new reservation($_POST['RefR'],$_POST['DateR'],$_POST['DiscountP']);
    $reservationOps = new reservationOps();
    $reservationOps->ajouterReservation($reservation);
    } else{
        echo "champs obligatoires";
    }
?>
