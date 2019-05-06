<?php
class dem{
	private $id;
	private $nom;
	private $mail;
	private $sujet;
	private $msg;
	private $etat;

	function __construct($id,$nom,$mail,$sujet,$msg,$etat)
	{
		$this->id=$id;
		$this->nom=$nom;
		$this->mail=$mail;
		$this->sujet=$sujet;
		$this->msg=$msg;
		$this->etat=$etat;
	}

	function getId()
	{return $this->id;}

	function getNom()
	{return $this->nom;}

	function getMail()
	{return $this->mail;}

	function getSujet()
	{return $this->sujet;}

	function getMsg()
	{return $this->msg;}

	function getEtat()
	{return $this->etat;}
}