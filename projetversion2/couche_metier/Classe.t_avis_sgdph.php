<?php
/**
* OUMAIMA SABI
* DATE:04/03/2022
*/
class SGDPH_AVIS
{
	private $remarque_sup_sgdph,$remarque_bet_sgdph,$avis_sgdph,$date_avis_sgdph,$valide_par_sgdph,$approuve_par_sgdph,$date_avis_bet_sgdph,$id_sgdph_info,$id_prj,$id_user;
	function __construct($b,$c,$d,$e,$f,$g,$o,$ab,$ac,$os)
	{
        // $this->id_pr = $a;
        $this->remarque_sup_sgdph=$b;
		$this->remarque_bet_sgdph=$c;
        $this->avis_sgdph=$d;
        $this->date_avis_sgdph=$e;
        $this->valide_par_sgdph=$f;
        $this->approuve_par_sgdph=$g;
        $this->date_avis_bet_sgdph=$o;
        $this->id_sgdph_info=$ab;
        $this->id_prj=$ac; 
		$this->id_user=$os; 
	}
    function getid_user(){
		return $this->id_user;
	}
    function setid_user($a){
		$this->id_user=$a;
	}
    function getremarque_sup_sgdph(){
		return $this->remarque_sup_sgdph;
	}
    function setremarque_sup_sgdph($a){
		$this->remarque_sup_sgdph=$a;
	}
	function getremarque_bet_sgdph(){
		return $this->remarque_bet_sgdph;
	}
    function setremarque_bet_sgdph($a){
		$this->remarque_bet_sgdph=$a;
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
    function gettype_cours_eau(){
		return $this->type_cours_eau;
	}
	function settype_cours_eau($a){
		$this->type_cours_eau=$a;
	}
    function getdate_avis_bet_sgdph(){
        return $this->date_avis_bet_sgdph;
    }
    function setdate_avis_bet_sgdph($a){
        $this->date_avis_bet_sgdph=$a;
    }
    function getid_sgdph_info(){
        return $this->id_sgdph_info;
    }
    function setid_sgdph_info($a){
        $this->id_sgdph_info=$a;
    }
    function getid_prj(){
        return $this->id_prj;
    }
    function setid_prj($a){
        $this->id_prj=$a;
    }
}

?>