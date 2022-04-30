<?php
/**
* OUMAIMA SABI
* DATE:17/02/2022
*/
class Categorie 
{
	private $id_cat,$categorie;
	function __construct($b,$c)
	{
		$this->id_cat= $b;
		$this->categorie = $c;
	}
	function getid_cat(){
		return $this->id_cat;
	}
	function getcategorie(){
		return $this->categorie;
	}
    function setid_cat($a){
		$this->id_cat=$a;
	}
	function setcategorie($a){
		$this->categorie=$a;
	}
}

// $categorie = new Categorie(1,"Rokhas");
// echo "La catégorie est ' " . $categorie->getid_cat() . " " . $categorie->getcategorie();

?>