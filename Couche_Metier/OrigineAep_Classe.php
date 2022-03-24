<?php
/**
* OUMAIMA SABI
* DATE:17/02/2022
*/
class OrigineAep
{
	private $id_aep,$origineaep;
	function __construct($b,$c)
	{
		$this->id_aep = $b;
		$this->origineaep= $c;
	}
	function getid_aep(){
		return $this->id_aep;
	}
	function getorigineaep(){
		return $this->origineaep;
	}

    function setid_aep($a){
		$this->id_avis=$a;
	}
	function setorigineaep($a){
		$this->origineaep=$a;
	}
}

?>