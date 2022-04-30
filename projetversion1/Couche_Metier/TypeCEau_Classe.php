<?php
/**
* OUMAIMA SABI
* DATE:17/02/2022
*/
class TypeCEau
{
	private $id_type,$typeceau;
	function __construct($b,$c)
	{
		$this->id_type = $b;
		$this->typeceau= $c;
	}
	function getid_type(){
		return $this->id_type;
	}
	function gettypeceau(){
		return $this->typeceau;
	}

    function setid_type($a){
		$this->id_type=$a;
	}
	function settypeceau($a){
		$this->typeceau=$a;
	}
}

// $typeceau = new TypeCEau(1,"Oued/Chaabat");
// echo "Le type de projet est  " . $typeceau->getid_type(). " " . $typeceau->gettypeceau();

?>