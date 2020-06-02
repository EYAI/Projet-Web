<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p']) && ($_SESSION['r']=="admin")  ) 
{ 
	
	header ('location:..\Backend\Index.php');

}
else if (isset($_SESSION['l']) && isset($_SESSION['p']) && ($_SESSION['r']=="client")  ) 
{
	header ('location:..\Frontend\index-2.html');
}
else if (isset($_SESSION['l']) && isset($_SESSION['p']) && ($_SESSION['r']=="agent")  )
{
	header ('location:..\Backend\Index.php');
}

?>