<?php 
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\config.php';
include 'C:\Users\hp\AppData\Local\Microsoft\Windows\Burn\Burn\xampp\htdocs\Melodyo\Core\ClientOps.php';

if (isset($_POST['ID']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['telephone'])   and isset($_POST['Mdp'])  and isset($_POST['Email'])){

    $Client = new Client($_POST['ID'],$_POST['nom'],$_POST['prenom'],$_POST['telephone'],$_POST['Mdp'],$_POST['Email']);

    $ClientOps = new ClientOps();

    $ClientOps->modifierClient($Client,$ID);
}
header("location: AfficherClient.php");
?>
