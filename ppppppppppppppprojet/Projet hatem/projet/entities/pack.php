<?php
class pack{
	private $Ref;
	private $nom;
	private $description;
	private $quantite;
	private $image;
	private $prix;
	private $x;
	private $y;
	private $z;

	function __construct($Ref,$nom,$description,$quantite,$image,$prix,$x,$y,$z)
	{
		$this->Ref=$Ref;
		$this->nom=$nom;
		$this->prix=$prix;
		$this->quantite=$quantite;
		$this->description=$description;
		$this->image=$image;
		$this->x=$x;
		$this->y=$y;
		$this->z=$z;
	}

	function get_nom()
	{return $this->nom;}

	function get_ref()
	{return $this->Ref;}

	function get_prix()
	{return $this->prix;}

	function get_quantite()
	{return $this->quantite;}

	function get_description()
	{return $this->description;}


	function get_image()
	{return $this->image;}

	function get_x()
	{return $this->x;}

	function get_y()
	{return $this->y;}

	function get_z()
	{return $this->z;}

}
?>