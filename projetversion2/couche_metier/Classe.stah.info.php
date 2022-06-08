<?php
/**
* OUMAIMA SABI
* DATE:19/05/2022
*/
class STAH_INFO
{
	private $superficie_bv,$date_info,$id_user,$id_prj;
	function __construct($i,$j,$k,$a)
	{
		$this->superficie_bv=$i;
        $this->date_info=$j;
        $this->id_user=$k; 
		$this->id_prj= $a;
	}
    function getid_prj(){
		return $this->id_prj;
	}
    function setid_prj($a){
		$this->id_prj=$a;
	}
	function getsuperficie_bv(){
		return $this->superficie_bv;
	}
	function setsuperficie_bv($a){
		$this->superficie_bv=$a;
	}
    function getdate_info(){
		return $this->date_info;
	}
	function setdate_info($a){
		$this->date_info=$a;
	}
    function getid_user(){
		return $this->id_user;
	}
	function setid_user($a){
		$this->id_user=$a;
	}
    
}

//  $avis = new ABHT(1,"favorable","10/12/2010","1","2","3","origine_AEP","origine_autre","bes_eau_dom","bes_eau_irrig","rem_bet_bes_eau");
// echo "L'avis abht  est ' " . $avis->getid_pr() ." ".$avis->getid_pr()."".$avis->getavis_abht()."".$avis->getdate_avis_abht()."".$avis->getetabli_par()."".$avis->getvalide_par()."".$avis->getapprouve_par()."".$avis->getorigine_AEP()."".$avis->getorigine_autre()."".$avis->getbes_eau_dom()."".$avis->getbes_eau_irrig()."".$avis->getrem_bet_bes_eau();

?>