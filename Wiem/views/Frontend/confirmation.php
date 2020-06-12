 <?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=melodyo', 'root', '');
 
if(isset($_GET['Prenom'], $_GET['key']) AND !empty($_GET['Prenom']) AND !empty($_GET['key'])) {
   $Prenom = htmlspecialchars(urldecode($_GET['Prenom']));
   $key = htmlspecialchars($_GET['key']);
   $requser = $bdd->prepare("SELECT * FROM client WHERE Prenom = ? AND confirmkey = ?");
   $requser->execute(array($Prenom, $key));
   $userexist = $requser->rowCount();
   if($userexist == 1) {
      $user = $requser->fetch();
      if($user['confirme'] == 0) {
         $updateuser = $bdd->prepare("UPDATE client SET confirme = 1 WHERE Prenom = ? AND confirmkey = ?");
         $updateuser->execute(array($Prenom,$key));
         echo "Votre compte a bien été confirmé !";

      } else {
         echo "Votre compte a déjà été confirmé ! <a href=\"connexion.php\"><u>Me connecter</u></a>";

      }
   } else {
      echo "L'utilisateur n'existe pas !";
   }
}
?>