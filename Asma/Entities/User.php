<?php 
include 'C:\wamp64\www\melodyo\Core\config.php';
class User{
	private $login;
    private $pwd;
	private $role;
    public $conn;	

	public function __construct($login,$pwd,$conn)
	{
		$this->login=$login;
		$this->pwd=$pwd;
		$c=new config();
		$this->conn=$c->getConnexion();
		
	}
	function getLog()
	{
		return $this->login;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	 function getRole()
	{
		return $this->role;	
	}
	public function Logedin($conn,$login,$pwd)
	{
		$req="select * from user where email='$login' && mdp='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	