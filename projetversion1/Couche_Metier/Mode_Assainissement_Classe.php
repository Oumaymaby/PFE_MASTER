<?php
/**
* OUMAIMA SABI
* DATE:17/02/2022
*/
class mode_Assainissement
{
	private $id_assn,$mode_assn;
	function __construct($b,$c)
	{
		$this->id_assn = $b;
		$this->mode_assn= $c;
	}
	function getid_assn(){
		return $this->id_assn;
	}
	function getmode_assn(){
		return $this->mode_assn;
	}

    function setid_assn($a){
		$this->id_assn=$a;
	}
	function setmode_assn($a){
		$this->mode_assn=$a;
	}
}

// $mode = new mode_Assainissement(1,"Fosse septique");
// echo "Le mode d'Assainissement est  " . $mode->getid_assn() . " " . $mode->getmode_assn();

?>