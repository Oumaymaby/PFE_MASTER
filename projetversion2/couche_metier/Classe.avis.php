<?php
/**
* OUMAIMA SABI
* DATE:17/02/2022
*/
class Avis
{
	private $id_avis,$avis;
	function __construct($b,$c)
	{
		$this->id_avis = $b;
		$this->avis= $c;
	}
	function getid_avis(){
		return $this->id_avis;
	}
	function getavis(){
		return $this->avis;
	}

    function setid_avis($a){
		$this->id_avis=$a;
	}
	function setavis($a){
		$this->avis=$a;
	}
}

// $avis = new Avis(1,"favorable");
// echo "L'avis est ' " . $avis->getid_avis() . " " . $avis->getavis();

?>