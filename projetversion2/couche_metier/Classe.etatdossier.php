<?php
/**
* OUMAIMA SABI
* DATE:17/02/2022
*/
class Etat 
{
	private $id_etat,$etat_dossier;
	function __construct($b,$c)
	{
		$this->id_etat = $b;
		$this->etat_dossier= $c;
	}
	function getid_etat(){
		return $this->id_etat;
	}
	function getetat_dossier(){
		return $this->etat_dossier;
	}

    function setid_etat($a){
		$this->id_etat=$a;
	}
	function setetat_dossier($a){
		$this->etat_dossier=$a;
	}
}

// $Etat = new Etat(1,"Nouveau dossier");
// echo "L'état du dossier est ' " . $Etat->getid_etat() . " " . $Etat->getetat_dossier();
// 
?>