<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/
class SGDPH
{
	private $id_pr,$remarque_sup_sgdph,$avis_sgdph,$date_avis_sgdph,$valide_par_sgdph,$approuve_par_sgdph,$superficie_bv,$amenagement_propose;
	function __construct($a,$p,$q,$r,$s,$t,$u,$v)
	{
        $this->id_pr = $a;
        $this->remarque_sup_sgdph=$p;
        $this->avis_sgdph=$q;
        $this->date_avis_sgdph=$r;
        $this->valide_par_sgdph=$s;
        $this->approuve_par_sgdph=$t;
        $this->superficie_bv=$u;
        $this->amenagement_propose=$v;
	}
    function getid_pr(){
		return $this->id_pr;
	}
    function setid_pr($a){
		$this->id_pr=$a;
	}
    function getremarque_sup_sgdph(){
		return $this->remarque_sup_sgdph;
	}
    function setremarque_sup_sgdph($a){
		$this->remarque_sup_sgdph=$a;
	}
	function getavis_sgdph(){
		return $this->avis_sgdph;
	}
	function setavis_sgdph($a){
		$this->avis_sgdph=$a;
	}
    function getdate_avis_sgdph(){
		return $this->date_avis_sgdph;
	}
    function setdate_avis_sgdph($a){
		$this->date_avis_sgdph=$a;
	}
	function setvalide_par_sgdph($a){
		$this->valide_par_sgdph=$a;
	}
    function getvalide_par_sgdph(){
		return $this->valide_par_sgdph;
	}
    function getapprouve_par_sgdph(){
		return $this->approuve_par_sgdph;
	}
	function setapprouve_par_sgdph($a){
		$this->approuve_par_sgdph=$a;
	}
    function getsuperficie_bv(){
		return $this->superficie_bv;
	}
	function setsuperficie_bv($a){
		$this->superficie_bv=$a;
	}
    function getamenagement_propose(){
		return $this->amenagement_propose;
	}
	function setamenagement_propose($a){
		$this->amenagement_propose=$a;
	}
}



?>