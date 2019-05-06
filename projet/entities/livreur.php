<?php
class livreur{
	private $cin;
	private $nom;
	private $prenom;
	private $tel;
	private $adresse;
	private $vehicule;

	function __construct($cin,$nom,$prenom,$tel,$adresse,$vehicule)
	{
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->tel=$tel;
		$this->adresse=$adresse;
		$this->vehicule=$vehicule;
	}

	function getCin()
	{return $this->cin;}

	function getNom()
	{return $this->nom;}

function getPrenom()
	{return $this->prenom;}

	function getAdresse()
	{return $this->adresse;}

function getTel()
	{return $this->tel;}
 
 	function getVehicule()
	{return $this->vehicule;}

	


}
?>