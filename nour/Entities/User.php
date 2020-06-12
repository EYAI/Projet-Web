<?php 
include 'C:\wamp64\www\melodyo\Core\dbconfig.php';
class User{
	private $login;
    private $pwd;
	private $Prenom;
	private $Nom;
	private $ID;
	private $role;
    public $conn;
    	

	public function __construct($login,$pwd,$conn)
	{
		$this->login=$login;
		$this->pwd=$pwd;
		$c=new Database();
		$this->conn=$c->connexion();
		
	}
	
	function setLog(){
            $this->login = $login;
        }
	function getLog()
	{
		return $this->login;
	}
	function setPWD(){
            $this->pwd = $pwd;
        }
    function getPWD()
	{
		return $this->pwd;
		
	}
	
	function setPrenom(){
            $this->Prenom = $Prenom;
        }
	 function getPrenom()
	{
		return $this->Prenom;
		
	}
	function setNom(){
            $this->Nom = $Nom;
        }
	 function getNom()
	{
		return $this->Nom;
		
	}
	function setID(){
            $this->ID = $ID;
        }
	 function getID()
	{
		return $this->ID;
		
	}
	function setrole(){
            $this->role = $role;
        }
	 function getrole()
	{
		return $this->role;
		
	}
	
	

	public function Logedin($conn,$login,$pwd)
	{
		$req="select * from user where login='$login' && pwd='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>