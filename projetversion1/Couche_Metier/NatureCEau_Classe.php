<?php
/**
* OUMAIMA SABI
* DATE:17/02/2022
*/
class NatureCeau
{
	private $id_nature,$nature;
	function __construct($b,$c)
	{
		$this->id_nature = $b;
		$this->nature= $c;
	}
	function getid_nature(){
		return $this->id_nature;
	}
	function getnature(){
		return $this->nature;
	}

    function setid_nature($a){
		$this->id_nature=$a;
	}
	function setnature($a){
		$this->nature=$a;
	}
}
// $nature = new NatureCeau(1,"DPH");
// echo "La nature est  " . $nature->getid_nature(). " " . $nature->getnature();
?>