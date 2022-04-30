<?php
/**
* OUMAIMA SABI
* DATE:17/02/2022
*/
class Typedossier 
{
	private $id_ty,$type_d;

	function __construct($b,$c)
	{
		$this->id_ty = $b;
		$this->type_d= $c;
	}
	function getid_ty(){
		return $this->id_ty;
	}
	function gettype_d(){
		return $this->type_d;
	}

    function setid_ty($a){
		$this->id_ty = $a;
	}
	function settype_d($a){
		$this->type_d = $a;
	}
    
}

// $typedossier= new Typedossier(1,"radema");
//     echo "Le type de projet est  " . $typedossier->getid_ty(). " " . $typedossier->gettype_d();

?>