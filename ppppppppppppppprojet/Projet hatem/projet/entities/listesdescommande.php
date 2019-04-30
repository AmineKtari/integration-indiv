<?php
class commande{
	private $num;
	private $nom;
	private $prenom;
	private $adress;
	private $date;
	private $etat;
	private $prixtotal;

   function __construct ($num,$cinfk,$date,$etat,$prixtotal)
   {
   	 $this->num=$num;
   	 $this->cinfk=$cinfk;
   	 $this->date=$date;
   	 $this->etat=$etat;
   	 $this->prixtotal=$prixtotal; 

   }
   function getnum()
   {return $this->num;}

   function getcinfk()
   {return $this->cinfk;}

   function getdate()
   {return $this->date;}

   function getetat()
   {return $this->etat;}

   function getprixtotal()
   {return $this->prixtotal;}
}   