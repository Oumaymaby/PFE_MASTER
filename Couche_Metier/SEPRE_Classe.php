<?php
/**
* OUMAIMA SABI
* DATE:03/03/2022
*/
class SEPRE
{
	private $id_pr,$remarques_sup_sepre,$avis_sepre,$date_avis_sepre,$remarque_bet_besoin_eau,$origine_eau_pot,$origine_autre,$bes_eau_dom,$bes_eau_irrg;
	function __construct($a,$b,$c,$d,$e,$f,$g,$i,$j)
	{
        $this->id_pr = $a;
		$this->avis_sepre=$b;
		$this->remarque_bet_besoin_eau=$c;
        $this->remarques_sup_sepre=$d;
        $this->date_avis_sepre=$e;
		$this->origine_eau_pot=$f;
		$this->origine_autre=$g;
		$this->bes_eau_dom=$i;
		$this->bes_eau_irrg=$j;
        // $this->type_cours_eau=$s;
        // $this->nom_cours_eau=$t;
        // $this->crue_100=$u;
        // $this->servitude=$v;
        // $this->nature_cours_eau=$w;
        // $this->origine_aep_puits_x=$x;
        // $this->origine_aep_puits_y=$y;
        // $this->autorisation_pf_creusement=$z;
        // $this->autorisation_pf_prelevement=$aa;
        // $this->autorisation_occupation_dph=$ab;
        // $this->autre_autorisation=$ac;
	}
    function getid_pr(){
		return $this->id_pr;
	}
    function setid_pr($a){
		$this->id_pr=$a;
	}
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

	// function settype_cours_eau($a){
	// 	$this->type_cours_eau=$a;
	// }
    // function gettype_cours_eau(){
	// 	return $this->type_cours_eau;
	// }
    // function getnom_cours_eau(){
	// 	return $this->nom_cours_eau;
	// }
	// function setnom_cours_eau($a){
	// 	$this->nom_cours_eau=$a;
	// }
    // function getcrue_100(){
	// 	return $this->crue_100;
	// }
	// function setcrue_100($a){
	// 	$this->crue_100=$a;
	// }
    // function getservitude(){
	// 	return $this->servitude;
	// }
	// function setservitude($a){
	// 	$this->servitude=$a;
	// }
    // function getnature_cours_eau(){
	// 	return $this->nature_cours_eau;
	// }
	// function setnature_cours_eau($a){
	// 	$this->nature_cours_eau=$a;
	// }
    // function getorigine_aep_puits_x(){
	// 	return $this->origine_aep_puits_x;
	// }
	// function setorigine_aep_puits_x($a){
	// 	$this->origine_aep_puits_x=$a;
	// }
    // function getorigine_aep_puits_y(){
	// 	return $this->origine_aep_puits_y;
	// }
	// function setorigine_aep_puits_y($a){
	// 	$this->origine_aep_puits_y=$a;
	// }
    
    // function getautorisation_pf_creusement(){
	// 	return $this->autorisation_pf_creusement;
	// }
	// function setautorisation_pf_creusement($a){
	// 	$this->autorisation_pf_creusement=$a;
	// }

    // function getautorisation_pf_prelevement(){
	// 	return $this->autorisation_pf_prelevement;
	// }
	// function setautorisation_pf_prelevement($a){
	// 	$this->autorisation_pf_prelevement=$a;
	// }
    // function getautorisation_occupation_dph(){
	// 	return $this->autorisation_occupation_dph;
	// }
	// function setautorisation_occupation_dph($a){
	// 	$this->autorisation_occupation_dph=$a;
	// }
    // function getautre_autorisation(){
	// 	return $this->autre_autorisation;
	// }
	// function setautre_autorisation($a){
	// 	$this->autre_autorisation=$a;
	// }
    
}
?>