<?php
/**
* OUMAIMA SABI
* DATE:17/02/2022
*/
class Type_projet
{
	private $id_typep,$type_projet;
	function __construct($b,$c)
	{
		$this->id_typep= $b;
		$this->type_projet = $c;
	}
	function getid_typep(){
		return $this->id_typep;
	}
	function gettype_projet(){
		return $this->type_projet;
	}
    function setid_typep($a){
		$this->id_typep=$a;
	}
	function settype_projet($a){
		$this->type_projet=$a;
	}
}

// $type_projet = new Type_projet(1,"grandprojet");
// echo "Le type de projet est  " . $type_projet->getid_typep(). " " . $type_projet->gettype_projet();

?>