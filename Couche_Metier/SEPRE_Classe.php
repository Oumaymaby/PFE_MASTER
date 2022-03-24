<?php
/**
* OUMAIMA SABI
* DATE:03/03/2022
*/
class SEPRE
{
	private $id_pr,$remarques_sup_sepre,$avis_sepre,$date_avis_sepre,$type_cours_eau,$nom_cours_eau,$crue_100,$servitude,$nature_cours_eau,$origine_aep_puits_x,$origine_aep_puits_y,$autorisation_pf_creusement,$autorisation_pf_prelevement,$autorisation_occupation_dph,$autre_autorisation,$remarque_bet_protection_inondations;
	function __construct($a,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y,$z,$aa,$ab,$ac,$ad)
	{
        $this->id_pr = $a;
        $this->remarques_sup_sepre=$p;
        $this->avis_sepre=$q;
        $this->date_avis_sepre=$r;
        $this->type_cours_eau=$s;
        $this->nom_cours_eau=$t;
        $this->crue_100=$u;
        $this->servitude=$v;
        $this->nature_cours_eau=$w;
        $this->origine_aep_puits_x=$x;
        $this->origine_aep_puits_y=$y;
        $this->autorisation_pf_creusement=$z;
        $this->autorisation_pf_prelevement=$aa;
        $this->autorisation_occupation_dph=$ab;
        $this->autre_autorisation=$ac;
        $this->remarque_bet_protection_inondations=$ad;


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
	function settype_cours_eau($a){
		$this->type_cours_eau=$a;
	}
    function gettype_cours_eau(){
		return $this->type_cours_eau;
	}
    function getnom_cours_eau(){
		return $this->nom_cours_eau;
	}
	function setnom_cours_eau($a){
		$this->nom_cours_eau=$a;
	}
    function getcrue_100(){
		return $this->crue_100;
	}
	function setcrue_100($a){
		$this->crue_100=$a;
	}
    function getservitude(){
		return $this->servitude;
	}
	function setservitude($a){
		$this->servitude=$a;
	}
    function getnature_cours_eau(){
		return $this->nature_cours_eau;
	}
	function setnature_cours_eau($a){
		$this->nature_cours_eau=$a;
	}
    function getorigine_aep_puits_x(){
		return $this->origine_aep_puits_x;
	}
	function setorigine_aep_puits_x($a){
		$this->origine_aep_puits_x=$a;
	}
    function getorigine_aep_puits_y(){
		return $this->origine_aep_puits_y;
	}
	function setorigine_aep_puits_y($a){
		$this->origine_aep_puits_y=$a;
	}
    
    function getautorisation_pf_creusement(){
		return $this->autorisation_pf_creusement;
	}
	function setautorisation_pf_creusement($a){
		$this->autorisation_pf_creusement=$a;
	}

    function getautorisation_pf_prelevement(){
		return $this->autorisation_pf_prelevement;
	}
	function setautorisation_pf_prelevement($a){
		$this->autorisation_pf_prelevement=$a;
	}
    function getautorisation_occupation_dph(){
		return $this->autorisation_occupation_dph;
	}
	function setautorisation_occupation_dph($a){
		$this->autorisation_occupation_dph=$a;
	}
    function getautre_autorisation(){
		return $this->autre_autorisation;
	}
	function setautre_autorisation($a){
		$this->autre_autorisation=$a;
	}
    function getremarque_bet_protection_inondations(){
		return $this->remarque_bet_protection_inondations;
	}
	function setremarque_bet_protection_inondations($a){
		$this->remarque_bet_protection_inondations=$a;
	}
}



?>