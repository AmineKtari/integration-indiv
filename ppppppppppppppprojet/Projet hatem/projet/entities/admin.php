<?php 
include 'dbconfig.php';
class admin
{
	private $login;
    private $pwd;
		

	public function __construct($login,$pwd,$conn)
	{
		$this->login=$login;
		$this->pwd=$pwd;
		$c=new Database();
		$this->conn=$c->connexion();
		
	}
	function getLog()
	{
		return $this->login;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	
	public function Logedin($conn,$login,$pwd)
	{
		$req="SELECT * from admins where AdminLogin='$login' and pwd='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

}
	
	

	?>