<?php
/**
* OUMAIMA SABI
* DATE:03/03/2022
*/
class SEPRE_AVIS
{
	private $remarques_sup_sepre,$avis_sepre,$date_avis_sepre,$remarque_bet_besoin_eau,$date_avis_bet_sepre,$id_prj,$id_sepre_info,$valide,$approuve;
	function __construct($b,$c,$d,$e,$ac,$ee,$a,$ab,$y,$x)
	{
        // $this->id_pr = $a;
		$this->avis_sepre=$b;
		$this->remarque_bet_besoin_eau=$c;
        $this->remarques_sup_sepre=$d;
        $this->date_avis_sepre=$e;
        $this->date_avis_bet_sepre=$ac;
		$this->id_user=$ee;
        $this->id_sepre_info=$a;
        $this->id_prj=$ab; 
		$this->valide=$y; 
		$this->approuve=$x; 
	}
    // function getid_sepre(){
	// 	return $this->id_sepre;
	// }
    // function setid_sepre($a){
	// 	$this->id_sepre=$a;
	// }
    function getdate_avis_sepre(){
		return $this->date_avis_sepre;
	}
    function setdate_avis_sepre($a){
		$this->date_avis_sepre=$a;
	}
	function getremarques_sup_sepre(){
		return $this->remarques_sup_sepre;
	}
	function setremarques_sup_sepre($a){
		$this->remarques_sup_sepre=$a;
	}
    function getavis_sepre(){
		return $this->avis_sepre;
	}
    function setavis_sepre($a){
		$this->avis_sepre=$a;
	}
	function getremarque_bet_besoin_eau(){
		return $this->remarque_bet_besoin_eau;
	}
	function setremarque_bet_besoin_eau($a){
		$this->remarque_bet_besoin_eau=$a;
	}
    function getdate_avis_bet_sepre(){
		return $this->date_avis_bet_sepre;
	}
	function setdate_avis_bet_sepre($a){
		$this->date_avis_bet_sepre=$a;
	}
	function getid_user(){
		return $this->id_user;
	}
	function setid_user($a){
		$this->id_user=$a;
	}
    function getid_sepre_info(){
		return $this->id_sepre_info;
	}
	function setid_sepre_info($a){
		$this->id_sepre_info=$a;
	}
	function getid_prj(){
		return $this->id_prj;
	}
	function setid_prj($a){
		$this->id_prj=$a;
	}
	function getvalide(){
		return $this->valide;
	}
	function setvalide($a){
		$this->valide=$a;
	}
	function getapprouve(){
		return $this->approuve;
	}
	function setapprouve($a){
		$this->approuve=$a;
	}
}
?>