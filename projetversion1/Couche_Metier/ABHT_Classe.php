<?php
/**
* OUMAIMA SABI
* DATE:03/03/2022
*/
class ABHT
{
	private $id_pr,$avis_abht,$date_avis_abht,$etabli_par,$valide_par,$approuve_par,$rem_general,$etatdossier;
	function __construct($a,$p,$q,$r,$s,$t,$y,$x)
	{
        $this->id_pr = $a;
        $this->avis_abht=$p;
        $this->date_avis_abht=$q;
        $this->etabli_par=$r;
        $this->valide_par=$s;
        $this->approuve_par=$t;
        $this->rem_general=$y;
		$this->etatdossier=$x;
	}
    function getid_pr(){
		return $this->id_pr;
	}
    function setid_pr($a){
		$this->id_pr=$a;
	}
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
}

//  $avis = new ABHT(1,"favorable","10/12/2010","1","2","3","origine_AEP","origine_autre","bes_eau_dom","bes_eau_irrig","rem_bet_bes_eau");
// echo "L'avis abht  est ' " . $avis->getid_pr() ." ".$avis->getid_pr()."".$avis->getavis_abht()."".$avis->getdate_avis_abht()."".$avis->getetabli_par()."".$avis->getvalide_par()."".$avis->getapprouve_par()."".$avis->getorigine_AEP()."".$avis->getorigine_autre()."".$avis->getbes_eau_dom()."".$avis->getbes_eau_irrig()."".$avis->getrem_bet_bes_eau();

?>