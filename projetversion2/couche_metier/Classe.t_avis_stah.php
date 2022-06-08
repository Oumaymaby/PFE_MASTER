<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/
class STAH_AVIS
{
	private $id_user,$remarque_sup_stah,$avis_stah,$date_avis_stah,$valide_par_stah,$approuve_par_stah,$remarque_bet_prot_inn,$avis_abht_amen,$amena_prop,$date_avis_bet_stah,$id_prj;
	function __construct($b,$c,$d,$e,$f,$g,$h,$j,$m,$k,$z)
	{
        // $this->id_pr = $a;
        $this->avis_stah=$b;
		$this->avis_abht_amen=$c;
        $this->date_avis_stah=$d;
        $this->valide_par_stah=$e;
        $this->approuve_par_stah=$f;
		$this->remarque_sup_stah= $g;
		$this->amena_prop=$h;
        $this->date_avis_bet_stah=$j;
        $this->id_stah_info=$m;
        $this->id_prj=$k; 
		$this->id_user=$z; 
	}
    function getid_user(){
		return $this->id_user;
	}
    function setid_user($a){
		$this->id_user=$a;
	}
	function getremarque_sup_stah(){
		return $this->remarque_sup_stah;
	}
	function setremarque_sup_stah($a){
		$this->remarque_sup_stah=$a;
	}
    function getavis_stah(){
		return $this->avis_stah;
	}
	function setavis_stah($a){
		$this->avis_stah=$a;
	}
    function getdate_avis_stah(){
		return $this->date_avis_stah;
	}
	function setdate_avis_stah($a){
		$this->date_avis_stah=$a;
	}
    function getvalide_par_stah(){
		return $this->valide_par_stah;
	}
	function setvalide_par_stah($a){
		$this->valide_par_stah=$a;
	}
    function getapprouve_par_stah(){
		return $this->approuve_par_stah;
	}
	function setapprouve_par_stah($a){
		$this->approuve_par_stah=$a;
	}
	function getremarque_bet_prot_inn(){
		return $this->remarque_bet_prot_inn;
	}
	function setremarque_bet_prot_inn($a){
		$this->remarque_bet_prot_inn=$a;
	}
	function getavis_abht_amen(){
		return $this->avis_abht_amen;
	}
	function setavis_abht_amen($a){
		$this->avis_abht_amen=$a;
	}
	function getamena_prop(){
		return $this->amena_prop;
	}
	function setamena_prop($a){
		$this->amena_prop=$a;
	}
    function getdate_avis_bet_stah(){
		return $this->date_avis_bet_stah;
	}
	function setdate_avis_bet_stah($a){
		$this->date_avis_bet_stah=$a;
	}
    function getid_stah_info(){
		return $this->id_stah_info;
	}
	function setid_stah_info($a){
		$this->id_stah_info=$a;
	}
    function getid_prj(){
		return $this->id_prj;
	}
	function setid_prj($a){
		$this->id_prj=$a;
	}
    
}

//  $avis = new ABHT(1,"favorable","10/12/2010","1","2","3","origine_AEP","origine_autre","bes_eau_dom","bes_eau_irrig","rem_bet_bes_eau");
// echo "L'avis abht  est ' " . $avis->getid_pr() ." ".$avis->getid_pr()."".$avis->getavis_abht()."".$avis->getdate_avis_abht()."".$avis->getetabli_par()."".$avis->getvalide_par()."".$avis->getapprouve_par()."".$avis->getorigine_AEP()."".$avis->getorigine_autre()."".$avis->getbes_eau_dom()."".$avis->getbes_eau_irrig()."".$avis->getrem_bet_bes_eau();

?>