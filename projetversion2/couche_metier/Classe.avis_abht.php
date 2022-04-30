<?php
/**
* OUMAIMA SABI
* DATE:03/03/2022
*/
class ABHT
{
	private $avis_abht,$date_avis_abht,$etabli_par,$valide_par,$approuve_par,$rem_general,$etatdossier,$date_avis_bet_sepre,$id_prj;
	function __construct($a,$p,$q,$r,$s,$t,$y,$x,$ac,$ab)
	{
        // $this->id_pr = $a;
        $this->avis_abht=$p;
        $this->date_avis_abht=$q;
        $this->etabli_par=$r;
        $this->valide_par=$s;
        $this->approuve_par=$t;
        $this->rem_general=$y;
		$this->etatdossier=$x;
        $this->date_avis_bet_sepre=$ac;
        $this->id_prj=$ab; 
	}
    // function getid_pr(){
	// 	return $this->id_pr;
	// }
    // function setid_pr($a){
	// 	$this->id_pr=$a;
	// }
	function getavis_abht(){
		return $this->avis_abht;
	}
	function setavis_abht($a){
		$this->avis_abht=$a;
	}
    function getdate_avis_abht(){
		return $this->date_avis_abht;
	}
	function setdate_avis_abht($a){
		$this->date_avis_abht=$a;
	}
    function getetabli_par(){
		return $this->etabli_par;
	}
	function setetabli_par($a){
		$this->etabli_par=$a;
	}
    function getvalide_par(){
		return $this->valide_par;
	}
	function setvalide_par($a){
		$this->valide_par=$a;
	}
    function getapprouve_par(){
		return $this->approuve_par;
	}
	function setapprouve_par($a){
		$this->approuve_par=$a;
	}
    function getrem_general(){
		return $this->rem_general;
	}
	function setrem_general($a){
		$this->rem_general=$a;
	}
	function getetatdossier(){
		return $this->etatdossier;
	}
	function setetatdossier($a){
		$this->etatdossier=$a;
	}
    function getdate_avis_bet_sepre(){
		return $this->date_avis_bet_sepre;
	}
	function setdate_avis_bet_sepre($a){
		$this->date_avis_bet_sepre=$a;
	}
	function getid_prj(){
		return $this->id_prj;
	}
	function setid_prj($a){
		$this->id_prj=$a;
	}
}



?>