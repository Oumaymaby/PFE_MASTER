<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/
class STAH
{
	private $id_pr,$remarque_sup_stah,$avis_stah,$date_avis_stah,$valide_par_stah,$approuve_par_stah,$volume_eau_usee,$mode_assainissement,$reutilisation_qeu,$reutilisation_niveau_traitement,$niveau_piezometrique,$date_niveau_piezometrique,$piezometre_x,$piezometre_y,$traitement_boue;
	function __construct($a,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y,$z,$b,$d,$c)
	{
        $this->id_pr = $a;
        $this->remarque_sup_stah= $p;
        $this->avis_stah=$q;
        $this->date_avis_stah=$r;
        $this->valide_par_stah=$s;
        $this->approuve_par_stah=$t;
        $this->volume_eau_usee=$u;
        $this->mode_assainissement=$v;
        $this->reutilisation_qeu=$w;
        $this->reutilisation_niveau_traitement=$x;
        $this->niveau_piezometrique=$y;
        $this->date_niveau_piezometrique=$b;
        $this->piezometre_x=$d;
        $this->piezometre_y=$c;
        $this->traitement_boue=$z;
	}
    function getid_pr(){
		return $this->id_pr;
	}
    function setid_pr($a){
		$this->id_pr=$a;
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
    function getvolume_eau_usee(){
		return $this->volume_eau_usee;
	}
	function setvolume_eau_usee($a){
		$this->volume_eau_usee=$a;
	}
    
    function getmode_assainissement(){
		return $this->mode_assainissement;
	}
	function setmode_assainissement($a){
		$this->mode_assainissement=$a;
	}

    function getreutilisation_qeu(){
		return $this->reutilisation_qeu;
	}
	function setreutilisation_qeu($a){
		$this->reutilisation_qeu=$a;
	}
    function getreutilisation_niveau_traitement(){
		return $this->reutilisation_niveau_traitement;
	}
	function setreutilisation_niveau_traitement($a){
		$this->reutilisation_niveau_traitement=$a;
	}
    function getdate_niveau_piezometrique(){
		return $this->date_niveau_piezometrique;
	}
	function setdate_niveau_piezometrique($a){
		$this->date_niveau_piezometrique=$a;
	}
    function getpiezometre_x(){
		return $this->piezometre_x;
	}
	function setpiezometre_x($a){
		$this->piezometre_x=$a;
	}
    function getpiezometre_y(){
		return $this->piezometre_y;
	}
	function setpiezometre_y($a){
		$this->piezometre_y=$a;
	}
    function gettraitement_boue(){
		return $this->traitement_boue;
	}
	function settraitement_boue($a){
		$this->traitement_boue=$a;
	}
}

//  $avis = new ABHT(1,"favorable","10/12/2010","1","2","3","origine_AEP","origine_autre","bes_eau_dom","bes_eau_irrig","rem_bet_bes_eau");
// echo "L'avis abht  est ' " . $avis->getid_pr() ." ".$avis->getid_pr()."".$avis->getavis_abht()."".$avis->getdate_avis_abht()."".$avis->getetabli_par()."".$avis->getvalide_par()."".$avis->getapprouve_par()."".$avis->getorigine_AEP()."".$avis->getorigine_autre()."".$avis->getbes_eau_dom()."".$avis->getbes_eau_irrig()."".$avis->getrem_bet_bes_eau();

?>