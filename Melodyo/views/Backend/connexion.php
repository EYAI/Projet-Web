<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include 'C:\wamp64\www\Melodyo\Entities\User.php';
$c=new config();
$conn=$c->getConnexion();
$user=new User($_POST['login'],md5($_POST['pwd']),$conn);
$u=$user->Logedin($conn,$_POST['login'],md5($_POST['pwd']));

	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['pwd'];
$vide=false;
if (!empty($_POST['login']) && !empty($_POST['pwd'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['email']==$_POST['login'] && $t['mdp']==md5($_POST['pwd'])){
		session_start();
		$_SESSION['id']=$t['id'];
		$_SESSION['nom']=$t['nom'];
		$_SESSION['l']=$_POST['login'];
		$_SESSION['p']=md5($_POST['pwd']);
		$_SESSION['r']=$t['rolee'];

    
		header("location:page_membre.php");
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
		 echo '<meta http-equiv="refresh" content="0;URL=accueil.html">'; 
		 
		
}	} 
 
else { 
     echo '<body onLoad="alert(\'Un des champs est vide\')">'; 
     ?> <a href="..\Frontend\accueil.html">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>