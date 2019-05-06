<?php
class livraison{
	private $id;
	private $mail;
	private $adresse;
	private $idlivreur;
	private $commande;
	private $etatdelivraison;

	function __construct($id,$mail,$adresse,$idlivreur,$commande,$etatdelivraison)
	{
		$this->id=$id;
		$this->mail=$mail;
		$this->adresse=$adresse;
		$this->idlivreur=$idlivreur;
		$this->commande=$commande;
		$this->etatdelivraison=$etatdelivraison;
	}

	function getid()
	{return $this->id;}

	function getmail()
	{return $this->mail;}

function getadresse()
	{return $this->adresse;}

	function getcommande()
	{return $this->commande;}

function getidlivreur()
	{return $this->idlivreur;}
 
 	function getetatdelivraison()
	{return $this->etatdelivraison;}

	


}
?>