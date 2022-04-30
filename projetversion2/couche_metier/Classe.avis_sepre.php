<?php
/**
* OUMAIMA SABI
* DATE:03/03/2022
*/
class SEPRE
{
	private $remarques_sup_sepre,$avis_sepre,$date_avis_sepre,$remarque_bet_besoin_eau,$origine_eau_pot,$origine_autre,$bes_eau_dom,$bes_eau_irrg,$date_avis_bet_sepre,$id_prj;
	function __construct($b,$c,$d,$e,$f,$g,$i,$j,$ac,$ab)
	{
        // $this->id_pr = $a;
		$this->avis_sepre=$b;
		$this->remarque_bet_besoin_eau=$c;
        $this->remarques_sup_sepre=$d;
        $this->date_avis_sepre=$e;
		$this->origine_eau_pot=$f;
		$this->origine_autre=$g;
		$this->bes_eau_dom=$i;
		$this->bes_eau_irrg=$j;
        $this->date_avis_bet_sepre=$ac;
        $this->id_prj=$ab; 
	}
    // function getid_pr(){
	// 	return $this->id_pr;
	// }
    // function setid_pr($a){
	// 	$this->id_pr=$a;
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
	function getorigine_eau_pot(){
		return $this->origine_eau_pot;
	}
	function setorigine_eau_pot($a){
		$this->origine_eau_pot=$a;
	}
	function getorigine_autre(){
		return $this->origine_autre;
	}
	function setorigine_autre($a){
		$this->origine_autre=$a;
	}
	function getbes_eau_dom(){
		return $this->bes_eau_dom;
	}
	function setbes_eau_dom($a){
		$this->bes_eau_dom=$a;
	}
	function getbes_eau_irrg(){
		return $this->bes_eau_irrg;
	}
	function setbes_eau_irrg($a){
		$this->bes_eau_irrg=$a;
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