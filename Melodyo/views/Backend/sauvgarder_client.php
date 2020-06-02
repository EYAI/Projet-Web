<?php

include('..\Backend\db.php');


  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $cin = $_POST['cin'];
  $adresse = $_POST['adresse'];
  $numdetel = $_POST['numdetel'];
  $email = $_POST['email'];
  $mdp = md5($_POST['mdp']);
  $rolee= 'client';
  $query = "INSERT INTO user(nom,prenom,cin,adresse,numdetel,email,mdp,rolee) VALUES ('$nom', '$prenom', '$cin', '$adresse', '$numdetel', '$email', '$mdp','client')";
  $result = mysqli_query($conn, $query);
  header ('location:..\Backend\page_membre.php');
  

 





?>
