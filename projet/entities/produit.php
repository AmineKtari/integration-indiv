<?php
class produit{
	private $ref;
	private $nom;
	private $prix;
	private $categorie;
	private $description;
	private $image;
	private $quantite;

	function __construct($ref,$nom,$prix,$quantite,$description,$categorie,$image)
	{
		$this->ref=$ref;
		$this->nom=$nom;
		$this->prix=$prix;
		$this->quantite=$quantite;
		$this->description=$description;
		$this->categorie=$categorie;
		$this->image=$image;
	}

	function get_nom()
	{return $this->nom;}

	function get_ref()
	{return $this->ref;}

	function get_prix()
	{return $this->prix;}

	function get_quantite()
	{return $this->quantite;}

	function get_description()
	{return $this->description;}

	function get_categorie()
	{return $this->categorie;}

	function get_image()
	{return $this->image;}


}
?>